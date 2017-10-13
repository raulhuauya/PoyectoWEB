
<?php
//$conexion = mysql_connect("127.0.0.1", "root", "");
include('concosise.php');
include('./include/idioma.php');
//$queEmp = "SELECT * FROM empresa ORDER BY nombre ASC";
$queEmp = "SELECT * FROM customers ORDER BY nombre ASC";

$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PROYECTOS</title>
</head>


<body bgcolor="#2c6eb5">
<!-- hojas de estilo CSS -->
<link href="css/estilo-cliente.css" rel="stylesheet" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<table width="760px" height="760px" align="center" bgcolor="#ffffff" cellpadding="0" cellspacing="0" >
  <tr>
    <td>
	<!--incio tabla del cuerpo -->
	<table width="760" height="760" cellpadding="0" cellspacing="0">
	<tr>
	<td width="10" height="40" bgcolor="#2c6eb5"></td>
	<td width="740" height="40"class="encabezado-clientes" bgcolor="#2c6eb5"><a></a></td>
	<td width="10" height="40" bgcolor="#2c6eb5"></td>
	</tr>
  	<tr>
    	<td width="10" bgcolor="#2c6eb5">&nbsp;</td>
    	<td width="740" height="680" background="img/fondo_pag.jpg">
		<!-- clientess -->
		<!-- consulta a la base de datos de cosise -->
			<?php 
			if ($totEmp> 0) {
				while ($rowEmp = mysql_fetch_assoc($resEmp)) {
				echo 
					"
					<table width='740' height='80' cellpadding='0' cellspacing='0' >
					  <tr>
						<td width='80' height='80' rowspan='2'><center><img  height='60' width='60'  src=".'img/cc0001/'.$rowEmp['IMAGE']."></center></td>
						<td width='660' height='40' bgcolor='#f0f0f0' class='titulo-clientes'><a>".$rowEmp['NOMBRE']."</a></td>
					  </tr>
					  <tr>
						<td width='50' height='40' class='link-clientes'><a href=".$rowEmp['LNK']." target='_black'>".$rowEmp['LNK']."</a></td>
					  </tr>
					  <tr>
						<td colspan='2' width='50' height='40'></td>
					  </tr>
					</table>
					
					
					";
					


				 //echo "<div style='border:2px solid #f0f0f0;' class='contenido-nosotros'> <a>".$rowEmp['NOMBRE']."</a></div>";
				//echo "Direccion: ".$rowEmp['direccion']."<br>";
				//echo "Telefono: ".$rowEmp['telefono']."<br><br>";
				}
			}
			?>
			
			<!-- fin de la consulta a la base de datos de cosise-->
		<!-- fin de clientes--></td>
    	<td width="10" bgcolor="#2c6eb5" >&nbsp;</td>
  	</tr>
  	<tr>
    	<td width="10" height="40" bgcolor="#2c6eb5">&nbsp;</td>
    	<td width="740" height="40" class="volver" background="img/fondo_pag.jpg"><a href="portada.php"><?php echo $volver; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a>
		</td>
    	<td width="10" height="40" bgcolor="#2c6eb5">&nbsp;</td>
  	</tr>
	</table>
	<!-- fin de la tabla -->
	</td>
  </tr>
</table>
</body>
</html>
