<?php

if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('../index.php','_self')</script>";

}

else {

?>

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / Ver Administradores

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Ver Administradores

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Nombre:</th>

<th>Rut:</th>

<th>Foto:</th>

<th>Departamento:</th>

<th>Contacto:</th>

<th>Borrar:</th>

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$get_admin = "select * from admins";

$run_admin = mysqli_query($con,$get_admin);

while($row_admin = mysqli_fetch_array($run_admin)){

$ad_id = $row_admin['ad_id'];

$ad_nombre = $row_admin['ad_nombre'];

$ad_rut = $row_admin['ad_rut'];

$ad_foto = $row_admin['ad_foto'];

$ad_depto = $row_admin['ad_depto'];

$ad_contacto = $row_admin['ad_contacto'];

?>

<tr>

<td><?php echo $ad_nombre; ?></td>

<td><?php echo $ad_rut; ?></td>

<td><img src="admin_images/<?php echo $ad_foto; ?>" width="60" height="60" ></td>

<td><?php echo $ad_depto; ?></td>

<td><?php echo $ad_comuna; ?></td>

<td>

<a href="index.php?admin_delete=<?php echo $ad_id; ?>" >

<i class="fa fa-trash-o" ></i> Borrar

</a>

</td>

</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php }  ?>