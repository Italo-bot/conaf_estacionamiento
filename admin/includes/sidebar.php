<?php

if(!isset($_SESSION['ad_rut'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?dashboard" >Admin Panel</a>

</div><!-- navbar-header Ends -->

<ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->

<li class="dropdown" ><!-- dropdown Starts -->

<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->

<i class="fa fa-user" ></i>

<?php echo $ad_nombre; ?> <b class="caret" ></b>

</a><!-- dropdown-toggle Ends -->

<ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

<li><!-- li Starts -->

<a href="index.php?user_profile=<?php echo $ad_id; ?>" >

<i class="fa fa-fw fa-user" ></i> Perfil

</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_records" >

<i class="fa fa-fw fa-envelope" ></i> Registros 

<span class="badge" ><?php echo $count_registros; ?></span>

</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_users" >

<i class="fa fa-fw fa-gear" ></i> Empleados

<span class="badge" ><?php echo $count_usuarios; ?></span>

</a>

</li><!-- li Ends -->

<li class="divider"></li>

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"> </i> Cerrar Sesión

</a>

</li><!-- li Ends -->

</ul><!-- dropdown-menu Ends -->

</li><!-- dropdown Ends -->

</ul><!-- nav navbar-right top-nav Ends -->

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

<li><!-- li Starts -->

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Dashboard

</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#registros">

<i class="fa fa-fw fa-table"></i> Registros

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="registros" class="collapse">

<li>
<a href="index.php?create_record"> Agregar registro </a>
</li>

<li>
<a href="index.php?view_records"> Ver registros </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#usuarios">

<i class="fa fa-smile-o"></i> Usuarios

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="usuarios" class="collapse">

<li>
<a href="index.php?create_user"> Agregar usuario </a>
</li>

<li>
<a href="index.php?view_users"> Ver usuario </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#vehiculo">

<i class="fa fa-car"></i> Vehículos

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="vehiculo" class="collapse">

<li>
<a href="index.php?create_car"> Agregar Vehículo </a>
</li>

<li>
<a href="index.php?view_cars"> Ver Vehículos </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#admins">

<i class="fa fa-smile-o"></i> Administradores

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="admins" class="collapse">

<li>
<a href="index.php?create_admin"> Agregar Administrador </a>
</li>

<li>
<a href="index.php?view_admins"> Ver Administradores </a>
</li>

<li>
<a href="index.php?user_profile=<?php echo $ad_id; ?>"> Editar Perfil </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Cerrar Sesión

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>