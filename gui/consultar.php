<?php
require_once('../conexion/conexion.php');
Conectar(); 
$tipo=$_GET['id'];
$sql = "select * from cancha";
//echo($sql);exit;
?>
<html>
    <body>
    <font color="red" size="7"><b>Canchas</b></font><br><br>
        <table border="8">
          <tr>
		  
			<?php if($tipo=="administrador"){ ?>
			<td><b><font>IDCancha</font></b></td>
			<?php } ?>
		  
			<td><b><font>Descripcion</font></b></td>
            <td><b><font>Precio</font></b></td>
			<td><b><font>Hora Inicio</font></b></td>
			<td><b><font>Hora Fin</font></b></td>
			<td><b><font>Ubicación</font></b></td>
			<td><b><font>Cubierta</font></b></td>
			<td><b><font>Superfice</font></b></td>
			<td><b><font>Red</font></b></td>
			<tr>
		<?php
			try
			{
				$cursor = $conn->query($sql); 
				foreach($cursor as $fila) {
		?>
          <tr>
		  
		  <?php if($tipo=="administrador"){ ?>
		  <td style="font-size: 18pt"><?php echo($fila["IDCANCHA"]); ?></td>
		  <?php } ?>
           
		   <td style="font-size: 18pt"><?php echo($fila["NOMBRE"]); ?></td>
            <td style="font-size: 18pt"><?php echo($fila["PRECIO"]); ?></td>
			<td style="font-size: 18pt"><?php echo($fila["HORARIO_INICIO"]); ?></td>
			<td style="font-size: 18pt"><?php echo($fila["HORARIO_FIN"]); ?></td>
			<td style="font-size: 18pt"><?php echo($fila["UBICACION"]); ?></td>
			<td style="font-size: 18pt"><?php echo($fila["CUBIERTA"]); ?></td>
			<td style="font-size: 18pt"><?php echo($fila["SUPERFICIE"]); ?></td>
			<td style="font-size: 18pt"><?php echo($fila["RED"]); ?></td>

		<?php if($tipo=="administrador"){ ?>
		<td><a href="elimnarC.php?id=<?php echo($fila["IDCANCHA"]);?>" target="iframe_a"/><input type="button"  value="Eliminar"></a></td>
		<?php } ?>
	
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