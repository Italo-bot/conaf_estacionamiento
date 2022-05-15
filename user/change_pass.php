<h1 align="center">Cambiar Contraseña </h1>

<form action="" method="post"><!-- form Starts -->

<div class="form-group"><!-- form-group Starts -->

<label>Contraseña Actual</label>

<input type="text" name="old_pass" class="form-control" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>Nueva Contraseña</label>

<input type="text" name="new_pass" class="form-control" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>Repetir Nueva Contraseña</label>

<input type="text" name="new_pass_again" class="form-control" required>

</div><!-- form-group Ends -->

<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="submit" class="btn btn-primary">

<i class="fa fa-user-md"> </i> Cambiar

</button>

</div><!-- text-center Ends -->

</form><!-- form Ends -->

<?php

if(isset($_POST['submit'])){

$u_rut = $_SESSION['usu_rut'];

$old_pass = $_POST['old_pass'];

$new_pass = $_POST['new_pass'];

$new_pass_again = $_POST['new_pass_again'];

$sel_old_pass = "select * from usuarios where usu_pass='$old_pass'";

$run_old_pass = mysqli_query($con,$sel_old_pass);

$check_old_pass = mysqli_num_rows($run_old_pass);

if($check_old_pass==0){

echo "<script>alert('Su contraseña actual no es correcta.')</script>";

exit();

}

if($new_pass!=$new_pass_again){

echo "<script>alert('Su nueva contraseña no coincide.')</script>";

exit();

}

$update_pass = "update usuarios set usu_pass='$new_pass' where usu_rut='$u_rut'";

$run_pass = mysqli_query($con,$update_pass);

if($run_pass){

echo "<script>alert('Contraseña cambiada con éxito.')</script>";

echo "<script>window.open('my_account.php?dashboard','_self')</script>";

}

}

?>
