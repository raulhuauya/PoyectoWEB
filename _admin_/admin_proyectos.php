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

$queproyecto = "SELECT * FROM proyects;";

$resproyecto = mysql_query($queproyecto, $conexion) or die(mysql_error());
$totproyecto = mysql_num_rows($resproyecto);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>PROYECTOS</title></head>

<body bgcolor="#CCCCCC">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<!-- cuerpo de l apgina consult -->
<table  width="740" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
	<table width="740" align="center" cellpadding="0" cellspacing="0" class="encabezado-iz-negro">
      <tr>
        <td colspan="2" bgcolor="#999999"><a>administrador de proyectos</a></td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999"><a href="administrador.php">volver </a></td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>
      <tr><form name="nuevo_proyecto" method="post" action="nuevo_proyecto.php">
        <td width="188" bgcolor="#999999"><a>nuevo proyecto</a></td>
        <td width="189" bgcolor="#999999">
		
		<center><input name="nuevo" type="submit" value="Nuevo" /></center>
        		</td></form>
        <td width="173" bgcolor="#999999"><a>eliminar proyecto</a></td>
		<form name="eliminar_proyecto" method="post" action="eliminar_proyectos.php">
        <td width="87" bgcolor="#999999">
			<center>
			<select name="lista"> 
			<?php
			//consulto por el mayor de los valores de la columna COD_CLI y lo guardo en el nuevo campo temporal "num_mayor"						
			$con_mayor_valor="select max(cast(right(COD_PRO,6) as unsigned)) num_mayor from proyects";
			$resul_mayor=mysql_query($con_mayor_valor);			
			$mayor=mysql_fetch_assoc($resul_mayor);
			//creo una lista de los valores que se asignan al select.			
			for($valor_for=1;$valor_for<=$mayor['num_mayor'];$valor_for++)
				{				 
					 $query_lista="select * from proyects where cast(right(COD_PRO,6) as unsigned) ='".$valor_for."'";
					 $resul_lista=mysql_query($query_lista);
					 $registro_select=mysql_fetch_assoc($resul_lista);						 			
					 //imprimo en el select los valores de COD_CLI  
					 if($registro_select['COD_PRO']<>"")
					 {	
					 echo "<option value='".$registro_select['COD_PRO']."'>".$registro_select['COD_PRO']."</option>";
					 };		  
				};			
			
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
			if ($totproyecto> 0)
			 {
				while ($rowproyecto = mysql_fetch_assoc($resproyecto))
				{
					echo "
						<form action='editar_proyecto.php' method='post' name='editar_proyecto'>
						<table width='740' cellpadding='0' cellspacing='0'>
							<tr>
							<td width='144' bgcolor='#F0F0F0'><a>codigo</a></td>
							<td width='133' bgcolor='#F0F0F0'><a>area </a></td>
							<td width='461' bgcolor='#F0F0F0'><a>cliente</a></td>
							<td width='461' bgcolor='#F0F0F0'><a>fecha de culminacion</a></td>
							</tr>
							<tr>
							<td bgcolor='#ffffff'>
							<input border='0' name='t_codigo_proyecto' type='text' value='".$rowproyecto['COD_PRO']."'/>
							</td>
							<td bgcolor='#ffffff'>
							<input border='0' name='t_codigo_area' type='text' value='".$rowproyecto['COD_AR']."'/>
							</td>
							<td bgcolor='#ffffff'>
							<input border='0' name='t_codigo_cliente' type='text' value='".$rowproyecto['COD_CLI']."'/>
							</td>
							<td bgcolor='#ffffff'>
							<input border='0' name='t_fecha' type='text' value='".$rowproyecto['DATE']."'/>
							</td>
							</tr>
							<tr>
							<td colspan='2' bgcolor='#F0F0F0'><a>descripcion espa&ntilde;ol</a></td>
							<td colspan='2' bgcolor='#F0F0F0'><a>descripcion ingles</a> </td>
							</tr>
							<tr>
							<td colspan='2' bgcolor='#ffffff'>
							<textarea style='width:350px; height:100px' name='t_descripcion_es'>".$rowproyecto['TITLE']."</textarea>
							</td>
							<td colspan='2' bgcolor='#ffffff'>
							<textarea style='width:350px; height:100px' name='t_descripcion_in'>".$rowproyecto['TITLE_EN']."</textarea>
							</td>
							</tr>
							<tr>
							<td width='144' bgcolor='#ffffff'>&nbsp;</td>
							<td width='133' bgcolor='#ffffff'>&nbsp;</td>
							<td bgcolor='#ffffff'>&nbsp;</td>
							<td bgcolor='#ffffff'>&nbsp;</td>
                            </tr>
							<tr>							
							<td colspan='5' bgcolor='#CCCCCC'><CENTER>
							<input type='submit' name='Submit' value='Modificar' /></center></td>
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
