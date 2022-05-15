<?php

if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('../index.php','_self')</script>";

}

else {

?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Ver Usuarios

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> Ver Usuarios

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>
<th>Nombre:</th>
<th>Rut:</th>
<th>Imagen:</th>
<th>Departamento:</th>
<th>Comuna:</th>
<th>Contacto:</th>
<th>Borrar Usuario:</th>
</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i=0;

$get_u = "select * from usuarios";

$run_u = mysqli_query($con,$get_u);

while($row_u=mysqli_fetch_array($run_u)){

$u_id = $row_u['usu_id'];

$u_nombre = $row_u['usu_nombre'];

$u_rut = $row_u['usu_rut'];

$u_foto = $row_u['usu_foto'];

$u_depto = $row_u['usu_depto'];

$u_comuna = $row_u['usu_comuna'];

$u_contacto = $row_u['usu_contacto'];

$i++;

?>

<tr>

<td><?php echo $u_nombre; ?></td>

<td><?php echo $u_rut; ?></td>

<td><img src="../user/user_images/<?php echo $u_foto; ?>" width="60" height="60" ></td>

<td><?php echo $u_depto; ?></td>

<td><?php echo $u_comuna; ?></td>

<td><?php echo $u_contacto; ?></td>

<td>

<a href="index.php?user_delete=<?php echo $u_id; ?>" >

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

<?php } ?>