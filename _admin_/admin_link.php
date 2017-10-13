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

$quelink = "SELECT * FROM links;";

$reslink = mysql_query($quelink, $conexion) or die(mysql_error());
$totlink = mysql_num_rows($reslink);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>noticias</title></head>

<body bgcolor="#CCCCCC">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<!-- cuerpo de l apgina consult -->
<table  width="740" align="center" cellpadding="0" cellspacing="0" class="encabezado-iz-negro">
  <tr>
    <td>
	<table width="740" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" bgcolor="#999999"><a>administrador de opiniones de enlaces de interes</a> </td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999"><a href="administrador.php">volver </a></td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>
      <tr><form name="nueva_opinion" method="post" action="nueva_link.php">
        <td width="191" bgcolor="#999999"><a>nueva enlace</a> </td>
        <td width="64" bgcolor="#999999">
		
		<center><input name="nuevo" type="submit" value="Nuevo" /></center>		</td></form>
        <td width="98" bgcolor="#999999"><a>eliminar enlace</a> </td>
		<form name="eliminar_link" method="post" action="eliminar_link.php">
        <td width="308" bgcolor="#999999">
			<center>
			<select name="lista"> 
			<?php
			//consulto por el mayor de los valores de la columna COD_CLI y lo guardo en el nuevo campo temporal "num_mayor"						
			$con_mayor_valor="select max(cast(right(COD_LN,6) as unsigned)) num_mayor from links";
			$resul_mayor=mysql_query($con_mayor_valor);			
			$mayor=mysql_fetch_assoc($resul_mayor);
			//creo una lista de los valores que se asignan al select.			
			for($valor_for=1;$valor_for<=$mayor['num_mayor'];$valor_for++)
				{				 
					 $query_lista="select * from links where cast(right(COD_LN,6) as unsigned) ='".$valor_for."'";
					 $resul_lista=mysql_query($query_lista);
					 $registro_select=mysql_fetch_assoc($resul_lista);						 			
					 //imprimo en el select los valores de COD_CLI 
					 if($registro_select['COD_LN']<>"") {	
					 echo "<option value='".$registro_select['COD_LN']."'>".$registro_select['DESCRIPTION']."</option>";	};	  
				};			
			
			?>
			</select>
			</center>		</td>
        <td width="77" bgcolor="#999999">
		<center><input name="eliminar" type="submit" value="Eliminar" /></center>		</td>
		</form>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>	  
      <tr>
        <td colspan="5">
		<?php
			if ($totlink> 0)
			 {
				while ($rowlink = mysql_fetch_assoc($reslink))
				{
					echo "
						<form action='editar_link.php' method='post' name='actualizar_link'>
								<table width='740' cellpadding='0' cellspacing='0'>
										  <tr>
											<td width='54' bgcolor='#F0F0F0'><a>imagen</a></td>
											<td width='27' bgcolor='#F0F0F0'><a>codigo</a></td>
											<td width='55' bgcolor='#F0F0F0'><a>url</a></td>
											<td width='316' bgcolor='#F0F0F0'><a>descripcion</a></td>
										    <td width='158' bgcolor='#F0F0F0'><a>descripcion en ingles</a></td>
										  </tr>
										  <tr>
											<td bgcolor='#ffffff'>
											
											<input width='50px' height='50px' type='image' name='t_imagen' src='../img/LINK/".$rowlink['PICTURE']."' />
											<input border='0' name='direccion_img' type='hidden' value='../img/LINK/".$rowlink['PICTURE']."'/>
											</td>
																				
																				
												<td bgcolor='#ffffff'><input name='t_codigo' type='text' value='".$rowlink['COD_LN']."'/></td>
												<td bgcolor='#ffffff'><input border='0' name='t_url' type='text' value='".$rowlink['LINK']."'/></td>
												<td bgcolor='#ffffff'><input border='0' name='t_descripcion_e' type='text' value='".$rowlink['DESCRIPTION']."'/></td>
											    <td bgcolor='#ffffff'><input border='0' name='t_descripcion_i' type='text' value='".$rowlink['DESCRIPTION_EN']."'/></td>
										  </tr>
											  <tr>							
												<td colspan='6' bgcolor='#CCCCCC'><CENTER><input type='submit' name='Submit' value='Modificar' /></center></td>
											  </tr>
							</table>
							</form>
						";
				}
				
			  }		
		?>    	</td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
