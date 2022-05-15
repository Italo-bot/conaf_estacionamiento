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

<i class="fa fa-dashboard"></i> Dashboard / Ver Registros

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-list fa-fw" ></i> Ver Registros

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<form method="POST" action="excel.php">
				<button class="btn btn-success pull-right" name="export"><span class="fa fa-file-excel-o fa-fw"></span> Exportar a Excel</button>
			</form>

<br><br><br>

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>ID</th>
<th>Rut usuario</th>
<th>Patente</th>
<th>Kilometraje</th>
<th>Fecha de Registro</th>
<th>Foto</th>
<th>Tipo</th>
</tr>

</thead>

<tbody>

<?php

$sql_register = mysqli_query($con, "SELECT COUNT(*) AS total_registros FROM registros");

$result_register = mysqli_fetch_array($sql_register);

$total_registros = $result_register['total_registros'];

$por_pagina = 5;

if(empty($_GET['view_records'])){

    $pagina = 1;

}else{

    $pagina = $_GET['view_records'];
}

$desde = ($pagina-1) * $por_pagina;

$total_paginas = ceil($total_registros / $por_pagina);

$i = 0;

$get_reg = "SELECT * FROM registros ORDER BY fecha_reg DESC LIMIT $desde,$por_pagina";

$run_reg = mysqli_query($con,$get_reg);

while($row_reg=mysqli_fetch_array($run_reg)){

$reg_id = $row_reg['id_reg'];

$reg_usu_rut = $row_reg['usu_rut'];

$reg_foto_reg = $row_reg['foto_reg'];

$reg_patente = $row_reg['patente'];

$reg_kilometraje = $row_reg['kilometraje'];

$reg_fecha_reg = $row_reg['fecha_reg'];

$reg_tipo_reg = $row_reg['tipo_reg'];

$i++;

?>

<tr>

<td><?php echo $reg_id; ?></td>

<td><?php echo $reg_usu_rut; ?></td>

<td><?php echo $reg_patente; ?></td>

<td><?php echo $reg_kilometraje; ?> Km</td>

<td><?php echo $reg_fecha_reg; ?></td>

<td><img src="record_images/<?php echo $reg_foto_reg; ?>" width="60" height="60"></td>

<td> <?php echo $reg_tipo_reg; ?> </td>

</tr>

<?php } ?>

</tbody>

</table><!-- table table-bordered table-hover table-striped Ends -->

<nav aria-label="Page navigation example">

  <ul class="pagination">

      <?php 
      
      if($pagina != 1){
    
      ?>

    <li class="page-item"><a class="page-link" href="?view_records=<?php echo $pagina-1; ?>"><<</a></li>

    <?php 

      }

    for ($i=1; $i <= $total_paginas; $i++){

        if($i == $pagina){

            echo '<li class="page-item active"><a>'.$i.'</a></li>';

        }else{

            echo '<li><a href="?view_records='.$i.'">'.$i.'</a></li>';

        }
    }

    if($pagina !=$total_paginas){
    
    ?>
   
    <li class="page-item"><a class="page-link" href="?view_records=<?php echo $pagina+1; ?>">>></a></li>

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