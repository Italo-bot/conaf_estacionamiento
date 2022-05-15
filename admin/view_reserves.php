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

<i class="fa fa-dashboard"></i> Dashboard / Ver Solicitudes

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-list fa-fw" ></i> Ver Solicitudes

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<form method="POST" action="excel_reserves.php">
				<button class="btn btn-success pull-right" name="export"><span class="fa fa-file-excel-o fa-fw"></span> Exportar a Excel</button>
			</form>

<br><br><br>

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Asunto</th>
<th>Mensaje</th>
<th>Destino</th>
<th>Fecha de solicitud</th>
</tr>

</thead>

<tbody>

<?php

$sql_register = mysqli_query($con, "SELECT COUNT(*) AS total_solicitudes FROM solicitud");

$result_register = mysqli_fetch_array($sql_register);

$total_solicitudes = $result_register['total_solicitudes'];

$por_pagina = 5;

if(empty($_GET['view_reserves'])){

    $pagina = 1;

}else{

    $pagina = $_GET['view_reserves'];
}

$desde = ($pagina-1) * $por_pagina;

$total_paginas = ceil($total_solicitudes / $por_pagina);

$i = 0;

$get_reg = "SELECT * FROM solicitud ORDER BY fecha_solicitud DESC LIMIT $desde,$por_pagina";

$run_reg = mysqli_query($con,$get_reg);

while($row_reg=mysqli_fetch_array($run_reg)){

$reg_id = $row_reg['id_solicitud'];

$reg_nombre = $row_reg['nombre'];

$reg_asunto = $row_reg['asunto'];

$reg_mensaje = $row_reg['mensaje'];

$reg_destino_r = $row_reg['destino_r'];

$reg_fecha_soli = $row_reg['fecha_solicitud'];

$i++;

?>

<tr>

<td><?php echo $reg_id; ?></td>

<td><?php echo $reg_nombre; ?></td>

<td><?php echo $reg_asunto; ?></td>

<td><?php echo $reg_mensaje; ?></td>

<td><?php echo $reg_destino_r; ?></td>

<td><?php echo $reg_fecha_soli; ?></td>

</tr>

<?php } ?>

</tbody>

</table><!-- table table-bordered table-hover table-striped Ends -->

<center>

<nav aria-label="Page navigation example">

  <ul class="pagination">

      <?php 
      
      if($pagina != 1){
    
      ?>

    <li class="page-item"><a class="page-link" href="?view_reserves=<?php echo $pagina-1; ?>"><<</a></li>

    <?php 

      }

    for ($i=1; $i <= $total_paginas; $i++){

        if($i == $pagina){

            echo '<li class="page-item active"><a>'.$i.'</a></li>';

        }else{

            echo '<li><a href="?view_reserves='.$i.'">'.$i.'</a></li>';

        }
    }

    if($pagina !=$total_paginas){
    
    ?>
   
    <li class="page-item"><a class="page-link" href="?view_reserves=<?php echo $pagina+1; ?>">>></a></li>

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