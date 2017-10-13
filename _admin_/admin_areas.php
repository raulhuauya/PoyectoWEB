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

$queareas = "SELECT * FROM areas;";

$resareas = mysql_query($queareas, $conexion) or die(mysql_error());
$totareas = mysql_num_rows($resareas);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>areas de interes</title></head>

<body bgcolor="#CCCCCC">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<!-- cuerpo de l apgina consult -->
<table  width="740" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
	<table width="740" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" bgcolor="#999999" class="encabezado-iz-negro"><a>administrador de areas</a></td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999" class="encabezado-iz-negro"><a href="administrador.php">volver </a></td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>
      <tr>
      <form name="nueva_area" method="post" action="nueva_area.php">
        <td width="154" bgcolor="#999999" class="encabezado-iz-negro"><a>nueva area</a></td>
        <td width="229" bgcolor="#999999">		
		<center><input name="nuevo" type="submit" value="Nuevo" /></center></td>
       </form>
        <td width="176" bgcolor="#999999" class="encabezado-iz-negro"><a>eliminar area</a></td>
		<form name="eliminar_area" method="post" action="eliminar_area.php">
        <td width="88" bgcolor="#999999">
			<center>
			<select name="lista"> 
			<?php
			//consulto por el mayor de los valores de la columna COD_CLI y lo guardo en el nuevo campo temporal "num_mayor"						
			$con_mayor_valor="select max(cast(right(COD_AR,6) as unsigned)) num_mayor from areas";
			$resul_mayor=mysql_query($con_mayor_valor);			
			$mayor=mysql_fetch_assoc($resul_mayor);
			//creo una lista de los valores que se asignan al select.			
			for($valor_for=1;$valor_for<=$mayor['num_mayor'];$valor_for++)
				{				 
					 $query_lista="select * from areas where cast(right(COD_AR,6) as unsigned) ='".$valor_for."'";
					 $resul_lista=mysql_query($query_lista);
					 $registro_select=mysql_fetch_assoc($resul_lista);						 			
					 //imprimo en el select los valores de COD_CLI 
					 if ($registro_select['COD_AR']<>""){ 	
					 echo "<option value='".$registro_select['COD_AR']."'>".$registro_select['TITLE']."</option>";
					 };
				};			
			
			?>
			</select>
			</center>		</td>
        <td width="91" bgcolor="#999999">
		<center><input name="eliminar" type="submit" value="Eliminar" /></center>		</td>
		</form>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>	  
      <tr>
        <td colspan="5">
		<?php
			if ($totareas> 0)
			 {
				while ($rowareas = mysql_fetch_assoc($resareas))
				{
					echo "
						<form action='editar_area.php' method='post' name='actualizar_area'>
						<table width='740' cellpadding='0' cellspacing='0' class='encabezado-iz-negro'>
						  <tr>
							<td width='109' bgcolor='#F0F0F0'><a>codigo</a></td>
							<td width='316' bgcolor='#F0F0F0'><a>area_ espa&ntilde;ol</a></td>
							<td width='299' bgcolor='#F0F0F0'><a>area_ingles</a></td>
						  </tr>
						  <tr>
							<td bgcolor='#ffffff'><input name='t_codigo' type='text' value='".$rowareas['COD_AR']."'/></td>
							<td bgcolor='#ffffff'><input name='t_titulo_es' type='text' value='".$rowareas['TITLE']."'/></td>
							<td bgcolor='#ffffff'><input name='t_titulo_in' type='text' value='".$rowareas['TITLE_EN']."'/></td>
						  </tr>
						  <tr>
							<td width='109' bgcolor='#ffffff'></td>
							<td bgcolor='#ffffff'>&nbsp;</td>
							<td bgcolor='#ffffff'>&nbsp;</td>
						  </tr>
						  <tr>							
							<td colspan='3' bgcolor='#CCCCCC'><CENTER><input type='submit' name='Submit' value='Modificar' /></center></td>
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
