<?php
require"../MD/MensajeMD.php";
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
if(isset($_POST['txtEmail'])){
	$email=$_POST['txtEmail'];
}
if(isset($_POST['txtDescripcion'])){
	$descripcion=$_POST['txtDescripcion'];
}
if(isset($_POST['txtContacto'])){
	$contacto=$_POST['txtContacto'];
}
if(isset($_POST['txtFecha'])){
	$Fecha=$_POST['txtFecha'];
}

?>