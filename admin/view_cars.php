<?php

if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('../index.php','_self')</script>";

}

else {

?>

<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / Ver Vehículos

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Vehículos Registrados

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Patente</th>
<th>Kilometraje</th>
<th>Marca</th>
<th>Modelo</th>
<th>N° Chasis</th>
<th>N° Motor</th>
<th>Año</th>
<th>Color</th>
<th>Foto</th>
<th>Tipo Vehículo</th>
<th>Tipo Combustible</th>
<th>Estado</th>
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

$ve_estado_vehi = $row_ve['estado_vehi'];

$i++;

?>

<tr>

<td><?php echo $ve_patente; ?></td>

<td> <?php echo $ve_kilometraje; ?></td>

<td> <?php echo $ve_marca; ?></td>

<td> <?php echo $ve_modelo; ?></td>

<td> <?php echo $ve_n_chasis; ?></td>

<td> <?php echo $ve_n_motor; ?></td>

<td> <?php echo $ve_year; ?></td>

<td> <?php echo $ve_color; ?></td>

<td><img src="car_images/<?php echo $ve_foto_vehi; ?>" width="60" height="60"></td>

<td> <?php echo $ve_tipo_vehi; ?></td>

<td> <?php echo $ve_tipo_combustible; ?> </td>

<td> <?php echo $ve_estado_vehi; ?> </td>

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

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php } ?>