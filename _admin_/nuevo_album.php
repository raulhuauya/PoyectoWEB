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
<title>nuevo album</title>

</head>

<body bgcolor="#CCCCCC">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<table width="740" align="center" class="encabezado-iz-negro">
  <tr>
    <td>
	<form action="insertar_album.php" method="post" name="nuevo_album">
	<table width="740">
      <tr>
        <td bgcolor="#999999"><a>nuevo album</a></td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999" align="right"><a href="admin_album.php">volver</a></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td width="93"><a>codigo</a></td>
        <td width="635" colspan="2">
                <?php
			
			$consulta="select max(cast(right(cod_al,5) as unsigned))+1 mayor from ALBUM";
			$resul=mysql_query($consulta);			
			$registro=mysql_fetch_assoc($resul);
			if(strlen($registro['mayor'])==1)
			{
				echo "<input width='50' name='t_clave' type='text' size='82' maxlength='200' value='"."img0000".$registro['mayor']."'/>";
			}
			else
			{
				if(strlen($registro['mayor'])==2)
				{
					echo "<input width='50' name='t_clave' type='text' size='82' maxlength='200' value='"."img000".$registro['mayor']."'/>";
				}
				else
				{
					if(strlen($registro['mayor'])==3)
					{
						echo "<input width='50' name='t_clave' type='text' size='82' maxlength='200' value='"."img00".$registro['mayor']."'/>";
					}
				}
			}
			
			

			?>        </td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td><a>nombre en espa&ntilde;ol</a></td>
        <td colspan="2"><input width="400" name="t_nombre_e" type="text" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td><a>nombre en ingles</a></td>
        <td colspan="2"><input width="400" name="t_nombre_i" type="text" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#999999"><center><input type="submit" name="Submit" value="Guardar" /></center></td>
        </tr>
    </table>
	</form>
	</td>
  </tr>
</table>


</body>
</html>
