<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>

<!DOCTYPE html>

<html>

<head>

<title>Conaf | Estacionamiento </title>

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="fondo.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

<div id="top"><!-- top Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-6 offer"><!-- col-md-6 offer Starts -->

</div><!-- col-md-6 offer Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->

</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->

</div><!-- top Ends -->

<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->

<div class="container" ><!-- container Starts -->

<div class="navbar-header"><!-- navbar-header Starts -->

<a class="navbar-brand home" href="index.php" ><!--- navbar navbar-brand home Starts -->

</a><!--- navbar navbar-brand home Ends -->

</div><!-- navbar-header Ends -->

</div><!-- container Ends -->

</div><!-- navbar navbar-default Ends -->

<div id="content"><!-- content Starts -->

<div class="container" ><!-- container Starts -->

<div class="col-md-9" ><!-- col-md-9 Starts -->

<?php

if(!isset($_SESSION['usu_rut'])){

include("user/user_login.php");

}else{

include("logout.php");

}

?>

</div><!-- col-md-9 Ends -->

</div><!-- container Ends -->

</div><!-- content Ends -->

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>

</html>