
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
<title>Editar proyectos</title>

</head>

<body bgcolor="#CCCCCC" class="encabezado-iz-negro">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<table width="740" align="center">
  <tr>
    <td>
	<form action="actualizar-proyecto.php" method="post" name="actualizar_proyecto">
	<table width="740" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" bgcolor="#999999"><a>editar proyectos</a></td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999" align="right"><a href="admin_proyectos.php">volver </a></td>
      </tr>
      <tr>
        <td width="90" bgcolor="#FFFFFF"><a>codigo</a></td>
        <td width="73" bgcolor="#FFFFFF"><input width="70" name="t_codigo_p" type="text" value="<?php echo $_REQUEST['t_codigo_proyecto']; ?>" /></td>
        <td width="144" bgcolor="#FFFFFF"><a>area </a></td>
        <td width="71" bgcolor="#FFFFFF"><input width="70" name="t_codigo_a" type="text" value="<?php echo $_REQUEST['t_codigo_area']; ?>" /></td>
        <td width="140" bgcolor="#FFFFFF"><a>cliente </a></td>
        <td width="73" bgcolor="#FFFFFF"><input width="70" name="t_codigo_c" type="text" value="<?php echo $_REQUEST['t_codigo_cliente']; ?>" /></td>
        <td width="69" bgcolor="#FFFFFF"><a>fecha</a></td>
        <td width="44" bgcolor="#FFFFFF"><input width="70" name="t_fecha" type="text" value="<?php echo $_REQUEST['t_fecha']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="8" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><a>texto_ espa&ntilde;ol</a></td>
        <td colspan="7" bgcolor="#FFFFFF">
        <textarea style='width:650px; height:100px' name='t_descripcion_es'><?php echo $_REQUEST['t_descripcion_es']; ?></textarea>        </td>
      </tr>
      <tr>
        <td colspan="8" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><a>texto_ingles</a></td>
        <td colspan="7" bgcolor="#FFFFFF">
        <textarea style='width:650px; height:100px' name='t_descripcion_in'><?php echo $_REQUEST['t_descripcion_in']; ?></textarea>        </td>
      </tr>
      <tr>
        <td colspan="8" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="8" bgcolor="#999999"><center><input type="submit" name="Submit" value="Modificar" /></center></td>
        </tr>
    </table>
	</form>
	</td>
  </tr>
</table>


</body>
</html>
