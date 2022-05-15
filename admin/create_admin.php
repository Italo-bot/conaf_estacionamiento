<?php

if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('../index.php','_self')</script>";

}

else {

?>

<div class="row" ><!-- 1  row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / Agregar Administrador

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Agregar Administrador

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Nombre: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="ad_nombre" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Rut: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="ad_rut" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Contraseña: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="password" name="ad_pass" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Departamento: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="ad_depto" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Contacto: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="ad_contacto" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Comuna: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<textarea name="ad_comuna" class="form-control" rows="3"> </textarea>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Foto: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" name="ad_foto" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="submit" value="Agregar" class="btn btn-primary form-control">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$ad_nombre = $_POST['ad_nombre'];

$ad_rut = $_POST['ad_rut'];

$ad_pass = $_POST['ad_pass'];

$ad_depto = $_POST['ad_depto'];

$ad_comuna = $_POST['ad_comuna'];

$ad_contacto = $_POST['ad_contacto'];

$ad_foto = $_FILES['ad_foto']['name'];

$temp_admin_image = $_FILES['ad_foto']['tmp_name'];

move_uploaded_file($temp_admin_image,"admin_images/$ad_foto");

$insert_admin = "insert into admins (ad_nombre,ad_rut,ad_pass,ad_foto,ad_contacto,ad_depto,ad_comuna) values ('$ad_nombre','$ad_rut','$ad_pass','$ad_foto','$ad_contacto','$ad_depto','$ad_comuna')";

$run_admin = mysqli_query($con,$insert_admin);

if($run_admin){

echo "<script>alert('Administrador Ingresado!')</script>";

echo "<script>window.open('index.php?view_admins','_self')</script>";

}

}

?>

<?php }  ?>