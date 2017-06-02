<!DOCTYPE html>
<?php	
	session_start();
	if(empty($_SESSION['USUARIO'])){
		session_start();
		session_destroy();
		header("Location: ../gui/index.php");
	}
?>

<?php
require_once('../conexion/conexion.php'); //Se incrusta el archivo donde están las fuciones de uso común	
$id=$_SESSION['CODIGO'];
$tipo=$_SESSION['TIPO'];
Conectar(); 
$sql = "select * from usuario";

?>

<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<title>FieldFinder</title>
<link rel="stylesheet" href="css\Estilo1.css" type="text/css" /> 
<style type="text/css"> 
</style>
</head>
    <title>FIELDFINDER</title>
    <!-- import Google font -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
 
<!-- our markup -->
<header><h1>FIELDFINDER</h1></header>
</br>

<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});
</script>
 <body id="cuerpo">

<!-- MENU PRINCIPAL -->
<ul id="menu-bar" align="center">
    <li><a align="right">Bienvenido:  <strong><?php echo $_SESSION['USUARIO'];?></strong> </a></li>
    <li><a href="principal.php" align="right" target="iframe_a">Principal</a></li>

    <li><a >Men&uacute; de Opciones</a>
        <ul>
          <li><a align="left" href="canchai.php?id=<?php echo $_SESSION['CODIGO'];?>" target="iframe_a">Cancha</a></li>
          <li><a align="left" href="consultar.php?id=<?php echo$_SESSION['TIPO'];?>" target="iframe_a">Buscar</a></li>
        </ul>
    </li>

    <li><a href="editar.php?id=<?php echo $_SESSION['CODIGO'];?>" target="iframe_a" >Editar Usuario </a></li>
    <?php
    if($tipo=="administrador"){
    ?>
      <li><a href="usuariosC.php" target="iframe_a" >Eliminar Usuarios </a></li>
    <?php
    }
    ?>

    <li><a href="../conexion/desconectar.php" align="right">Cerrar Sesion</a></li>
</ul>

<p><iframe height="900px" width="95%" src="principal.php" name="iframe_a"></iframe></p>

<!--end navBar div -->
<div id="siteInfo"> | PUCE Nuevas Técnicas| &copy;2017 Espinel, Subía, Rosero</div>
<br />
</body>
</html>