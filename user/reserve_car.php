<center><!-- center Starts -->

<h1>Reservar Vehículo</h1>

<p class="lead"> Formulario para la reserva de vehículos CONAF</p>

<p class="text-muted" >

<?php

if(!isset($_SESSION['usu_rut'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<!DOCTYPE html>

<html>

<head>

<title> Ingresar Pedido </title>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Reservar Vehículo
</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->

<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

Ingresar Datos

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Su Rut </label>

<div class="col-md-6" >

<input type="text" name="usu_rut" value= <?php

if(!isset($_SESSION['usu_rut'])){

echo "";

}else{

echo $_SESSION['usu_rut'];

}

?> class="form-control" required>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<di>

<label class="col-md-3 control-label" > Email Administrador </label>

<div class="col-md-6" >

<input type="text" name="ad_email" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<di>

<label class="col-md-3 control-label" > Asunto </label>

<div class="col-md-6" >

<input type="text" name="asunto" class="form-control" value= "Necesito reservar un vehículo, RUT :<?php if(!isset($_SESSION['usu_rut'])){

echo "";

}else{

echo $_SESSION['usu_rut'];

}?>" required>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Mensaje </label>

<div class="col-md-6" >

<textarea name="mensaje" class="form-control" rows="6" cols="19" required></textarea>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Fecha/Hora </label>

<div class="col-md-6" >

<ol class="breadcrumb">

<?php date_default_timezone_set("America/Santiago"); echo date("d-m-Y");?> / <span id="tiempo">00 : 00 : 00</span>

<script src="js/time.js"> </script>

</ol>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Enviar" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i ></i> Correos para agendar vehículos <br> 

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Contacto</th>
<th>Departamento</th>
</tr>

<?php

$usu_session = $_SESSION['usu_rut'];

$sql_register = mysqli_query($con, "SELECT COUNT(*) AS total_admins FROM admins");

$result_register = mysqli_fetch_array($sql_register);

$total_admins = $result_register['total_admins'];

$por_pagina = 5;

if(empty($_GET['reserve_car'])){

    $pagina = 1;

}else{

    $pagina = $_GET['reserve_car'];
}

$desde = ($pagina-1) * $por_pagina;

$total_paginas = ceil($total_admins / $por_pagina);

$i = 0;

$usu_session = $_SESSION['usu_rut'];

$get_reg = "SELECT * FROM admins LIMIT $desde,$por_pagina";

$run_reg = mysqli_query($con,$get_reg);

while($row_reg=mysqli_fetch_array($run_reg)){

$ad_id = $row_reg['ad_id'];

$ad_nombre = $row_reg['ad_nombre'];

$ad_email = $row_reg['ad_email'];

$ad_contacto = $row_reg['ad_contacto'];

$ad_depto = $row_reg['ad_depto'];

?>

<tr>

<td><?php echo $ad_nombre; ?></td>

<td><?php echo $ad_email; ?></td>

<td><?php echo $ad_contacto; ?></td>

<td><?php echo $ad_depto; ?></td>

</tr>

<?php } ?>

</thead>

<tbody>

</tbody>

</table><!-- table table-bordered table-hover table-striped Ends -->
<center>

<nav aria-label="Page navigation example">

  <ul class="pagination">

      <?php 
      
      if($pagina != 1){
    
      ?>

    <li class="page-item"><a class="page-link" href="?reserve_car=<?php echo $pagina-1; ?>"><<</a></li>

    <?php 

      }

    for ($i=1; $i <= $total_paginas; $i++){

        if($i == $pagina){

            echo '<li class="page-item active"><a>'.$i.'</a></li>';

        }else{

            echo '<li><a href="?reserve_car='.$i.'">'.$i.'</a></li>';

        }
    }

    if($pagina !=$total_paginas){
    
    ?>
   
    <li class="page-item"><a class="page-link" href="?reserve_car=<?php echo $pagina+1; ?>">>></a></li>

    <?php } ?>

  </ul>

</nav>

<center>

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

</body>

</html>

<?php 

if(isset($_POST['submit'])){

$destinatario = 'talitobardi123@gmail.com';
$usu_rut = $_POST['usu_rut'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$ad_email = $_POST['ad_email'];

$header = 'Correo Enviado desde ConafEstacionamiento.cl';
$mensajeCompleto = $mensaje . "\nAtentamente, " . $usu_rut;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "";
echo "<script> setTimeout(\"location.href='my_account.php?reserve_car'\",1000)</script>";

}

?>

<?php 

if(isset($_POST['submit'])){

    $usu_rut = $_POST['usu_rut'];
    $ad_email = $_POST['ad_email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $insert_solicitud = "insert into solicitudes (usu_rut,ad_email,asunto,mensaje) values ('$usu_rut','$ad_email','$asunto','$mensaje')";
    
    $run_solicitud = mysqli_query($con,$insert_solicitud);
    
    if($run_solicitud){
    
    echo "<script>alert('solicitud y correo ingresados con éxito')</script>";
    
    echo "<script>window.open('my_account.php?reserve_car','_self')</script>";
  
  }
  
  }

?>

<?php } ?>