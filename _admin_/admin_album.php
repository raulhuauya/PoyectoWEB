<?php
include ('./include/terminar_sesion.php');
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

$quealbum = "SELECT * FROM ALBUM;";

$resalbum = mysql_query($quealbum, $conexion) or die(mysql_error());
$totalbum = mysql_num_rows($resalbum);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>administrar albunes</title></head>

<body bgcolor="#CCCCCC">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<!-- cuerpo de l apgina consult -->
<table  width="740" align="center" cellpadding="0" cellspacing="0" class="encabezado-iz-negro">
  <tr>
    <td>
	<table width="740" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" bgcolor="#999999"><a>administrador de albunes de fotos</a></td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999"><a href="administrador.php">volver </a></td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>
      <tr>
      <form name="nuevo_album" method="post" action="nuevo_album.php">
        <td width="188" bgcolor="#999999"><a>nuevo album</a></td>
        <td width="189" bgcolor="#999999">		
		<center><input name="nuevo" type="submit" value="Nuevo" /></center>        </td>
      </form>
        <td width="173" bgcolor="#999999"><a>eliminar album</a></td>
		<form name="eliminar_album" method="post" action="eliminar_album.php">
        <td width="87" bgcolor="#999999">
			<center>
			<select name="lista"> 
			<?php
			//consulto por el mayor de los valores de la columna COD_CLI y lo guardo en el nuevo campo temporal "num_mayor"						
				$quenombre = "SELECT * FROM ALBUM;";

				$resnombre = mysql_query($quenombre, $conexion) or die(mysql_error());
				$totnombre = mysql_num_rows($resnombre);		 
			if ($totnombre> 0) {
				while ($rownombre= mysql_fetch_assoc($resnombre))
				 {
					 if($rownombre['cod_al']<>""){
					echo "<option value='".$rownombre['cod_al']."'>".$rownombre['name']."</option>";};
				 }	
					
			}
			?>
			</select>
			</center>		</td>
        <td width="87" bgcolor="#999999">
		<center><input name="eliminar" type="submit" value="Eliminar" /></center>		</td>
		</form>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>	  
      <tr>
        <td colspan="5"><?php
			if ($totalbum> 0)
			 {
				while ($rowalbum = mysql_fetch_assoc($resalbum))
				{
					echo "
        				<form action='editar_album.php' method='post' name='actualizar_album'>
						<table width='740' cellpadding='0' cellspacing='0'>
						  <tr>
							<td width='144' bgcolor='#F0F0F0'><a>codigo album</a></td>
							<td bgcolor='#F0F0F0'><a>nombre de album esp</a></td>
							<td bgcolor='#F0F0F0'><a>nombre de album ing</a></td>							
						  </tr>
						  <tr>
							<td bgcolor='#ffffff'><input name='t_cod' type='text' value='".$rowalbum['cod_al']."'/></td>
							<td width='182' bgcolor='#ffffff'><input name='t_nom_esp' type='text' value='".$rowalbum['name']."'/></td>
							<td width='118' bgcolor='#ffffff'><input name='t_nom_ing' type='text' value='".$rowalbum['name_en']."'/></td>							
						  </tr>
						  <tr>
							<td width='144' bgcolor='#ffffff'></td>
							<td bgcolor='#ffffff'>&nbsp;</td>
							<td bgcolor='#ffffff'>&nbsp;</td>
							
						  </tr>
						  <tr>							
							<td colspan='2' bgcolor='#CCCCCC'><CENTER><input type='submit' name='Submit' value='Modificar' /></center></td>
							<td bgcolor='#CCCCCC'><a href='subir_fotos.php?b000=".$rowalbum['cod_al']."')'>agregar fotos</a></td>
							
						  </tr>
						</table>
					   </form>
						";
				}
				
			  }		
		?></td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
