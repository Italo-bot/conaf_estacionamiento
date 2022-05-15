<?php

if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('../index.php','_self')</script>";

}

else {

?>
<!DOCTYPE html>

<html>

<head>

<title> Agregar Vehículo </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Agregar Vehículo

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

 Agregar Vehículo

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Patente </label>

<div class="col-md-6" >

<input type="text" name="patente" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Kilometraje </label>

<div class="col-md-6" >

<input type="text" name="kilometraje" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Marca </label>

<div class="col-md-6" >

<input type="text" name="marca" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Modelo </label>

<div class="col-md-6" >

<input type="text" name="modelo" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Imagen (Frontal/Patente) </label>

<div class="col-md-6" >

<input type="file" name="foto_vehi" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > N° Chasis </label>

<div class="col-md-6" >

<input type="text" name="n_chasis" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > N° Motor </label>

<div class="col-md-6" >

<input type="text" name="n_motor" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Año </label>

<div class="col-md-6" >

<input type="text" name="year" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Color </label>

<div class="col-md-6" >

<input type="text" name="color" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Tipo De Vehículo </label>

<div class="col-md-6" >

<input type="text" name="tipo_vehi" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Tipo De Combustible </label>

<div class="col-md-6" >

<input type="text" name="tipo_combustible" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Estado </label>

<div class="col-md-6" >

<select name="estado_vehi" class="form-control" required >

<option> Seleccionar </option>
<option> Disponible </option>
<option> Reservado </option>
<option> En mantención </option>

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Ingresar Vehículo" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['submit'])){

$patente = $_POST['patente'];
$kilometraje = $_POST['kilometraje'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$n_chasis = $_POST['n_chasis'];
$n_motor = $_POST['n_motor'];
$year = $_POST['year'];
$color = $_POST['color'];
$tipo_vehi = $_POST['tipo_vehi'];
$tipo_combustible = $_POST['tipo_combustible'];
$estado_vehi = $_POST['estado_vehi'];

$foto_vehi = $_FILES['foto_vehi']['name'];

$temp_car_imagen = $_FILES['foto_vehi']['tmp_name'];

move_uploaded_file($temp_car_imagen,"car_images/$foto_vehi");

$insert_car = "insert into vehiculos (patente,kilometraje,marca,modelo,n_chasis,n_motor,color,tipo_vehi,tipo_combustible,estado_vehi,foto_vehi)
values ('$patente','$kilometraje','$marca','$modelo','$n_chasis','$n_motor','$color','$tipo_vehi','$tipo_combustible','$estado_vehi','$foto_vehi')";

$run_car = mysqli_query($con,$insert_car);

if($run_car){

echo "<script>alert('Vehículo ingresado con éxito')</script>";

echo "<script>window.open('index.php?view_cars','_self')</script>";

}

}

?>

<?php } ?>
