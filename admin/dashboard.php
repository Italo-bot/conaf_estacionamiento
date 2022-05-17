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

<i class="fa fa-car" ></i> Vehículos

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Patente</th>
<th>Marca</th>
<th>Foto</th>
<th>Estado</th>
<th>Reservado Por:</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_ve = "select * from vehiculos";

$run_ve = mysqli_query($con,$get_ve);

while($row_ve=mysqli_fetch_array($run_ve)){

$ve_id_vehi = $row_ve['id_vehi'];

$ve_patente = $row_ve['patente'];

$ve_kilometraje = $row_ve['kilometraje'];

$ve_marca = $row_ve['marca'];

$ve_foto_vehi = $row_ve['foto_vehi'];

$ve_fecha_registro = $row_ve['fecha_registro'];

$ve_modelo = $row_ve['modelo'];

$ve_n_chasis = $row_ve['n_chasis'];

$ve_n_motor = $row_ve['n_motor'];

$ve_year = $row_ve['year'];

$ve_color = $row_ve['color'];

$ve_tipo_vehi = $row_ve['tipo_vehi'];

$ve_tipo_combustible = $row_ve['tipo_combustible'];

$ve_reserva = $row_ve['reserva'];

$ve_estado_vehi = $row_ve['estado_vehi'];

$i++;

?>

<tr>

<td><?php echo $ve_patente; ?></td>

<td> <?php echo $ve_marca; ?></td>

<td><img src="car_images/<?php echo $ve_foto_vehi; ?>" width="60" height="60"></td>

<td> <?php echo $ve_estado_vehi; ?> </td>

<td><?php echo $ve_reserva; ?> </td>

<td>

<div class="dropdown">

<button class="btn btn-success dropdown-toggle" data-toggle="dropdown">

<span class="caret"></span>

</button>

<ul class="dropdown-menu dropdown-menu-right">

<li>

<a href="index.php?car_delete=<?php echo $ve_id_vehi; ?>">

<i class="fa fa-trash-o"></i> Borrar 

</a>

</li>

<li>

<a href="index.php?car_edit=<?php echo $ve_id_vehi; ?>">

<i class="fa fa-pencil"> </i> Editar

</a>

</li>
			
</ul>
  
</div>

</td>

</a>

</tr>

<?php } ?>

</tbody>

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

<div class="text-right" ><!-- text-right Starts -->

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