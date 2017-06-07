<?php
require"../conexion/conexion.php";

function insertarCancha($codigo,$descripcion,$precio,$horai,$horaf,$coordenadas,$cubierta,$superficie,$red,$conexion){
	
				$query="INSERT INTO `cancha`(`CODIGO`, `NOMBRE`, `PRECIO`, `HORARIO_INICIO`, `HORARIO_FIN`, `UBICACION`, `CUBIERTA`, `SUPERFICIE`, `RED`) VALUE('$codigo','$descripcion',$precio,'$horai','$horaf','$coordenadas','$cubierta','$superficie','$red')";
				//echo($query);exit;
				$resultado=mysqli_query($conexion,$query);
		}

function ElimnarCancha($idcancha,$conexion){
		$query="DELETE FROM `cancha` WHERE idcancha=".$idcancha."";
				echo($query);exit;
				$resultado=mysqli_query($conexion,$query);
}
?>