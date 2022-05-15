<?php

if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('../checkout.php','_self')</script>";

}

else {

?>
<!DOCTYPE html>

<html>

<head>

<title> Insert Products </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Agregar Registro

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Agregar Registro

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Rut </label>

<div class="col-md-6" >

<input type="text" name="usu_rut" class="form-control" value="<?php

if(!isset($_SESSION['ad_rut'])){

echo "";

}else{

echo $_SESSION['ad_rut'];

}

?>"required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Vehículo </label>

<div class="col-md-6" >

<select name="vehi_pa" class="form-control" >

<option> Seleccionar Vehículo </option>

<?php

$get_car = "select * from vehiculos";

$run_car = mysqli_query($con,$get_car);

while ($row_car=mysqli_fetch_array($run_car)) {

$patente = $row_car['patente'];

echo "<option value='$patente' >$patente</option>";

}

?>

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Imagen  </label>

<div class="col-md-6" >

<input type="file" name="foto_reg" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Kilometraje </label>

<div class="col-md-6" >

<input type="text" name="kilometraje" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Tipo </label>

<div class="col-md-6" >


<select name="tipo_reg" class="form-control" required >

<option> Seleccionar </option>
<option> Entrada </option>
<option> Salida </option>
</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Observación </label>

<div class="col-md-6" >

<textarea name="destino" class="form-control" rows="6" cols="19" ></textarea>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Fecha/Hora </label>

<div class="col-md-6" >

<ol class="breadcrumb">

<?php date_default_timezone_set("America/Santiago"); echo date("d-m-Y");?> / <span id="tiempo">00 : 00 : 00</span>

<script src="../user/js/time.js"> </script>

</ol>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Ingresar" class="btn btn-primary form-control" >

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

  $usu_rut = $_POST['usu_rut'];
  $kilometraje = $_POST['kilometraje'];
  $destino = $_POST['destino'];
  $tipo_reg = $_POST['tipo_reg'];
  $vehi_pa = $_POST['vehi_pa'];
  
  $foto_reg = $_FILES['foto_reg']['name'];

  
  $temp_name1 = $_FILES['foto_reg']['tmp_name'];

  
  move_uploaded_file($temp_name1,"../admin/record_images/$foto_reg");

  
  $insert_product = "insert into registros (patente,usu_rut,foto_reg,kilometraje,destino,tipo_reg) values ('$vehi_pa','$usu_rut','$foto_reg','$kilometraje','$destino','$tipo_reg')";
  
  $run_product = mysqli_query($con,$insert_product);
  
  if($run_product){
  
  echo "<script>alert('Registro ingresado con éxito')</script>";
  
  echo "<script>window.open('index.php?view_records','_self')</script>";

}

}

if(isset($_POST['submit'])){

  $kilometraje = $_POST['kilometraje'];
  $vehi_pa = $_POST['vehi_pa'];
 
  $update_car = "update vehiculos set kilometraje='$kilometraje' where patente ='$vehi_pa'";
  
  $run_car = mysqli_query($con,$update_car);
  
  if($run_car){
  
  echo "<script> alert('Product has been updated successfully') </script>";
  
  echo "<script>window.open('index.php?view_records','_self')</script>";
  
  }
  
  }

?>

<?php } ?>
