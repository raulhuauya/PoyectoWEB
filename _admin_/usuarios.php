<?php
//AQUI CONEXION O include() DE ARCHIVO DE CONEXION CON BASE DE DATOS.
<?php include('registar.php'); ?>
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
FORM ACTION="registrar.php" METHOD="post">
      Nick : <INPUT TYPE="text" NAME="nick" SIZE=20 MAXLENGTH=20>
      <BR>
      Email: <INPUT TYPE="text" NAME="email" SIZE=28 MAXLENGTH=100>
      <BR>
      Password: <INPUT TYPE="password" NAME="password"
      SIZE=28 MAXLENGTH=20>
      <BR>
      Nombre: <INPUT TYPE="text" NAME="nombre" SIZE=28
      MAXLENGTH=255>
      <BR>
      <INPUT TYPE="submit" CLASS="boton" VALUE="Registrar">
      </FORM>
</body>
</html>
