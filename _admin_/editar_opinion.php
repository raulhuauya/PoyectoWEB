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
	<form action="actualizar-opinion.php" method="post" name="actualizar_noticias">
	<table width="740" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#999999"><a>editar opiniones</a></td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999" align="right"><a href="admin_opinion.php">volver </a></td>
      </tr>
      <tr>
        <td width="93" bgcolor="#FFFFFF"><a>codigo cliente</a></td>
        <td width="635" colspan="2" bgcolor="#FFFFFF"><input width="70" name="t_codigo_opinion" type="text" value="<?php echo $_REQUEST['t_codigo']; ?>" /></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><a>representante</a></td>
        <td colspan="2" bgcolor="#FFFFFF"><input width="400px" name="t_repre_opinion" type="text" value="<?php echo $_REQUEST['t_repre']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor='#f0f0f0'><a>espa&ntilde;ol:</a></td>
        </tr>
      <tr>
        <td bgcolor="#FFFFFF"><a>prioridad</a></td>
        <td colspan="2" bgcolor="#FFFFFF"><input width="50" name="t_pri_opinion_e" type="text" value="<?php echo $_REQUEST['t_prioridad_e']; ?>" /></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><a>contenido</a></td>
        <td colspan="2" bgcolor="#FFFFFF"><textarea style="width:600px; height:100px" name="descripcion_espa" cols="" rows=""><?php echo $_REQUEST['t_descripcion_es']; ?></textarea></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor='#f0f0f0'><a>ingles</a></td>
        </tr>
      <tr>
        <td bgcolor="#FFFFFF"><a>prioridad</a></td>
        <td colspan="2" bgcolor="#FFFFFF"><input width="50" name="t_pri_opinion_i" type="text" value="<?php echo $_REQUEST['t_prioridad_i']; ?>" /></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><a>contenido</a></td>
        <td colspan="2" bgcolor="#FFFFFF"><textarea style="width:600px; height:100px" name="descripcion_ing" cols="" rows=""><?php echo $_REQUEST['t_descripcion_i']; ?></textarea></td>
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
