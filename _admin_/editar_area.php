<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
else
{
	echo "ingreso a sesion:   ".$_SESSION['usuario'];
}
?>
<?php
 if ($_POST['cerrarsesion']) 
{
session_start();
$_SESSION=array();
session_destroy();

}
?>
<?php
 if ($_POST['salir']) 
{
Header('Location: inicio.php');
}
?>
<form method="post">
<table width="740">
  <tr>
    <td><input name="cerrarsesion" type="submit" value="Cerrar  sesion" /></td>
  </tr>
  <tr>
    <td><input name="salir" type="submit" value="Salir de sesion" /></td>
  </tr>
</table>
</form>
<?php

//include "include/xpts.php";
include "../include/xpts.php";
include "../include/vz.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Editar opinion</title>

</head>

<body bgcolor="#CCCCCC">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<table width="740" align="center" class="encabezado-iz-negro">
  <tr>
    <td>
	<form action="actualizar-area.php" method="post" name="actualizar_area">
	<table width="740">
      <tr>
        <td colspan="2" bgcolor="#999999"><a>editar area de interes</a></td>
        <td bgcolor="#999999" align="right"><a href="admin_areas.php">volver </a></td>
      </tr>
      <tr>
        <td width="115"><a>codigo area</a></td>
        <td width="613" colspan="2"><input width="70" name="t_codigo_a" type="text" value="<?php echo $_REQUEST['t_codigo']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td><a>area_ espa&ntilde;ol</a></td>
        <td colspan="2"><input width="500" name="t_titulo_area_e" type="text" value="<?php echo $_REQUEST['t_titulo_es']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td><a>area_ingles</a></td>
        <td colspan="2"><input width="500" name="t_titulo_area_i" type="text" value="<?php echo $_REQUEST['t_titulo_in']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="3" bgcolor="#999999"><center><input type="submit" name="Submit" value="Modificar" /></center></td>
        </tr>
    </table>
	</form>
	</td>
  </tr>
</table>


</body>
</html>
