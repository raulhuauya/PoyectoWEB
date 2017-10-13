
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
<title>Editar noticias</title>

</head>

<body bgcolor="#CCCCCC">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<table width="740" align="center" class="encabezado-iz-negro">
  <tr>
    <td>
	<form action="actualizar-noticias.php" method="post" name="actualizar_noticias">
	<table width="740" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" bgcolor="#999999"><a>editar noticias</a> </td>
        <td bgcolor="#999999" align="right"><a href="admin_noticias.php">volver </a></td>
      </tr>
      <tr>
        <td width="93" bgcolor="#ffffff"><a>codigo</a>  </td>
        <td width="635" colspan="2"  bgcolor="#ffffff"><input width="70" name="t_codigo_noticia" type="text" value="<?php echo $_REQUEST['t_codigo']; ?>" /></td>
      </tr>
      <tr>
        <td  bgcolor="#ffffff"><a>fecha</a></td>
        <td colspan="2"  bgcolor="#ffffff"><input style="width:100;" name="t_fecha_noticia" type="text" value="<?php echo $_REQUEST['t_fecha']; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor='#f0f0f0'><a>espa&ntilde;ol:</a></td>
        </tr>
      <tr>
        <td  bgcolor="#ffffff"><a>titulo</a></td>
        <td colspan="2"  bgcolor="#ffffff"><input style="width:500;" name="t_titulo_noticia_e" type="text" value="<?php echo $_REQUEST['t_titulo_es']; ?>" /></td>
      </tr>
      <tr>
        <td  bgcolor="#ffffff"><a>contenido</a></td>
        <td colspan="2"  bgcolor="#ffffff"><textarea style="width:600px; height:100px" name="descripcion_espa" cols="" rows=""><?php echo $_REQUEST['contenido_noticia_es']; ?></textarea></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor='#f0f0f0'><a>ingles</a></td>
        </tr>
      <tr>
        <td  bgcolor="#ffffff"><a>titulo</a></td>
        <td colspan="2"  bgcolor="#ffffff"><input style="width:500;" name="t_titulo_noticia_i" type="text" value="<?php echo $_REQUEST['t_titulo_in']; ?>" /></td>
      </tr>
      <tr>
        <td  bgcolor="#ffffff"><a>contenido</a></td>
        <td colspan="2"  bgcolor="#ffffff"><textarea style="width:600px; height:100px" name="descripcion_ing" cols="" rows=""><?php echo $_REQUEST['contenido_noticia_in']; ?></textarea></td>
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
