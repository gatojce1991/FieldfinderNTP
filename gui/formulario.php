<?php
require"../DP/usuarioDP.php"
?>
<html>
<body background="http://localhost/Fieldfinder/imagenes/maxresdefault.jpg" style="background-attachments: fixed">
<!-- formulario registro -->
<form method="post" action="../DP/usuarioDP.php" align="center" enctype="multipart/form-data" >
  <fieldset><br><br>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>
	<div class="form-group">
      <label style="font-size: 18pt"><b>Ingresa Mail</b></label>
      <input type="text" name="mail" class="form-control" placeholder="Ingrese Mail" />
    </div>
    <div class="form-group">
      <label style="font-size: 18pt"><b>Usuario</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingrese Usuario"/>
    </div>
    <div class="form-group">
      <label style="font-size: 18pt"><b>Ingresa Contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingrese Contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 18pt"><b>Repite Contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="Repite Contraseña" />
    </div>
	<input type="submit" name="procesar" value="Ingresar">
	    <a href="../gui/index.php"><input type="button" value="Volver"></a>
  </fieldset>
</form>
</body>
</html>