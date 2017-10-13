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

$queusuarios = "SELECT * FROM usuarios;";

$resusuarios = mysql_query($queusuarios, $conexion) or die(mysql_error());
$totusuarios = mysql_num_rows($resusuarios);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>administrar usuarios</title></head>

<body bgcolor="#CCCCCC">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<!-- cuerpo de l apgina consult -->
<table  width="740" align="center" cellpadding="0" cellspacing="0" class="encabezado-iz-negro">
  <tr>
    <td>
	<table width="740" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#999999"><a>administrador de usuarios</a></td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999"><a href="administrador.php">volver </a></td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>
      <tr>
        <td width="188" bgcolor="#999999"><a>nuevo usuario</a></td>
        <form name="nuevo_usuario" method="post" action="nuevo_usuario.php">
		<td width="189" bgcolor="#999999">
		<center><input name="nuevo" type="submit" value="Nuevo" /></center>
        </td>
		</form> 
        <td width="173" bgcolor="#999999"><a>eliminar usuario</a></td>
		<form name="eliminar_usuario" method="post" action="eliminar_usuario.php">
        <td width="87" bgcolor="#999999">
			<center>
			<select name="lista"> 
			<?php
			//consulto por el mayor de los valores de la columna COD_CLI y lo guardo en el nuevo campo temporal "num_mayor"						
				$quenombre = "SELECT nombre FROM usuarios;";

				$resnombre = mysql_query($quenombre, $conexion) or die(mysql_error());
				$totnombre = mysql_num_rows($resnombre);		 
			if ($totnombre> 0) {
				while ($rownombre= mysql_fetch_assoc($resnombre))
				 {
					 if($rownombre['nombre']<>""){
					echo "<option value='".$rownombre['nombre']."'>".$rownombre['nombre']."</option>";};
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
        <td colspan="5">
		<?php
			if ($totusuarios> 0)
			 {
				while ($rowusuarios = mysql_fetch_assoc($resusuarios))
				{
					echo "
						<form action='editar_usuario.php' method='post' name='actualizar_usuario'>
						<table width='740' cellpadding='0' cellspacing='0'>
						  <tr>
							<td width='144' bgcolor='#F0F0F0'><a>nick</a></td>
							<td bgcolor='#F0F0F0'><a>password</a></td>
							<td bgcolor='#F0F0F0'><a>nombre</a></td>
							<td width='294' bgcolor='#F0F0F0'><a>correo electronico</a></td>
						  </tr>
						  <tr>
							<td bgcolor='#ffffff'><input name='t_nick' type='text' value='".$rowusuarios['nick']."'/></td>
							<td width='182' bgcolor='#ffffff'><input name='t_password' type='text' value='".$rowusuarios['password']."'/></td>
							<td width='118' bgcolor='#ffffff'><input name='t_nombre' type='text' value='".$rowusuarios['nombre']."'/></td>
							<td bgcolor='#ffffff'><input name='t_email' type='text' value='".$rowusuarios['email']."'/></td>
						  </tr>
						  <tr>
							<td width='144' bgcolor='#ffffff'></td>
							<td bgcolor='#ffffff'>&nbsp;</td>
							<td bgcolor='#ffffff'>&nbsp;</td>
							<td bgcolor='#ffffff'>&nbsp;</td>
						  </tr>
						  <tr>							
							<td colspan='4' bgcolor='#CCCCCC'><CENTER><input type='submit' name='Submit' value='Modificar' /></center></td>
						  </tr>
						</table>
						</form>";
				}
				
			  }		
		?>        </td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
