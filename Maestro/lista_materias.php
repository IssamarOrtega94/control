<?php

require ('header.php');

class lista_materias {

    public function lmaterias($id)

    {

        $sql_log="select Nombre,ApellidoPaterno,ApellidoMaterno from usuario where id=$id";
        $sqllog=mysql_query($sql_log) or die ('error en consulta de usuario');

        $Nombre=mysql_result($sqllog,0,'Nombre');
        $app=mysql_result($sqllog,0,'ApellidoPaterno');
        $apm=mysql_result($sqllog,0,'ApellidoMaterno');
		echo "<br><br><br><br><br><br><center>";
        echo"El profesor:";
        echo"<h2> $Nombre $app $apm</h2>";
        echo "&nbsp tiene asignadas las siguientes Materias";
		echo "</center>";
        $sql_ls="select id_materia from maestro_materia where id_maestro=$id";
        $sqlls=mysql_query($sql_ls) or die ('error en consulta de materias');
        $contar=mysql_num_rows($sqlls);

        echo"<div class='table-responsive'>";
		echo "<center>";
        echo"<table class='table table-striped'>";
        echo"<tr><td colspan='5' align='center'><strong>Lista de Materias</strong></td></tr>";
        echo"<tr><th>Id</th><th>Nombre</th>";



       for($y=0;$y<$contar;$y++)
        {
            $idm=mysql_result($sqlls,$y,'id_materia');

            $sql_mat="select *from materia where id=$idm";
            $sqlmat=mysql_query($sql_mat) or die ('error en consulta de MATERIAS');
            $cont=mysql_num_rows($sqlmat);

            $mat=mysql_result($sqlmat,0,'nombre');
            $id_ma=mysql_result($sqlmat,0,'id');
            echo "<tr><th>$id_ma</th><th>$mat</th></tr>";
        }

        echo"</table>";
		echo "</center>";
        echo"</div>";
		echo "<center>";
        echo"Tolal de materias a impartir: $contar ";

		echo "</center>";
    }

} 
require('footer.php');
?>