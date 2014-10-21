<?php

include('accadmin.php');
require ('header.php');
?>

<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li class="active"><a href="men.php">Inicio</a> <a href='TestMateria.php'>Agregar Materias a Maestro</a><a href='TestAlumno.php'>Agregar Alumnos a Grupo</a> <a href='cerrar.php'><img src=imagenes/exit.jpg height='30' width='30' align=right>Salir</a></li>
    </ul>
</div><!--/.nav-collapse -->
<div class="container theme-showcase" role="main">

<?php
echo"<center><h1>MENÚ DE USUARIO ADMINISTRADOR</h1>";

echo"<img src=imagenes/administrador.jpg height='100' width='150'>";
echo"</center>";

require ('footer.php');
?>