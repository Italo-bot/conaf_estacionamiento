<?php

session_start();

if(!isset($_SESSION['usu_rut'])){

echo "<script>window.open('../index.php','_self')</script>";

}else {

include("includes/db.php");

include("functions/functions.php");

?>

<!DOCTYPE html>

<html>

<head>

<title>Conaf | Estacionamiento </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="../styles/bootstrap.min.css" rel="stylesheet">

<link href="../styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

<div id="top"><!-- top Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-6 offer"><!-- col-md-6 offer Starts -->

</ul><!-- menu Ends -->

</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->

</div><!-- top Ends -->

<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->

<div class="container" ><!-- container Starts -->

<div class="navbar-header"><!-- navbar-header Starts -->

</div><!-- navbar-header Ends -->

<div class="padding-nav" ><!-- padding-nav Starts -->

<ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->

</ul><!-- nav navbar-nav navbar-left Ends -->

</div><!-- padding-nav Ends -->

<div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->

</span><!-- input-group-btn Ends -->

</div><!-- input-group Ends -->

</form><!-- navbar-form Ends -->

</div><!-- collapse clearfix Ends -->

</div><!-- navbar-collapse collapse Ends -->

</div><!-- container Ends -->

</div><!-- navbar navbar-default Ends -->

<div id="content" ><!-- content Starts -->

<div class="container" ><!-- container Starts -->

<div class="col-md-3"><!-- col-md-3 Starts -->

<?php include("includes/sidebar.php"); ?>

</div><!-- col-md-3 Ends -->

<div class="col-md-9" ><!--- col-md-9 Starts -->

<div class="box" ><!-- box Starts -->

<?php

if(isset($_GET['create_record'])){

include("create_record.php");

}

if(isset($_GET['history'])) {

include("history.php");

}

if(isset($_GET['change_pass'])){

include("change_pass.php");

}

if(isset($_GET['excel'])){

    include("excel.php");
    
}

if(isset($_GET['reserve_car'])){

    include("reserve_car.php");
    
}

if(isset($_GET['create_record2'])){

    include("create_record2.php");
    
}
  
?>

</div><!-- box Ends -->

</div><!--- col-md-9 Ends -->

</div><!-- container Ends -->

</div><!-- content Ends -->

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php } ?>