<?php
require"../MD/canchaMD.php";
$procesar="";


if(isset($_POST['procesar'])){
	$procesar=$_POST['procesar'];
}
if(isset($_POST['eliminarC'])){
	$procesar=$_POST['eliminarC'];
}



if(isset($_POST['txtId'])){
	$codigo=$_POST['txtId'];
}
if(isset($_POST['txtDescrip'])){
	$descripcion=$_POST['txtDescrip'];
}
if(isset($_POST['txtPrecio'])){
	$precio=$_POST['txtPrecio'];
}
if(isset($_POST['txtHoraI'])){
	$horai=$_POST['txtHoraI'];
}
if(isset($_POST['txtHoraF'])){
	$horaf=$_POST['txtHoraF'];
}
if(isset($_POST['coords'])){
	$coordenadas=$_POST['coords'];
	//echo($coordenadas);exit;
}
if(isset($_POST['cubierta'])){
	$cubierta=$_POST['cubierta'];
}
if(isset($_POST['superficie'])){
	$superficie=$_POST['superficie'];
}
if(isset($_POST['red'])){
	$red=$_POST['red'];
}
if($procesar=="Ingresar"){
insertarCancha($codigo,$descripcion,$precio,$horai,$horaf,$coordenadas,$cubierta,$superficie,$red,$conexion);
}


if(isset($_POST['txtIdcancha'])){
	$idcancha=$_POST['txtIdcancha'];
//echo($idcancha);exit;
}
if($procesar=="Eliminar"){
ElimnarCancha($idcancha,$conexion);
}

?>