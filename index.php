<?php
require_once ('db.php');
require ('header.php');
?>

<h1> <b><font face='Arial' color='orange'><center>Acceso al sistema </center></font> </b></h1>
<br><br><br>
<center>
    <form class="sam"  form action ='valida.php' method = 'GET'> <br>

        <center>
            <table>
                <tr align="center">
                    <td colspan="2">
                        <font face='Arial' color='green'><label for='nombrea'>Nombre de usuario:</label></font>
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <input  align="center" class='roundeb matricula' type='text' name ='usuario' title='Digita tu login' placeholder='Login' onKeyUp='cadena(this.value,cad1);vNom(this);'>
                    </td>
                    <td id='cad1' width='200'> </td>
                </tr>

                <tr align="center">
                    <td colspan="2">
                        <font face='Arial' color='green'><label for='nombrea'>Password:</label></font>
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <input  class='roundeb' type="password" name='password1' placeholder='***************' title='Digita tu contraseña' placeholder='Ejemplo:1822012985' onKeyUp='passwordinicio(this.value,passwo);vNom(this);'>
                    </td>
                    <td class="t" id='passwo' width='200'> </td>
                </tr>
            </table>

            <br>
            <input class="botonC" type='submit' value='Ingresar'></center>

    </form>
    <br>
    <?
    error_reporting(0);

    $msg=$_GET['msg'];
    echo "<font size='5' face='Arial' color='orange'> $msg  </font>";

    ?>

</CENTER>


</body>
<?php   require('footer.php');   ?>
</html>
