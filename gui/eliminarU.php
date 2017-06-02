<?php 
require_once('../conexion/conexion.php');
Conectar();
$id = $_GET['id']; 
//echo($id);exit;
$sql = "SELECT * FROM usuario WHERE codigo = ".$id."";
?>
<html>
    <body>
        <font><b>Eliminar Cancha</b></font>
        <br><br>
        <form action="../dp/usuarioDP.php" method="post">
            <table border="1">
                            <?php
                                try{
                                    $resultado = $conn->query($sql);
                                    foreach($resultado as $fila) 
                                {
                            ?>
                 <tr><td><b><font>Codigo del Usuario</font></b></td>
                    <td><input type="text" value="<?php echo($fila['CODIGO']); ?>"></td></tr>
                <tr><td><b><font>Mail</font></b></td>
                    <td><input type="text" value="<?php echo($fila['MAIL']); ?>"></td></tr>
                <tr><td><b><font>Usuario</font></b></td>
                    <td><input type="text" value="<?php echo($fila['USUARIO']); ?>"></td></tr>
                      <tr><td><b><font>Clave</font></b></td>
                    <td><input type="text" value="<?php echo($fila['CLAVE']); ?>"></td></tr>
                <tr><td><b><font>Tipo de Usuario</font></b></td>
                    <td><input type="text" value="<?php echo($fila['TIPO']); ?>"></td></tr>
                            <?php
                                }
                                    }
                                    catch(PDOException $e)
                                    {
                                        echo("Error!; ".$e->getMessage()."<br/>");
                                    }
                                $cursor = null;
                                $conn = null;
                            ?>
                <tr><td align="center"><input type="submit" name="eliminarU" value="Eliminar"></td>
                    <td align="center"> <a href="../gui/principal.php"><input type="button" value="Volver"></a></td></tr>
            </table>
            <input type="hidden" name="txtIdusuario" value="<?php echo($id); ?>">
        </form>
    </body>
</html>