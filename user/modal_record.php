<?php

if(!isset($_SESSION['usu_rut'])){

echo "<script>window.open('../checkout.php','_self')</script>";

}

else {

?>
<div class="modal fade" id="editChildresn<?php echo $reg_id_vehi; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="record.php">
      
        <input type="hidden" name="id" value="<?php echo $reg_id_vehi; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Su nombre:</label>
                  <input type="text" name="nombre" class="form-control" value="<?php 
                  
                  $usuario_session = $_SESSION['usu_rut'];

                  $get_usuario = "select * from usuarios where usu_rut='$usuario_session'";

                  $run_usuario = mysqli_query($con,$get_usuario);

                  $row_usuario = mysqli_fetch_array($run_usuario);

                  $usu_nombre = $row_usuario['usu_nombre'];
                  
                  if(!isset($_SESSION['usu_rut'])){

                  }
                  else {
                  
                  echo "$usu_nombre";
                  
                  }?>" required="true">

                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Email Administrador:</label>
                  <input type="text" class="form-control" value="<?php echo "talitobardi123@gmail.com" ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Asunto:</label>
                  <input type="text" name="asunto" class="form-control" value="<?php echo "Necesito agendar el vehiculo '$reg_patente'" ?>" required="true">
                </div>
                 <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Destino:</label>
                  <select name="destino_r" class="form-control" >

                  <option> Seleccionar Destino </option>

                    <?php

                    $get_destinos = "select * from destinos";

                    $run_destinos = mysqli_query($con,$get_destinos);

                    while ($row_destinos=mysqli_fetch_array($run_destinos)) {

                    $destino = $row_destinos['destino'];

                    echo "<option value='$destino' >$destino</option>";

                    }

                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Cometido:</label>
                  <textarea name="mensaje" class="form-control" rows="6" cols="19" ></textarea>
                </div>
                <div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" name="submit" class="btn btn-primary">Solicitar</button>
            </div>
       </form>
    </div>
  </div>
</div>
<?php
if(isset($_POST['submit'])){
   
   $nombre = $_POST['nombre'];
   $asunto = $_POST['asunto'];
   $mensaje = $_POST['mensaje'];
   $destino_r = $_POST['destino_r'];
    
   $insert_product = "insert into solicitud (nombre,asunto,destino_r,mensaje) values ('$nombre','$asunto','$destino_r','$mensaje')";
     
   $run_product = mysqli_query($con,$insert_product);
     
   if($run_product){
     
   echo "<script>alert('Registro ingresado con éxito')</script>";
     
   echo "<script>window.open('my_account.php?history','_self')</script>";
   
   }
   }
?>
<?php } ?>