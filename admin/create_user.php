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

<i class="fa fa-dashboard" ></i> Dashboard / Agregar Usuario

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Agregar Usuario

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Nombre Usuario: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="usu_nombre" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Rut de Usuario: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="usu_rut" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Contraseña de Usuario: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="password" name="usu_pass" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Departamento de Usuario: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="usu_depto" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Comuna de Usuario: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="usu_comuna" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Contacto de Usuario: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="usu_contacto" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Foto de Usuario: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" name="usu_foto" class="form-control" required>

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

    $usu_nombre = $_POST['usu_nombre'];
    
    $usu_rut = $_POST['usu_rut'];
    
    $usu_pass = $_POST['usu_pass'];
    
    $usu_depto = $_POST['usu_depto'];
    
    $usu_comuna = $_POST['usu_comuna'];
    
    $usu_contacto = $_POST['usu_contacto'];
    
    $usu_foto = $_FILES['usu_foto']['name'];
    
    $c_image_tmp = $_FILES['usu_foto']['tmp_name'];
    
    move_uploaded_file($c_image_tmp,"../user/user_images//$usu_foto");
    
    $insert_usuario = "insert into usuarios (usu_nombre,usu_rut,usu_pass,usu_depto,usu_comuna,usu_contacto,usu_foto) 
    values ('$usu_nombre','$usu_rut','$usu_pass','$usu_depto','$usu_comuna','$usu_contacto','$usu_foto')";
    
    
    $run_usuario = mysqli_query($con,$insert_usuario);
    
    if($run_usuario){

        echo "<script>alert('Usuario Ingresado!')</script>";
        
        echo "<script>window.open('index.php?view_users','_self')</script>";
        

}


}


?>



<?php }  ?>