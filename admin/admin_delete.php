<?php

if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('../index.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['admin_delete'])){

$delete_id = $_GET['admin_delete'];

$delete_admin = "delete from admins where ad_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_admin);

if($run_delete){

echo "<script>alert('Administrador Borrado!')</script>";

echo "<script>window.open('index.php?view_admins','_self')</script>";

}


}


?>

<?php } ?>