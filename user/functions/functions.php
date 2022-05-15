<?php

$db = mysqli_connect("localhost","root","","conaf_estacionamiento");

/// IP address code starts /////
function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }
/// IP address code Ends /////

function getReg(){

  global $db;
  
  $get_registros = "select * from registros order by 1 DESC LIMIT 0,8";
  
  $run_registros = mysqli_query($db,$get_registros);
  
  while($row_registros=mysqli_fetch_array($run_registros)){
  
  $re_id = $row_registros['id_reg'];
  
  $re_rut = $row_registros['usu_rut'];
  
  $re_kilometraje = $row_registros['kilometraje'];
  
  $re_foto = $row_registros['foto_reg'];
  
  echo "
  
  <div class='col-md-4 col-sm-6 single' >
  
  <div class='registro' >
  
  <a href='details.php?re_id=$re_id' >
  
  <img src='admin/record_images/$re_foto' class='img-responsive' >
  
  </a>
  
  <div class='text' >
  
  <h3><a href='details.php?re_id=$re_id' >$re_rut</a></h3>
  
  <p class='kilometraje' >$$re_kilometraje</p>
  
  <p class='buttons' >
  
  <a href='details.php?re_id=$pro_id' class='btn btn-default' >Ver Detalles</a>
  
  <a href='details.php?re_id=$pro_id' class='btn btn-primary'>
  
  </a>
  
  </p>
  
  </div>
  
  </div>
  
  </div>
  
  ";
  
  }
  
  }
  
  function getVe(){
  
    global $db;
    
    $get_vehiculos = "select * from vehiculos order by 1 DESC LIMIT 0,8";
    
    $run_vehiculos = mysqli_query($db,$get_vehiculos);
    
    while($row_vehiculos=mysqli_fetch_array($run_vehiculos)){
    
    $veh_id = $row_vehiculos['id_vehi'];
    
    $veh_modelo = $row_vehiculos['modelo'];
    
    $veh_patente = $row_vehiculos['patente'];
    
    $veh_marca = $row_vehiculos['marca'];
  
    $veh_foto_vehi = $row_vehiculos['foto_vehi'];
  
    $veh_modelo = $row_vehiculos['modelo'];
    
    echo "
    
    <div class='col-md-4 col-sm-6 single' >
    
    <div class='vehiculo' >
    
    <a href='details.php?veh_id=$veh_id' >
    
    <img src='admin/registros_fotos/$veh_foto_vehi' class='img-responsive' >
    
    </a>
    
    <div class='text' >
    
    <h3><a href='details.php?veh_id=$veh_id' >$veh_modelo</a></h3>
    
    <p class='marca' >$$veh_marca</p>
    
    <p class='buttons' >
    
    <a href='details.php?veh_id=$veh_id' class='btn btn-default' >Ver Detalles</a>
    
    <a href='details.php?veh_id=$veh_id' class='btn btn-primary'>
    
    </a>
    
    </p>
    
    </div>
    
    </div>
    
    </div>
    
    ";
    
    }
    
    }

?>