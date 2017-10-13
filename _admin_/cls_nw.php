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
<title>Editar Clientes</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style>
</head>

<body bgcolor="c0c0c0">
<script language="javascript">

function cambiarimagen(nombre,cod)
{	var pagina;
	pagina="cls_im_nw.php?b000="+ cod+nombre;
	window.open(pagina,"Imagen","width=500,height=500,toolbar=no,directories=no,menubar=no,status=no,top=250,left=250,scrollbars=yes"); 
}
</script>
<div align="center">

<table width="73%" height="530" border="0" cellpadding="0" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px">
  <tr>
    <td valign="top">
	<center>
	<form name="FrmCustomer" action="insertar-customers.php" method="post">
	<table width="97%" height="294" border="0" cellpadding="0" cellspacing="0" style="margin-top:20px">
      <tr>
        <td height="52" bgcolor="#999999">&nbsp;&nbsp;&nbsp;INGRESAR NUEVO  CLIENTE </td>
        <td height="52" bgcolor="#999999">&nbsp;</td>
        <td height="52" bgcolor="#999999" align="right"><a href="cls_e.php">volver</a></td>
      </tr>
      <tr>
        <td height="31"  align="center" bgcolor="#f0f0f0"><div align="center">COD. CLIENTE</div></td>
        <td height="31" colspan="2"  align="left" bgcolor="#ffffff"><?php
			
			$consulta="select max(cast(right(COD_CLI,6) as unsigned))+1 mayor from customers";
			$resul=mysql_query($consulta);			
			$registro=mysql_fetch_assoc($resul);
			if(strlen($registro['mayor'])==1)
			{
				echo "<input name='t_clave' type='text' size='82' maxlength='200' value='"."CC00000".$registro['mayor']."'/>";
				$codigo="CC00000".$registro['mayor'];
			}
			else
			{
				if(strlen($registro['mayor'])==2)
				{
					echo "<input name='t_clave' type='text' size='82' maxlength='200' value='"."CC0000".$registro['mayor']."'/>";
					$codigo="CC0000".$registro['mayor'];
				}
				else
				{
					if(strlen($registro['mayor'])==3)
					{
						echo "<input name='t_clave' type='text' size='82' maxlength='200' value='"."CC000".$registro['mayor']."'/>";
						$codigo="CC000".$registro['mayor'];
					}
				}
			}
			
			

			?></td>
        </tr>
      <tr>
        <td height="46"  align="center" bgcolor="#f0f0f0"><div align="center">IMAGEN</div></td>
        <td height="46"  align="left" bgcolor="#ffffff">
		<?php
		echo "<input name='t_imagen' type='text' value='".$codigo.".jpg"."' />";
		?>		</td>
        <td height="46"  align="center" bgcolor="#ffffff">
		<div align="center">
		<a href="javascript:cambiarimagen('<?php echo $codigo."','";?>')">Subir Imagen</a>		</div>		</td>
      </tr>
      
      <tr>
        <td width="24%" height="30" bgcolor="#f0f0f0">&nbsp;&nbsp;NOMBRE DEL <BR />
          &nbsp;&nbsp;CLIENTE </td>
        <td colspan="2" bgcolor="#ffffff">          <div align="left">
            <input name="nombre" type="text" size="82" maxlength="200" />
            </div></td>
      </tr>
	  <tr>
        <td height="34" bgcolor="#f0f0f0">&nbsp;&nbsp;PAGINA WEB ESPA&Ntilde;OL  </td>
        <td colspan="2" bgcolor="#ffffff"><div align="left">
          <input name="lnk" type="text" size="82" maxlength="200" />
          <br />
        </div></td>
      </tr>
	  <tr>
	    <td height="32" bgcolor="#f0f0f0">&nbsp;&nbsp;PAGINA WEB INGLES </td>
	    <td colspan="2" bgcolor="#ffffff"><div align="left">
          <input name="lnk_e" type="text" size="82" maxlength="200" />
          <br />
        </div></td>
	  </tr>
      <tr>
        <td height="44" bgcolor="#999999">&nbsp;</td>
        <td width="62%" bgcolor="#999999"><div align="center">
            <input  type="submit" name="Agregar" value="Agregar" />
        </div></td>
        <td width="14%" bgcolor="#999999">&nbsp;</td>
      </tr>
    </table>
	</form>
	</center>
	</td>
  </tr>
</table>
</div>
</body>
</html>
