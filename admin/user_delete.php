<?php

if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('../index.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['user_delete'])){

$delete_id = $_GET['user_delete'];

$delete_usuario = "delete from usuarios where usu_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_usuario);

if($run_delete){

echo "<script>alert('Usuario Borrado!')</script>";

echo "<script>window.open('index.php?view_users','_self')</script>";

}

}

?>

<?php } ?>