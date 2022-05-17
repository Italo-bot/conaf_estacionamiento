<?php

if(!isset($_SESSION['usu_rut'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<link href="../styles/bootstrap.min.css" rel="stylesheet">

<link href="../styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class=""></i> 
Fecha/Hora:
<?php date_default_timezone_set("America/Santiago"); echo date(" d-m-Y");?> / <span id="tiempo">00 : 00 : 00</span>
<script src="js/time.js"> </script>

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i ></i> Vehículos <br> 

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Patente</th>
<th>Marca</th>
<th>Estado</th>
<th>Reservado Por</th>
<th>Fecha</th>
<th>Acciones</th>
</tr>

<?php

$sql_register = mysqli_query($con, "SELECT COUNT(*) AS total_vehiculos FROM vehiculos");

$result_register = mysqli_fetch_array($sql_register);

$total_vehiculos = $result_register['total_vehiculos'];

$por_pagina = 5;

if(empty($_GET['create_record'])){

    $pagina = 1;

}else{

    $pagina = $_GET['create_record'];
}

$desde = ($pagina-1) * $por_pagina;

$total_paginas = ceil($total_vehiculos / $por_pagina);

$i = 0;

$get_reg = "SELECT * FROM vehiculos LIMIT $desde,$por_pagina";

$run_reg = mysqli_query($con,$get_reg);

while($row_reg=mysqli_fetch_array($run_reg)){

$reg_id_vehi = $row_reg['id_vehi'];

$reg_patente = $row_reg['patente'];

$reg_kilometraje = $row_reg['kilometraje'];

$reg_modelo = $row_reg['modelo'];

$reg_marca = $row_reg['marca'];

$reg_estado = $row_reg['estado_vehi'];

$reg_reserva = $row_reg['reserva'];

$reg_fecha_registro = $row_reg['fecha_registro'];

$i++;

?>

<tr>

<td><?php echo $reg_patente; ?></td>

<td><?php echo $reg_marca; ?></td>

<td> <?php echo $reg_estado; ?> </td>

<td> <?php echo $reg_reserva; ?> </td>

<td> <?php echo $reg_fecha_registro; ?> </td>

<td>

<?php if($reg_estado != "Reservado" && $reg_estado != "En mantención"){?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $reg_id_vehi; ?>">
Solicitar
</button>
<?php }else{ ?>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $reg_id_vehi; ?>"disabled>
Solicitar
</button>
  <?php } ?>
</td>

<?php  include('modal_record.php'); ?>

</a>

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

    <li class="page-item"><a class="page-link" href="?create_record=<?php echo $pagina-1; ?>"><<</a></li>

    <?php 

      }

    for ($i=1; $i <= $total_paginas; $i++){

        if($i == $pagina){

            echo '<li class="page-item active"><a>'.$i.'</a></li>';

        }else{

            echo '<li><a href="?create_record='.$i.'">'.$i.'</a></li>';

        }
    }

    if($pagina !=$total_paginas){
    
    ?>
   
    <li class="page-item"><a class="page-link" href="?create_record=<?php echo $pagina+1; ?>">>></a></li>

    <?php } ?>

  </ul>

</nav>

<center>

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php } ?>
