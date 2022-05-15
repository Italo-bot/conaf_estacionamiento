<?php

if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('../index.php','_self')</script>";

}

else {

?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<h1 class="page-header">Dashboard</h1>

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_registros; ?> </div>

<div>Registros</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_records">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> Ver  </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-green"><!-- panel panel-green Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-comments fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_usuarios; ?> </div>

<div>Usuarios</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_users">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> Ver </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-green Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-comments fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_admins; ?> </div>

<div>Administradores</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_admins">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> Ver  </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-yellow Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-red"><!-- panel panel-red Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-support fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_vehiculos; ?> </div>

<div>Vehículos</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_cars">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> Ver </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

</div><!-- 2 row Ends -->

<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-8" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Registros

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>ID registro</th>
<th>Rut Usuario</th>
<th>Kilometraje</th>
<th>Destino</th>
<th>Fecha/Hora</th>
<th>Tipo</th>
</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_reg = "select * from registros order by fecha_reg desc limit 0,8";

$run_reg = mysqli_query($con,$get_reg);

while($row_reg=mysqli_fetch_array($run_reg)){

$reg_id = $row_reg['id_reg'];

$reg_rut = $row_reg['usu_rut'];

$reg_kilometraje = $row_reg['kilometraje'];

$reg_destino = $row_reg['destino'];

$reg_fecha = $row_reg['fecha_reg'];

$reg_tipo = $row_reg['tipo_reg'];

$i++;

?>

<tr>

<td><?php echo $reg_id; ?></td>

<td><?php echo $reg_rut; ?></td>

<td><?php echo $reg_kilometraje; ?> KM</td>

<td> <?php echo $reg_destino; ?> </td>

<td><?php echo $reg_fecha; ?></td>

<td><?php echo $reg_tipo; ?></td>

<?php } ?>

</tbody>

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

<div class="text-right" ><!-- text-right Starts -->

<a href="index.php?view_records" >

Ver Todos Los Registros <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-8 Ends -->

<div class="col-md-4"><!-- col-md-4 Starts -->

<div class="panel"><!-- panel Starts -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="thumb-info mb-md"><!-- thumb-info mb-md Starts -->

<img src="admin_images/<?php echo $ad_foto; ?>" class="rounded img-responsive">

<div class="thumb-info-title"><!-- thumb-info-title Starts -->

<span class="thumb-info-inner"> <?php echo $ad_nombre; ?> </span>

<span class="thumb-info-type"> <?php echo  "Depto: ",$ad_depto; ?> </span>

</div><!-- thumb-info-title Ends -->

</div><!-- thumb-info mb-md Ends -->

<div class="mb-md"><!-- mb-md Starts -->

<div class="widget-content-expanded"><!-- widget-content-expanded Starts -->

<i class="fa fa-user"></i> <span>Rut: </span> <?php echo $ad_rut; ?>  <br>
<i class="fa fa-user"></i> <span>Comuna: </span> <?php echo $ad_comuna; ?>   <br>
<i class="fa fa-user"></i> <span>Contacto: </span> <?php echo $ad_contacto; ?>   <br>

</div><!-- widget-content-expanded Ends -->

</div><!-- mb-md Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel Ends -->

</div><!-- col-md-4 Ends -->

</div><!-- 3 row Ends -->

<?php } ?>