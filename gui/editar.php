<?php 
require_once('../conexion/conexion.php');
Conectar();
$id = $_GET['id']; 
$sql = "SELECT * FROM usuario WHERE codigo = ".$id."";
?>
<html>
    <body>
        <font><b>Editar Usuario</b></font>
        <br><br>
        <form action="../dp/usuarioDP.php" method="post">
            <table border="1">
                            <?php
                                try{
                                    $resultado = $conn->query($sql);
                                    foreach($resultado as $fila) 
                                {
                            ?>
                 <tr><td><b><font>Usuario</font></b></td>
                    <td><input type="text" name="txtUsuario" value="<?php echo($fila['USUARIO']); ?>"></td></tr>
                <tr><td><b><font>Email</font></b></td>
                    <td><input type="text" name="txtEmail" value="<?php echo($fila['MAIL']); ?>"></td></tr>
                <tr><td><b><font>Clave</font></b></td>
                    <td><input type="text" name="txtClave" value="<?php echo($fila['CLAVE']); ?>"></td></tr>
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
                <tr><td align="center"><input type="submit" name="editarU" value="Editar"></td>
                    <td align="center"> <a href="../gui/principal.php"><input type="button" value="Volver"></a></td></tr>
            </table>
            <input type="hidden" name="txtId" value="<?php echo($id); ?>">
        </form>
    </body>
</html>