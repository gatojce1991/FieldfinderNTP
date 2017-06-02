<?php
require_once('../conexion/conexion.php');
Conectar(); 
$sql = "select * from usuario";
//echo($sql);exit;
?>
<html>
    <body>
    <font color="red" size="7"><b>Usuarios</b></font><br><br>
        <table border="8">
          <tr>
		  
			<td><b><font>Codigo Usuario</font></b></td>		  
			<td><b><font>Mail</font></b></td>
            <td><b><font>Usuario</font></b></td>
			<td><b><font>Clave</font></b></td>
			<td><b><font>Tipo</font></b></td>
		<tr>
		
		<?php
			try
			{
				$cursor = $conn->query($sql); 
				foreach($cursor as $fila) {
		?>
          <tr> 
		 	<td style="font-size: 18pt"><?php echo($fila["CODIGO"]); ?></td>           
		 	<td style="font-size: 18pt"><?php echo($fila["MAIL"]); ?></td>
            <td style="font-size: 18pt"><?php echo($fila["USUARIO"]); ?></td>
			<td style="font-size: 18pt"><?php echo($fila["CLAVE"]); ?></td>
			<td style="font-size: 18pt"><?php echo($fila["TIPO"]); ?></td>
			<td><a href="eliminarU.php?id=<?php echo($fila["CODIGO"]);?>" target="iframe_a"/><input type="button"  value="Eliminar"></a></td>	
			</tr>

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

        </table>
    </body>
</html>