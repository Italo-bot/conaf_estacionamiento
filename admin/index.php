<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('../index.php','_self')</script>";

}

else {

?>

<?php

$admin_session = $_SESSION['ad_rut'];

$get_admin = "select * from admins where ad_rut='$admin_session'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$ad_id = $row_admin['ad_id'];

$ad_nombre = $row_admin['ad_nombre'];

$ad_rut = $row_admin['ad_rut'];

$ad_foto = $row_admin['ad_foto'];

$ad_contacto = $row_admin['ad_contacto'];

$ad_depto = $row_admin['ad_depto'];

$ad_comuna = $row_admin['ad_comuna'];

$get_registros = "select * from registros";
$run_registros = mysqli_query($con,$get_registros);
$count_registros = mysqli_num_rows($run_registros);

$get_vehiculos = "select * from vehiculos";
$run_vehiculos = mysqli_query($con,$get_vehiculos);
$count_vehiculos = mysqli_num_rows($run_vehiculos);

$get_usuarios = "select * from usuarios";
$run_usuarios = mysqli_query($con,$get_usuarios);
$count_usuarios = mysqli_num_rows($run_usuarios);

$get_admins = "select * from admins";
$run_admins = mysqli_query($con,$get_admins);
$count_admins = mysqli_num_rows($run_admins);

?>

<!DOCTYPE html>

<html>

<head>

<title>Admin Panel</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >

</head>

<body>

<div id="wrapper"><!-- wrapper Starts -->

<?php include("includes/sidebar.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<?php

if(isset($_GET['dashboard'])){

include("dashboard.php");

}

if(isset($_GET['create_record'])){

include("create_record.php");

}

if(isset($_GET['view_records'])){

include("view_records.php");

}

if(isset($_GET['view_admins'])){

include("view_admins.php");

}

if(isset($_GET['user_delete'])){

include("user_delete.php");

}

if(isset($_GET['create_admin'])){

include("create_admin.php");

}

if(isset($_GET['view_users'])){

include("view_users.php");

}

if(isset($_GET['admin_delete'])){

include("admin_delete.php");

}

if(isset($_GET['user_profile'])){

include("user_profile.php");

}

if(isset($_GET['create_car'])){

include("create_car.php");

}

if(isset($_GET['view_cars'])){

    include("view_cars.php");
    
}

if(isset($_GET['create_user'])){

    include("create_user.php");
    
}

if(isset($_GET['view_reserves'])){

    include("view_reserves.php");
    
}

if(isset($_GET['car_edit'])){

    include("car_edit.php");
    
}

if(isset($_GET['car_delete'])){

    include("car_delete.php");
    
}

?>

</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php } ?>