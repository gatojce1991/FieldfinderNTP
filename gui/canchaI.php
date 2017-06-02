<?php
require"../dp/canchaDP.php";
$id = $_GET['id']; 
?>
<html>
<body>
<!-- formulario registro -->
<form method="post" action="../DP/canchaDP.php" align="center" enctype="multipart/form-data" >
  <fieldset><br><br>
    <legend  style="font-size: 18pt"><b>Registro Cancha</b></legend>
	
	<div class="form-group">
      <label style="font-size: 18pt"><b></b>Descripción</label>
      <input type="text" name="txtDescrip" class="form-control" placeholder="Ingrese Descripción" />
    </div>
	
    <div class="form-group">
      <label style="font-size: 18pt"><b>Precio/Hora</b></label>
      <input type="text" name="txtPrecio" class="form-control"  required placeholder="Ingrese Precio"/>
    </div>
	
	<div class="form-group">
      <label style="font-size: 18pt"><b>Hora Inicio</b></label>
      <input type="text" name="txtHoraI" class="form-control"  required placeholder="Ingrese Hora Inicio 8:00:00"/>
    </div>
	
	<div class="form-group">
      <label style="font-size: 18pt"><b>Hora Fin</b></label>
      <input type="text" name="txtHoraF" class="form-control"  required placeholder="Ingrese Hora Fin 10:00:00"/>
    </div>
	
	<link rel="stylesheet" href="css\mapa.css" type="text/css" /> 
    <div id="map"></div>
    <input type="text" id="coords" name="coords"/>
    <script type="text/javascript" src="JavaScript\gps.js"></script>
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDN5PYhLP8w5eGlDMPPkM6QdJJr0-9OfRY&callback=initMap"></script> 
	
     <div class="form-group">
      <label style="font-size: 18pt"><b>Cubierta</b></label>
     <select name="cubierta"id="cubierta">	
			<option value="Si">Si</option>
			<option value="No">No</option>
	</select>
    </div>
	
	<div class="form-group">
      <label style="font-size: 18pt"><b>Superficie</b></label>
     <select name="superficie"id="superficie">	
			<option value="Césped">Césped</option>
			<option value="Arcilla">Arcilla</option>
			<option value="Dura">Dura</option>
	</select>
    </div> 
	
	<div class="form-group">
      <label style="font-size: 18pt"><b>Cuenta con red?</b></label>
     <select name="red"id="red">	
			<option value="Si">Si</option>
			<option value="No">No</option>
	</select>
    </div>
	
	<input type="submit" name="procesar" value="Ingresar">
	    <a href="../gui/index.php"><input type="button" value="Volver"></a>
  </fieldset>
  <input type="hidden" name="txtId" value="<?php echo($id); ?>">
</form>
</body>
</html>