<?php



if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['car_delete'])){

$delete_id = $_GET['car_delete'];

$delete_ca = "delete from vehiculos where id_vehi='$delete_id'";

$run_delete = mysqli_query($con,$delete_ca);

if($run_delete){

echo "<script>alert('Eliminado con éxito!')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

}

}

?>

<?php } ?>