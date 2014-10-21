
<?php

include('../accprof.php');
echo"<a href='../cerrar.php'><img src=../imagenes/exit.jpg height='30' width='30' align=right></a>";
require '../Usuario.php';
include 'lista_materias.php';
require '../db.php';
require '../Alumno.php';
require '../header.php';
require '../footer.php';

//$id = $_GET['id'];


$lista_materias=new lista_materias();

$lista_materias->lmaterias($id);

?>