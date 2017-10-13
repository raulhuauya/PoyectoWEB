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
	<form action="actualizar_usuarios.php" method="post" name="actualizar_usuario">
	<table width="740">
      <tr>
        <td colspan="2" bgcolor="#999999"><a>editar area de interes</a></td>
        <td bgcolor="#999999" align="right"><a href="admin_usuarios.php">volver </a></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td width="93"><a>nombre</a></td>
        <td width="635" colspan="2"><input width="500" name="t_nombre" type="text" value="<?php echo $_REQUEST['t_nombre']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td><a>nick</a></td>
        <td colspan="2"><input width="200" name="t_nick" type="text" value="<?php echo $_REQUEST['t_nick']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td><a>password</a></td>
        <td colspan="2"><input width="200" name="t_password" type="text" value="<?php echo $_REQUEST['t_password']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
        </tr>
      <tr>
        <td><a>email</a></td>
        <td colspan="2"><input width="400" name="t_email" type="text" value="<?php echo $_REQUEST['t_email']; ?>" /></td>
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
