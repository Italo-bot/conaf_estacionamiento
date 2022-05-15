<?php

if(!isset($_SESSION['usu_rut'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<link href="../styles/bootstrap.min.css" rel="stylesheet">

<link href="../styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<script src="js/jquery.min.js"></script>

<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / Ver registros

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i ></i> Historial <br> 

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>ID registro</th>
<th>Patente</th>
<th>Rut Usuario</th>
<th>Kilometraje</th>
<th>Destino</th>
<th>Fecha/Hora</th>
<th>Tipo</th>
</tr>

<?php

$usu_session = $_SESSION['usu_rut'];

$sql_register = mysqli_query($con, "SELECT COUNT(*) AS total_registros FROM registros WHERE usu_rut='$usu_session'");

$result_register = mysqli_fetch_array($sql_register);

$total_registros = $result_register['total_registros'];

$por_pagina = 5;

if(empty($_GET['history'])){

    $pagina = 1;

}else{

    $pagina = $_GET['history'];
}

$desde = ($pagina-1) * $por_pagina;

$total_paginas = ceil($total_registros / $por_pagina);

$i = 0;

$usu_session = $_SESSION['usu_rut'];

$get_reg = "SELECT * FROM registros WHERE usu_rut='$usu_session' ORDER BY fecha_reg DESC LIMIT $desde,$por_pagina";

$run_reg = mysqli_query($con,$get_reg);

while($row_reg=mysqli_fetch_array($run_reg)){

$reg_id = $row_reg['id_reg'];

$reg_patente = $row_reg['patente'];

$reg_rut = $row_reg['usu_rut'];

$reg_kilometraje = $row_reg['kilometraje'];

$reg_destino = $row_reg['destino'];

$reg_fecha = $row_reg['fecha_reg'];

$reg_tipo = $row_reg['tipo_reg'];

$i++;

?>

<tr>

<td><?php echo $reg_id; ?></td>

<td><?php echo $reg_patente; ?></td>

<td><?php echo $reg_rut; ?></td>

<td><?php echo $reg_kilometraje; ?> KM</td>

<td> <?php echo $reg_destino; ?> </td>

<td><?php echo $reg_fecha; ?></td>

<td><?php echo $reg_tipo; ?></td>

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

    <li class="page-item"><a class="page-link" href="?history=<?php echo $pagina-1; ?>"><<</a></li>

    <?php 

      }

    for ($i=1; $i <= $total_paginas; $i++){

        if($i == $pagina){

            echo '<li class="page-item active"><a>'.$i.'</a></li>';

        }else{

            echo '<li><a href="?history='.$i.'">'.$i.'</a></li>';

        }
    }

    if($pagina !=$total_paginas){
    
    ?>
   
    <li class="page-item"><a class="page-link" href="?history=<?php echo $pagina+1; ?>">>></a></li>

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
