<?php
include('./include/idioma.php');
?>
<?php
include('concosise.php');
$queEmp = "SELECT * FROM customers_opinion";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NOTICIAS</title>
</head>


<body bgcolor="#2c6eb5">
<!-- hojas de estilo CSS -->
<link href="css/estilo-noticias.css" rel="stylesheet" type="text/css" />
<table width="760px" height="760px" align="center" bgcolor="#ffffff" cellpadding="0" cellspacing="0" >
  <tr>
    <td>
	<!--incio tabla del cuerpo -->
	<table width="760" height="760" cellpadding="0" cellspacing="0">
	<tr>
	<td width="10" height="40" bgcolor="#2c6eb5"></td>
	<td width="740" height="40"class="encabezado-noticias" bgcolor="#2c6eb5" >&nbsp;</td>
	<td width="10" height="40" bgcolor="#2c6eb5"></td>
	</tr>
  	<tr>
    	<td width="10" bgcolor="#2c6eb5">&nbsp;</td>
    	<td width="740" height="680">
		<!-- 7 areas de sus proyectos -->		
		<table width="740" height="926" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="740" height="19" background="img/fondo_pag.jpg">&nbsp;</td>
		  </tr>
		  <tr background="img/fondo_pag.jpg">
		    <td height="80" background="img/fondo_pag.jpg"><?php
			 $query_lista="select * from customers_opinion where COD_CLI ='".$_GET['id']."'";
			 $resul_lista=mysql_query($query_lista);
			 $registro_select=mysql_fetch_assoc($resul_lista);
			 if($_GET['idioma']==1)
			 {
			 echo
			 "
				<table width='740' cellpadding='0' cellspacing='0' background='img/fondo_pag.jpg'>
				  <tr>
					<td width='17' background='img/fondo_pag.jpg'>&nbsp;</td>
					<td bgcolor='#cccccc' class='contenido-noticias'></td>
					<td colspan='2' bgcolor='#cccccc' class='contenido-noticias'><a>".$registro_select['DESCRIPTION']."</a></td>
					<td width='12' bgcolor='#cccccc' class='titulo-noticias'>&nbsp;</td>
					<td width='14' background='img/fondo_pag.jpg'>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td width='17' bgcolor='#cccccc' class='titulo-noticias'><a></a></td>
					<td colspan='2' bgcolor='#cccccc' class='contenido-noticias'><a></a></td>
					<td bgcolor='#cccccc' class='contenido-noticias'>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#cccccc' class='titulo-noticias'>&nbsp;</td>
				    <td bgcolor='#cccccc' class='titulo-noticias'></td>
				    <td bgcolor='#cccccc' class='nombre-noticias'><a>".$registro_select['REPRESENTATIVE']."</a></td>
				    <td bgcolor='#cccccc' class='contenido-noticias'>&nbsp;</td>
				    <td background='img/fondo_pag.jpg'>&nbsp;</td>
				    </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#cccccc' class='titulo-noticias'>&nbsp;</td>
				    <td bgcolor='#cccccc' class='titulo-noticias'></td>
				    <td bgcolor='#cccccc' class='cargo-noticias'><a>".$registro_select['cargo']."</a></td>
				    <td bgcolor='#cccccc' class='contenido-noticias'>&nbsp;</td>
				    <td>&nbsp;</td>
				    </tr>
				  <tr>
					<td>&nbsp;</td>
					<td bgcolor='#cccccc' class='titulo-noticias'><a>&nbsp;&nbsp;&nbsp;</a></td>
					<td width='409' bgcolor='#cccccc' class='titulo-noticias'></td>
					<td width='269' bgcolor='#cccccc' class='cargo-noticias'><a>".$registro_select['empresa']."</a></td>
					<td bgcolor='#cccccc' class='contenido-noticias'>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				</table>
			 
			 ";	
			 };	
			 if($_GET['idioma']==0)
			 {
			 echo
			 "
				<table width='740' cellpadding='0' cellspacing='0'>
				  <tr>
					<td width='17'>&nbsp;</td>
					<td bgcolor='#cccccc' class='contenido-noticias'></td>
					<td colspan='2' bgcolor='#cccccc' class='contenido-noticias'><a>".$registro_select['DESCRIPTION_EN']."</a></td>
					<td width='12' bgcolor='#cccccc' class='titulo-noticias'>&nbsp;</td>
					<td width='14'>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td width='17' bgcolor='#cccccc' class='titulo-noticias'><a></a></td>
					<td colspan='2' bgcolor='#cccccc' class='contenido-noticias'><a></a></td>
					<td bgcolor='#cccccc' class='contenido-noticias'>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#cccccc' class='titulo-noticias'>&nbsp;</td>
				    <td bgcolor='#cccccc' class='titulo-noticias'></td>
				    <td bgcolor='#cccccc' class='nombre-noticias'><a>".$registro_select['REPRESENTATIVE']."</a></td>
				    <td bgcolor='#cccccc' class='contenido-noticias'>&nbsp;</td>
				    <td>&nbsp;</td>
				    </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#cccccc' class='titulo-noticias'>&nbsp;</td>
				    <td bgcolor='#cccccc' class='titulo-noticias'></td>
				    <td bgcolor='#cccccc' class='cargo-noticias'><a>".$registro_select['cargo_e']."</a></td>
				    <td bgcolor='#cccccc' class='contenido-noticias'>&nbsp;</td>
				    <td>&nbsp;</td>
				    </tr>
				  <tr>
					<td>&nbsp;</td>
					<td bgcolor='#cccccc' class='titulo-noticias'><a>&nbsp;&nbsp;&nbsp;</a></td>
					<td width='409' bgcolor='#cccccc' class='titulo-noticias'></td>
					<td width='269' bgcolor='#cccccc' class='cargo-noticias'><a>".$registro_select['empresa']."</a></td>
					<td bgcolor='#cccccc' class='contenido-noticias'>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				</table>
			 
			 ";				 
			 };		 
			 ?></td>
		    </tr>
		    <tr>
			<td width="740" height="680" background="img/fondo_pag.jpg">		
						
					 <?php 
					if($_GET['idioma']==1)
					{ 
					if ($totEmp> 0) {
						while ($rowEmp = mysql_fetch_assoc($resEmp)) {				
					
						
						echo 
							" 
				<table width='740' cellpadding='0' cellspacing='0' background='img/fondo_pag.jpg'>
				  <tr>
					<td width='17'>&nbsp;</td>
					<td bgcolor='#f0f0f0' class='contenido-noticias'></td>
					<td colspan='2' bgcolor='#f0f0f0' class='contenido-noticias'><a>".$rowEmp['DESCRIPTION']."</a></td>
					<td width='12' bgcolor='#f0f0f0' class='titulo-noticias'>&nbsp;</td>
					<td width='14'>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td width='17' bgcolor='#f0f0f0' class='titulo-noticias'><a></a></td>
					<td colspan='2' bgcolor='#f0f0f0' class='contenido-noticias'><a></a></td>
					<td bgcolor='#f0f0f0' class='contenido-noticias'>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#f0f0f0' class='titulo-noticias'>&nbsp;</td>
				    <td bgcolor='#f0f0f0' class='titulo-noticias'></td>
				    <td bgcolor='#f0f0f0' class='nombre-noticias'><a>".$rowEmp['REPRESENTATIVE']."</a></td>
				    <td bgcolor='#f0f0f0' class='contenido-noticias'>&nbsp;</td>
				    <td>&nbsp;</td>
				    </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#f0f0f0' class='titulo-noticias'>&nbsp;</td>
				    <td bgcolor='#f0f0f0' class='titulo-noticias'></td>
				    <td bgcolor='#f0f0f0' class='cargo-noticias'><a>".$rowEmp['cargo']."</a></td>
				    <td bgcolor='#f0f0f0' class='contenido-noticias'>&nbsp;</td>
				    <td>&nbsp;</td>
				    </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#f0f0f0' class='titulo-noticias'>&nbsp;</td>
				    <td bgcolor='#f0f0f0' class='titulo-noticias'></td>
				    <td bgcolor='#f0f0f0' class='contenido-noticias'><a>".$rowEmp['empresa']."</a></td>
				    <td bgcolor='#f0f0f0' class='contenido-noticias'>&nbsp;</td>
				    <td>&nbsp;</td>
				    </tr>
				  <tr>
					<td>&nbsp;</td>
					<td background='img/fondo_pag.jpg' class='titulo-noticias'><a>&nbsp;&nbsp;&nbsp;</a></td>
					<td width='409' background='img/fondo_pag.jpg' class='titulo-noticias'></td>
					<td width='269' background='img/fondo_pag.jpg' class='cargo-noticias'></td>
					<td background='img/fondo_pag.jpg' class='contenido-noticias'>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				</table>
							
         					  
							";			
										
						}
					}
					};
					if($_GET['idioma']==0)
					{ 
					if ($totEmp> 0) {
						while ($rowEmp = mysql_fetch_assoc($resEmp)) {
						echo 
							" 
				<table width='740' cellpadding='0' cellspacing='0' background='img/fondo_pag.jpg'>
				  <tr>
					<td width='17'>&nbsp;</td>
					<td bgcolor='#f0f0f0' class='contenido-noticias'></td>
					<td colspan='2' bgcolor='#f0f0f0' class='contenido-noticias'><a>".$rowEmp['DESCRIPTION_EN']."</a></td>
					<td width='12' bgcolor='#f0f0f0' class='titulo-noticias'>&nbsp;</td>
					<td width='14'>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td width='17' bgcolor='#f0f0f0' class='titulo-noticias'><a></a></td>
					<td colspan='2' bgcolor='#f0f0f0' class='contenido-noticias'><a></a></td>
					<td bgcolor='#f0f0f0' class='contenido-noticias'>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#f0f0f0' class='titulo-noticias'>&nbsp;</td>
				    <td bgcolor='#f0f0f0' class='titulo-noticias'></td>
				    <td bgcolor='#f0f0f0' class='nombre-noticias'><a>".$rowEmp['REPRESENTATIVE']."</a></td>
				    <td bgcolor='#f0f0f0' class='contenido-noticias'>&nbsp;</td>
				    <td>&nbsp;</td>
				    </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#f0f0f0' class='titulo-noticias'>&nbsp;</td>
				    <td bgcolor='#f0f0f0' class='titulo-noticias'></td>
				    <td bgcolor='#f0f0f0' class='cargo-noticias'><a>".$rowEmp['cargo_e']."</a></td>
				    <td bgcolor='#f0f0f0' class='contenido-noticias'>&nbsp;</td>
				    <td>&nbsp;</td>
				    </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#f0f0f0' class='titulo-noticias'>&nbsp;</td>
				    <td bgcolor='#f0f0f0' class='titulo-noticias'></td>
				    <td bgcolor='#f0f0f0' class='contenido-noticias'><a>".$rowEmp['empresa']."</a></td>
				    <td bgcolor='#f0f0f0' class='contenido-noticias'>&nbsp;</td>
				    <td>&nbsp;</td>
				    </tr>
				  <tr>
					<td>&nbsp;</td>
					<td background='img/fondo_pag.jpg' class='titulo-noticias'><a>&nbsp;&nbsp;&nbsp;</a></td>
					<td width='409' background='img/fondo_pag.jpg' class='titulo-noticias'></td>
					<td width='269' background='img/fondo_pag.jpg' class='cargo-noticias'></td>
					<td background='img/fondo_pag.jpg' class='contenido-noticias'>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				</table>							
         					  
							";			
										
						}
					}
					};
					?>

					
				</td>
		  </tr>
		</table>

		<!-- fin de las 7 areas de sus proyectos -->
		
    	</td>
    	<td width="10" bgcolor="#2c6eb5">&nbsp;</td>
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
