<?php
include('./include/idioma.php');
?>
<?php
include('concosise.php');
$queEmp = "SELECT * FROM news";
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
	<td width="740" height="40"class="encabezado-noticias" bgcolor="#2c6eb5" ><a></a></td>
	<td width="10" height="40" bgcolor="#2c6eb5"></td>
	</tr>
  	<tr>
    	<td width="10" bgcolor="#2c6eb5">&nbsp;</td>
    	<td width="740" height="680">
		<!-- 7 areas de sus proyectos -->		
		<table width="740" height="842" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="740" height="160" background="img/fondo_pag.jpg">
			<?php
			
			 $query_lista="select * from news where COD_N ='".$_GET['id']."'";
			 $resul_lista=mysql_query($query_lista);
			 $registro_select=mysql_fetch_assoc($resul_lista);
			 if($_GET['idioma']==1)
			 {
			 echo
			 "
				 <table width='740' cellpadding='0' cellspacing='0'>
				  <tr>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  </tr>
				  <tr>
					<td width='17' background='img/fondo_pag.jpg'>&nbsp;</td>
					<td width='144' bgcolor='#cccccc' class='titulo-noticias'><a>&nbsp;&nbsp;&nbsp;Titulo</a></td>
					<td width='551' bgcolor='#cccccc' class='titulo-noticias'><a>".$registro_select['TITLE']."</a></td>
					<td width='12' bgcolor='#cccccc'>&nbsp;</td>
					<td width='14'>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td bgcolor='#cccccc' class='titulo-noticias'><a>&nbsp;&nbsp;&nbsp;fecha</a></td>
					<td bgcolor='#cccccc' class='contenido-noticias'><a>".$registro_select['fecha']."</a></td>
					<td bgcolor='#cccccc' class='contenido-noticias'>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td bgcolor='#cccccc' class='titulo-noticias'><a>&nbsp;&nbsp;&nbsp;contenido</a></td>
					<td bgcolor='#cccccc' class='contenido-noticias'><a>".$registro_select['DESCRIPTION']."</a></td>
					<td bgcolor='#cccccc' class='contenido-noticias'>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
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
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  </tr>
				  <tr>
					<td width='17' background='img/fondo_pag.jpg'>&nbsp;</td>
					<td width='144' bgcolor='#cccccc' class='titulo-noticias'><a>&nbsp;&nbsp;&nbsp;Titulo</a></td>
					<td width='551' bgcolor='#cccccc' class='titulo-noticias'><a>".$registro_select['TITLE_EN']."</a></td>
					<td width='12' bgcolor='#cccccc'>&nbsp;</td>
					<td width='14'>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td bgcolor='#cccccc' class='titulo-noticias'><a>&nbsp;&nbsp;&nbsp;fecha</a></td>
					<td bgcolor='#cccccc' class='contenido-noticias'><a>".$registro_select['fecha']."</a></td>
					<td bgcolor='#cccccc' class='contenido-noticias'>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td bgcolor='#cccccc' class='titulo-noticias'><a>&nbsp;&nbsp;&nbsp;contenido</a></td>
					<td bgcolor='#cccccc' class='contenido-noticias'><a>".$registro_select['DESCRIPTION_EN']."</a></td>
					<td bgcolor='#cccccc' class='contenido-noticias'>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  <td background='img/fondo_pag.jpg'>&nbsp;</td>
				  </tr>
				</table>
			 
			 ";
			 };			 
			 ?>	
             				
          </td>
          
		  </tr>
		  <tr>
			<td width="740" height="680" background="img/fondo_pag.jpg">		
						
					 <?php 
					if ($totEmp> 0) {
						while ($rowEmp = mysql_fetch_assoc($resEmp)) {
						
						 if($_GET['idioma']==1)
						 {					
						
					  		echo // <a name='".$_GET['id']."'></a>
							" 
								<table width='740' bordercolor='#f0f0f0' cellpadding='0' cellspacing='0'>
								<tr>
											<td width='17' height='20' background='img/fondo_pag.jpg'>&nbsp;</td>
											<td width='707' background='img/fondo_pag.jpg' class='titulo-noticias'><a>".$rowEmp['TITLE']."</a></td>
											<td width='14' background='img/fondo_pag.jpg' >&nbsp;</td>
								</tr>
								<tr>
											<td height='20' background='img/fondo_pag.jpg'>&nbsp;</td>
											<td height='20' background='img/fondo_pag.jpg' class='contenido-noticias' ><a>".$rowEmp['fecha']."</a></td>
											<td height='20' background='img/fondo_pag.jpg' >&nbsp;</td>
								</tr>
								<tr>
											<td>&nbsp;</td>
											<td class='contenido-noticias'><p><a>".$rowEmp['DESCRIPTION']."</a></p></td>
											<td>&nbsp;</td>
								</tr>
								<tr>
											<td background='img/fondo_pag.jpg'>&nbsp;</td>
											<td background='img/fondo_pag.jpg'>&nbsp;</td>
											<td background='img/fondo_pag.jpg'>&nbsp;</td>
								</tr>
								<tr>
											<td background='img/fondo_pag.jpg'>&nbsp;</td>
											<td background='img/fondo_pag.jpg'>&nbsp;</td>
											<td background='img/fondo_pag.jpg'>&nbsp;</td>
								</tr>
								</table>
							
         					  
							";			
							};
						 if($_GET['idioma']==0)
						 {					
						
					  		echo // <a name='".$_GET['id']."'></a>
							" 
								<table width='740' bordercolor='#f0f0f0' cellpadding='0' cellspacing='0'>
								<tr>
											<td width='17' height='20' background='img/fondo_pag.jpg'>&nbsp;</td>
											<td width='707' background='img/fondo_pag.jpg' class='titulo-noticias'><a>".$rowEmp['TITLE_EN']."</a></td>
											<td width='14' background='img/fondo_pag.jpg' >&nbsp;</td>
								</tr>
								<tr>
											<td height='20' background='img/fondo_pag.jpg'>&nbsp;</td>
											<td height='20' background='img/fondo_pag.jpg' class='contenido-noticias' ><a>".$rowEmp['fecha']."</a></td>
											<td height='20' background='img/fondo_pag.jpg' >&nbsp;</td>
								</tr>
								<tr>
											<td>&nbsp;</td>
											<td class='contenido-noticias'><p><a>".$rowEmp['DESCRIPTION_EN']."</a></p></td>
											<td>&nbsp;</td>
								</tr>
								<tr>
											<td background='img/fondo_pag.jpg'>&nbsp;</td>
											<td background='img/fondo_pag.jpg'>&nbsp;</td>
											<td background='img/fondo_pag.jpg'>&nbsp;</td>
								</tr>
								<tr>
											<td background='img/fondo_pag.jpg'>&nbsp;</td>
											<td background='img/fondo_pag.jpg'>&nbsp;</td>
											<td background='img/fondo_pag.jpg'>&nbsp;</td>
								</tr>
								</table>
							
         					  
							";			
							};				
						}
					}
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
    	<td width="740" height="40" background="img/fondo_pag.jpg" class="volver"><a href="portada.php"><?php echo $volver; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a>
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
