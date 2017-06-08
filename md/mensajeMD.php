<?php
require"../conexion/conexion.php";

function insertarMensaje($codigo,$email,$descripcion,$contacto,$Fecha,$conexion){
	
				$query="INSERT INTO `mensaje`(`CODIGO`, `MAIL`, `DESCRIPCION`, `CONTACTO`, `FECHA`) VALUE('$codigo','$email',$descripcion,'$contacto','$fecha')";
				//echo($query);exit;
				$resultado=mysqli_query($conexion,$query);
		}

function ElimnarMensaje($idmensaje,$conexion){
		$query="DELETE FROM `mensaje` WHERE idmensaje=".$idmensaje."";
				echo($query);exit;
				$resultado=mysqli_query($conexion,$query);
}
?>