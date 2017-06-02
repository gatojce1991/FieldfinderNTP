<?php 
require_once('../conexion/conexion.php');
Conectar();
$id = $_GET['id']; 
//echo($id);exit;
$sql = "SELECT * FROM cancha WHERE idcancha = ".$id."";
?>
<html>
    <body>
        <font><b>Eliminar Cancha</b></font>
        <br><br>
        <form action="../dp/canchaDP.php" method="post">
            <table border="1">
                            <?php
                                try{
                                    $resultado = $conn->query($sql);
                                    foreach($resultado as $fila) 
                                {
                            ?>
                 <tr><td><b><font>IdCancha</font></b></td>
                    <td><input type="text" value="<?php echo($fila['IDCANCHA']); ?>"></td></tr>
                <tr><td><b><font>Precio</font></b></td>
                    <td><input type="text" value="<?php echo($fila['PRECIO']); ?>"></td></tr>
                <tr><td><b><font>Hora de Inicio</font></b></td>
                    <td><input type="text" value="<?php echo($fila['HORARIO_INICIO']); ?>"></td></tr>
                      <tr><td><b><font>Hora de finalización</font></b></td>
                    <td><input type="text" value="<?php echo($fila['HORARIO_FIN']); ?>"></td></tr>
                <tr><td><b><font>Ubicacion</font></b></td>
                    <td><input type="text" value="<?php echo($fila['UBICACION']); ?>"></td></tr>
                <tr><td><b><font>Cuenta cn cubierta</font></b></td>
                    <td><input type="text" value="<?php echo($fila['CUBIERTA']); ?>"></td></tr>
                      <tr><td><b><font>Superficie</font></b></td>
                    <td><input type="text" value="<?php echo($fila['SUPERFICIE']); ?>"></td></tr>
                <tr><td><b><font>Cuenta con Red</font></b></td>
                    <td><input type="text" value="<?php echo($fila['RED']); ?>"></td></tr>
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
                <tr><td align="center"><input type="submit" name="eliminarC" value="Eliminar"></td>
                    <td align="center"> <a href="../gui/principal.php"><input type="button" value="Volver"></a></td></tr>
            </table>
            <input type="hidden" name="txtIdcancha" value="<?php echo($id); ?>">
        </form>
    </body>
</html>