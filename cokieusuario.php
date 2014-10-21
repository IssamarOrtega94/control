<?php
$user=$_GET['idu'];
if ($user =='')
{
$msg="No iniciaste secion";
header("location:acceso.php?msg=$msg");
exit;
}
setCookie(usuario,$user);
setCookie(acceso,2);
setCookie(tipo,'Administrador');
SESSION_start();
$_SESSION['usuario']=$user;
$_SESSION['acceso']=2;
header ("location:Maestro/Materias_Maestro.php");
exit;
 