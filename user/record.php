<?php 

include("includes/db.php");

$destinatario = 'talitobardi123@gmail.com';
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$destino_r = $_POST['destino_r'];

$header = 'Correo Enviado desde ConafEstacionamiento.cl';
$mensajeCompleto = "$mensaje" . " \n" . " \nDestino: " . $destino_r . " \nNombre: " . $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "";
echo "<script> setTimeout(\"location.href='my_account.php?create_record'\",1000)</script>";

if(isset($_POST['submit'])){
   
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$destino_r = $_POST['destino_r'];
 
$insert_product = "insert into solicitud (nombre,asunto,mensaje,destino_r) values ('$nombre','$asunto','$mensaje','$destino_r')";
  
$run_product = mysqli_query($con,$insert_product);
  
if($run_product){
  
echo "<script>alert('Registro ingresado con éxito')</script>";
  
echo "<script>window.open('my_account.php?history','_self')</script>";

}
}

?>


