<?php

if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['car_edit'])){

$edit_id = $_GET['car_edit'];

$get_ve = "select * from vehiculos where id_vehi='$edit_id'";

$run_edit = mysqli_query($con,$get_ve);

$row_edit = mysqli_fetch_array($run_edit);

$ve_id = $row_edit['id_vehi'];

$ve_estado_vehi = $row_edit['estado_vehi'];

$ve_reserva = $row_edit['reserva'];

}

?>


<!DOCTYPE html>

<html>

<head>

<title> Edit vehiculos </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit vehiculos

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit vehiculos

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Reservado Por: </label>

<div class="col-md-6" >

<select name="reserva" class="form-control" >

<option>Seleccionar </option>

<?php

$get_usuarios = "select * from usuarios";

$run_usuarios = mysqli_query($con,$get_usuarios);

while ($row_usuarios=mysqli_fetch_array($run_usuarios)) {

$usu_nombre = $row_usuarios['usu_nombre'];

echo "<option value='$usu_nombre' >$usu_nombre</option>";

}

?>

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Estado </label>

<div class="col-md-6" >

<select name="estado_vehi" class="form-control">
<option>Seleccionar</option>
<option> Disponible </option>
<option> Reservado </option>
<option> En mantención </option>
</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Actualizar" class="btn btn-primary form-control" >

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

if(isset($_POST['update'])){

$reserva = $_POST['reserva'];

$estado_vehi = $_POST['estado_vehi'];

$update_vehiculo = "update vehiculos set reserva='$reserva', estado_vehi='$estado_vehi' where id_vehi='$ve_id'";

$run_vehiculo = mysqli_query($con,$update_vehiculo);

if($run_vehiculo){

echo "<script> alert('vehiculo has been updated successfully') </script>";

echo "<script>window.open('index.php?view_cars','_self')</script>";

}

}

?>

<?php } ?>
