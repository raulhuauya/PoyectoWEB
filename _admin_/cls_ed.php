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

<body bgcolor="#C0C0C0">
<script language="javascript">

function cambiarimagen(nombre,cod)
{	var pagina;
	pagina="cls_im.php?b000="+ cod+nombre;
	window.open(pagina,"Imagen","width=500,height=700,toolbar=no,directories=no,menubar=no,status=no,top=250,left=250,scrollbars=yes"); 
}
</script>
<div align="center">
<table width="70%" height="530" border="0" cellpadding="0" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px">
  <tr>
    <td valign="top">
	<center>
	<form name="FrmCustomer" action="actualizar-customers.php" method="post">
	<table width="91%" height="370" border="0" cellpadding="0" cellspacing="0" style="margin-top:20px">
      <tr>
        <td height="38" bgcolor="#999999">&nbsp;&nbsp;&nbsp;&nbsp;EDITAR DATOS DEL CLIENTE </td>
        <td height="38" bgcolor="#999999">&nbsp;</td>
        <td height="38" bgcolor="#999999" align="right"><a href="cls_e.php">volver </a></td>
      </tr>
      <tr>
        <td height="38"  align="center" bgcolor="#f0f0f0">COD. CLIENTE</td>
        <td height="38" colspan="2"  align="center" bgcolor="#ffffff"><div align="left"><?php echo $_POST["ID"]; ?></div>
		<input type="hidden" name="codigo" value="<?php echo $_POST["ID"]; ?>">	</td>
        </tr>
      <tr>
        <td height="95"  align="center" bgcolor="#f0f0f0">IMAGEN</td>
        <td height="95"  align="center" bgcolor="#ffffff">
		<?php
			 $query="SELECT * FROM customers WHERE COD_CLI = '". $_POST["ID"]."'";
			 $resul=mysql_query($query);
			 $registro=mysql_fetch_assoc($resul);
				echo "<img  height='80' width='80'  src=".'../img/cc0001/'.$registro['IMAGE'].">";
			?>			</td>
        <td height="95"  align="center" bgcolor="#ffffff">
		<div align="center">
		<a href="javascript:cambiarimagen('<?php echo $_POST['ID']."','";?>')">Cambiar Imagen</a>		</div>		</td>
      </tr>
      <tr>
        <td width="24%" height="55" bgcolor="#f0f0f0">&nbsp;&nbsp;NOMBRE DEL <BR />
          &nbsp;&nbsp;CLIENTE </td>
        <td colspan="2" bgcolor="#ffffff">
		<div align="left">
		<?php
			 $query="SELECT * FROM customers WHERE COD_CLI = '". $_POST["ID"]."'";
			 $resul=mysql_query($query);
			 $registro=mysql_fetch_assoc($resul);				
				echo "<input name='t_nombre' type='text' size='82' maxlength='200' value='".$registro['NOMBRE']."'/>";
		?>
        </div></td>
      </tr>
	  <tr>
        <td height="45" bgcolor="#f0f0f0">&nbsp;&nbsp;PAGINA WEB ESPA&Ntilde;OL </td>
        <td colspan="2" bgcolor="#ffffff">
				<div align="left">
		<?php
			 $query="SELECT * FROM customers WHERE COD_CLI = '". $_POST["ID"]."'";
			 $resul=mysql_query($query);
			 $registro=mysql_fetch_assoc($resul);				
				echo "<input name='t_lnk' type='text' size='82' maxlength='200' value='".$registro['LNK']."'/>";
		?>
        </div>		</td>
      </tr>
	  <tr>
	    <td height="55" bgcolor="#f0f0f0">&nbsp;&nbsp;PAGINA WEB INGLES </td>
	    <td colspan="2" bgcolor="#ffffff">
		<div align="left">
		<?php
			 $query="SELECT * FROM customers WHERE COD_CLI = '". $_POST["ID"]."'";
			 $resul=mysql_query($query);
			 $registro=mysql_fetch_assoc($resul);				
				echo "<input name='t_lnk_e' type='text' size='82' maxlength='200' value='".$registro['LNK_EN']."'/>";
		?>
        </div></td>
	  </tr>
      <tr>
        <td height="44" bgcolor="#999999">&nbsp;</td>
        <td width="60%" bgcolor="#999999" align="center">
		<input type="submit" name="Submit" value="modificar" /></td>
        <td width="16%" bgcolor="#999999">&nbsp;</td>
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
