<?php
include "../include/xpts.php";
?>
<?php
$consulta="select * from customers";			
$resul=mysql_query($consulta);			
$registro=mysql_fetch_assoc($resul);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>eliminar-customers</title>
</head>

<body>
<form action="eliminar-customers.php" method="post" name="eliminar">
<table width="740" align="center">
  <tr>
    <td>
	<table width="748">
		  <tr>
			<td width="13">&nbsp;</td>
			<td colspan="3">seleccione el codigo del registro que desea eliminar: </td>
			<td width="14">&nbsp;</td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td width="256">elegir el codigo de cliente</td>
			<td width="217">
			<!-- agregar a select los codigos de mi tabla customers -->
			<select name="lista"> 
			<?php
			//consulto por el mayor de los valores de la columna COD_CLI y lo guardo en el nuevo campo temporal "num_mayor"						
			$con_mayor_valor="select max(cast(right(COD_CLI,6) as unsigned)) num_mayor from customers";
			$resul_mayor=mysql_query($con_mayor_valor);			
			$mayor=mysql_fetch_assoc($resul_mayor);
			//creo una lista de los valores que se asignan al select.			
			for($valor_for=1;$valor_for<=$mayor['num_mayor'];$valor_for++)
				{				 
					 $query_lista="select * from customers where cast(right(COD_CLI,6) as unsigned) ='".$valor_for."'";
					 $resul_lista=mysql_query($query_lista);
					 $registro_select=mysql_fetch_assoc($resul_lista);						 			
					 //imprimo en el select los valores de COD_CLI  	
					 echo "<option value='".$registro_select['COD_CLI']."'>".$registro_select['COD_CLI']."</option>";		  
				};			
			
			?>
			</select>			</td>
			<td width="218"></td>
			<td>&nbsp;</td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>nombre </td>
			<td colspan="2"><input type="text" name="nombre" /></td>
			<td>&nbsp;</td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>link espa&ntilde;ol </td>
			<td colspan="2"><input type="text" name="link_espa" /></td>
			<td>&nbsp;</td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>link ingles </td>
			<td colspan="2"><input type="text" name="link_ing" /></td>
			<td>&nbsp;</td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>imagen</td>
			<td colspan="2">&nbsp;</td>
			<td>&nbsp;</td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="3" align="center"><input type="submit" name="eliminar" value="eliminar" /></td>
			<td>&nbsp;</td>
		  </tr>
		</table>
	</td>
  </tr>
</table>
</form>
</body>
</html>
