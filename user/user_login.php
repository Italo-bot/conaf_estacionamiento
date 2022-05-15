<link href="../styles/bootstrap.min.css" rel="stylesheet">

<link href="../styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<div class="box" ><!-- box Starts -->

<div class="box-header" ><!-- box-header Starts -->

<center>

<h1>Estacionamiento CONAF</h1>

<p class="lead" >Ingreso solo para personal registrado</p>

</center>

</div><!-- box-header Ends -->

<form action="index.php" method="post" ><!--form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label>Rut</label>

<input type="text" class="form-control" name="rut" required >

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Contraseña</label>

<input type="password" class="form-control" name="pass" required >

</div><!-- form-group Ends -->

<div class="text-center" ><!-- text-center Starts -->

<button name="login" value="Login" class="btn btn-primary" >

<i class="fa fa-sign-in" ></i> Ingresar

</button>

</div><!-- text-center Ends -->

</form><!--form Ends -->

</div><!-- box Ends -->

<?php

if(isset($_POST['login'])){

$usuario_rut = $_POST['rut'];

$usuario_pass = $_POST['pass'];

$select_usuario = "select * from usuarios where usu_rut='$usuario_rut' AND usu_pass='$usuario_pass'";

$run_usuario = mysqli_query($con,$select_usuario);

$get_ip = getRealUserIp();

$check_usuario = mysqli_num_rows($run_usuario);

$admin_rut = mysqli_real_escape_string($con,$_POST['rut']);
    
$admin_pass = mysqli_real_escape_string($con,$_POST['pass']);
    
$get_admin = "select * from admins where ad_rut='$admin_rut' AND ad_pass='$admin_pass'";
    
$run_admin = mysqli_query($con,$get_admin);
    
$count = mysqli_num_rows($run_admin);
    
if($count==1){
    
$_SESSION['ad_rut']=$admin_rut;
    
echo "<script>alert('Ingreso de administrador con éxito')</script>";
    
echo "<script>window.open('admin/index.php?dashboard','_self')</script>";
    
}

else {
      
}

if($check_usuario==0){

echo "<script>alert('Contraseña o usuario erroneo')</script>";

exit();

}

if($check_usuario==1 AND $check_cart==0){

$_SESSION['usu_rut']=$usuario_rut;

echo "<script>alert('Ingreso con éxito')</script>";

echo "<script>window.open('user/my_account.php?create_record','_self')</script>";

}

else {

$_SESSION['usu_rut']=$usuario_rut;

echo "<script>alert('Ingreso con éxito')</script>";

echo "<script>window.open('user/my_account.php?create_record','_self')</script>";

} 

}