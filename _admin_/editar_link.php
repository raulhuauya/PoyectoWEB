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
<title>Editar link</title>

</head>

<body bgcolor="#CCCCCC">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<script language="javascript">

function cambiarimagen(nombre,cod)
{	var pagina;
	pagina="cls_im_link.php?b000="+ cod+nombre;
	window.open(pagina,"Imagen","width=500,height=700,toolbar=no,directories=no,menubar=no,status=no,top=250,left=250,scrollbars=yes"); 
}
</script>
<table width="740" align="center" class="encabezado-iz-negro">
  <tr>
    <td>
	<form action="actualizar-link.php" method="post" name="actualizar_link">
	<table width="740">
      <tr>
        <td colspan="2" bgcolor="#999999"><a>editar enlaces de interes </a></td>
        <td bgcolor="#999999" align="right"><a href="admin_link.php">volver </a></td>
      </tr>
      <tr>
        <td width="93"><a>codigo</a></td>
        <td width="635" colspan="2"><input width="70" name="t_codigo_l" type="text" value="<?php echo $_REQUEST['t_codigo']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td><a>imagen</a></td>
        <td><input width='50px' height='50px' type='image' name='imageField' src='<?php echo $_REQUEST['direccion_img']; ?>' /></td>
        <td><a href="javascript:cambiarimagen('<?php echo $_REQUEST['t_codigo']."','";?>')">cambiar imagen</a> </td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td>url</td>
        <td colspan="2"><input width="500" name="t_url_l" type="text" value="<?php echo $_REQUEST['t_url']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td><a>descripcion en espa&ntilde;ol</a></td>
        <td colspan="2"><input width="500" name="t_descripcion_e_l" type="text" value="<?php echo $_REQUEST['t_descripcion_e']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td><a>descripcion en ingles</a></td>
        <td colspan="2"><input width="500" name="t_descripcion_i_l" type="text" value="<?php echo $_REQUEST['t_descripcion_i']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
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
