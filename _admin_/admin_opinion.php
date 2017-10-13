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

$queopinion = "SELECT * FROM customers_opinion;";

$resopinion = mysql_query($queopinion, $conexion) or die(mysql_error());
$totopinion = mysql_num_rows($resopinion);
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
        <td colspan="3" bgcolor="#999999"><a>administrador de opiniones de los clientes</a> </td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999"><a href="administrador.php">volver </a></td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>
      <tr><form name="nueva_opinion" method="post" action="nueva_opinion.php">
        <td width="188" bgcolor="#999999"><a>nueva opinion</a> </td>
        <td width="189" bgcolor="#999999">
		
		<center><input name="nuevo" type="submit" value="Nuevo" /></center>
       	</td> </form>	
        <td width="173" bgcolor="#999999"><a>eliminar opinion</a> </td>
		<form name="eliminar_opinion" method="post" action="eliminar_opinion.php">
        <td width="87" bgcolor="#999999">
			<center>
			<select name="lista"> 
			<?php
			//consulto por el mayor de los valores de la columna COD_CLI y lo guardo en el nuevo campo temporal "num_mayor"						
			$con_mayor_valor="select max(cast(right(COD_CLI,6) as unsigned)) num_mayor from customers_opinion";
			$resul_mayor=mysql_query($con_mayor_valor);			
			$mayor=mysql_fetch_assoc($resul_mayor);
			//creo una lista de los valores que se asignan al select.			
			for($valor_for=1;$valor_for<=$mayor['num_mayor'];$valor_for++)
				{				 
					 $query_lista="select * from customers_opinion where cast(right(COD_CLI,6) as unsigned) ='".$valor_for."'";
					 $resul_lista=mysql_query($query_lista);
					 $registro_select=mysql_fetch_assoc($resul_lista);						 			
					 //imprimo en el select los valores de COD_CLI 
					 if($registro_select['COD_CLI']<>"") {	
					 echo "<option value='".$registro_select['COD_CLI']."'>".$registro_select['COD_CLI']."</option>";	};	  
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
			if ($totopinion> 0)
			 {
				while ($rowopinion = mysql_fetch_assoc($resopinion))
				{
					echo "
						<form action='editar_opinion.php' method='post' name='actualizar_opinion'>
						<table width='740' cellpadding='0' cellspacing='0'>
										  <tr>
											<td width='54' bgcolor='#F0F0F0'><a>codigo cliente</a></td>
											<td width='55' bgcolor='#F0F0F0'><a>prioridad</a></td>
											<td width='316' bgcolor='#F0F0F0'><a>descripcion</a></td>
										  </tr>
										  <tr>
											<td bgcolor='#ffffff'><input border='0' name='t_codigo' type='text' value='".$rowopinion['COD_CLI']."'/></td>										
												<td bgcolor='#ffffff'><input border='0' name='t_prioridad_e' type='text' value='".$rowopinion['PRIORITY']."'/></td>
												<td bgcolor='#ffffff'><textarea style='width:350px; height:100px' name='t_descripcion_es'>".$rowopinion['DESCRIPTION']."</textarea></td>
											  </tr>
											  <tr>
												<td width='54' bgcolor='#F0F0F0'><a>representante</a></td>
												<td width='55' bgcolor='#F0F0F0'><a>prioridad</a></td>
												<td width='316' bgcolor='#F0F0F0'><a>descripcion ingles</a> </td>
												
											  </tr>
											  <tr>
												<td width='54' bgcolor='#ffffff'><input name='t_repre' type='text' value='".$rowopinion['REPRESENTATIVE']."'/></td>
												<td width='55' bgcolor='#ffffff'><input name='t_prioridad_i' type='text' value='".$rowopinion['PRIORITY_EN']."'/></td>
												<td bgcolor='#ffffff'><textarea style='width:350px; height:100px' name='t_descripcion_i'>".$rowopinion['DESCRIPTION_EN']."</textarea></td>
												
											  </tr>
											  <tr>							
												<td colspan='4' bgcolor='#CCCCCC'><CENTER><input type='submit' name='Submit' value='Modificar' /></center></td>
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
