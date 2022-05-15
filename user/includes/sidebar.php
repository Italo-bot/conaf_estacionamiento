<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<?php

$usuario_session = $_SESSION['usu_rut'];

$get_usuario = "select * from usuarios where usu_rut='$usuario_session'";

$run_usuario = mysqli_query($con,$get_usuario);

$row_usuario = mysqli_fetch_array($run_usuario);

$usu_foto = $row_usuario['usu_foto'];

$usu_nombre = $row_usuario['usu_nombre'];

if(!isset($_SESSION['usu_rut'])){

}
else {

echo "

<center>

<img src='user_images/$usu_foto' class='img-responsive'>

</center>

<br>

<h3 align='center' class='panel-title'> Bienvenid@ $usu_nombre </h3>

";

}

?>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<ul class="nav nav-pills nav-stacked"><!-- nav nav-pills nav-stacked Starts -->

<li class="<?php if(isset($_GET['create_record'])){ echo "active"; } ?>">

<a href="my_account.php?create_record"> <i class="fa fa-list"> </i> Programación </a>

</li>

<li class="<?php if(isset($_GET['create_record2'])){ echo "active"; } ?>">

<a href="my_account.php?create_record2"> <i class="fa fa-list"></i> Registrar uso de vehículo </a>

</li>

<li class="<?php if(isset($_GET['history'])){ echo "active"; } ?>">

<a href="my_account.php?history"> <i class="fa fa-list"></i> Historial </a>

</li>

<li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">

<a href="my_account.php?change_pass"> <i class="fa fa-user"></i> Cambiar Contraseña </a>

</li>

<li>

<a href="logout.php"> <i class="fa fa-sign-out"></i> Cerrar Sesión </a>

</li>

</ul><!-- nav nav-pills nav-stacked Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default sidebar-menu Ends -->