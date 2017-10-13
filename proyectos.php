<?php

include('./include/idioma.php');
?>
<?php
include('concosise.php');
$queproy = "SELECT * FROM proyects where COD_AR='".$_GET['id']."'";
$resproy = mysql_query($queproy, $conexion) or die(mysql_error());
$totproy = mysql_num_rows($resproy);

$consulta="SELECT TITLE,TITLE_EN FROM areas where COD_AR='".$_GET['id']."'";
$resul=mysql_query($consulta);			
$registro=mysql_fetch_assoc($resul);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PROYECTOS</title>
</head>


<body bgcolor="#2c6eb5">
<!-- hojas de estilo CSS -->
<link href="css/estilo-proyectos.css" rel="stylesheet" type="text/css" />
<table width="760px" height="760px" align="center" bgcolor="#ffffff" cellpadding="0" cellspacing="0" >
  <tr>
    <td>
	<!--incio tabla del cuerpo -->
	<table width="760" height="760" cellpadding="0" cellspacing="0">
	<tr>
	<td width="10" height="40" bgcolor="#2c6eb5"></td>
	<td width="740" height="40"class="encabezado-proyectos" bgcolor="#2c6eb5">
	<a>
	<?php
	if($_GET['idioma']==1)
	{
	echo $registro['TITLE'];
	};
	if($_GET['idioma']==0)
	{
	echo $registro['TITLE_EN'];
	};
	?>	
	</a>
	</td>
	<td width="10" height="40" bgcolor="#2c6eb5"></td>
	</tr>
  	<tr>
    	<td width="10" bgcolor="#2c6eb5">&nbsp;</td>
    	<td width="740" height="680">
		<!-- 7 areas de sus proyectos -->		
		<table width="740" height="680" cellpadding="0" cellspacing="0" style="top:auto" background="img/fondo_pag.jpg">

		   <tr>
			<td>

            <?php 

					if ($totproy> 0) {
						while ($rowproy = mysql_fetch_assoc($resproy)){
						
							
						$quecli="SELECT NOMBRE FROM customers WHERE COD_CLI = '". $rowproy['COD_CLI']."'";
			 			$rescli=mysql_query($quecli);
			 			$registrocliente=mysql_fetch_assoc($rescli);					
					
			
						if($_GET['idioma']==1)
						{	
						echo // <a name='".$_GET['id']."'></a>
							" 

								<table width='740' bordercolor='#f0f0f0' cellpadding='0' cellspacing='0'background='img/fondo_pag.jpg'>
								<tr>
											<td width='17' >&nbsp;</td>
											<td width='707' bgcolor='#f0f0f0' class='titulo-proyectos'><a></a></td>
											<td width='14' >&nbsp;</td>
								</tr>
								<tr>
											<td >&nbsp;</td>
											<td class='titulo-proyectos' ><a>".$rowproy['TITLE']."</a></td>
											<td >&nbsp;</td>
								</tr>
								<tr>
											<td>&nbsp;</td>
											<td class='contenido-proyectos'><p><a>".$registrocliente['NOMBRE']."</a></p></td>
											<td>&nbsp;</td>
								</tr>
								<tr>
											<td >&nbsp;</td>
											<td >&nbsp;</td>
											<td >&nbsp;</td>
								</tr>
								</table>							
         					  
							";	
						};
						if($_GET['idioma']==0)
						{	
						echo // <a name='".$_GET['id']."'></a>
							" 

								<table width='740' bordercolor='#f0f0f0' cellpadding='0' cellspacing='0' background='img/fondo_pag.jpg'>
								<tr>
											<td width='17'>&nbsp;</td>
											<td width='707' bgcolor='#f0f0f0' class='titulo-proyectos'><a></a></td>
											<td width='14'>&nbsp;</td>
								</tr>
								<tr>
											<td >&nbsp;</td>
											<td class='titulo-proyectos' ><a>".$rowproy['TITLE_EN']."</a></td>
											<td >&nbsp;</td>
								</tr>
								<tr>
											<td>&nbsp;</td>
											<td class='contenido-proyectos'><p><a>".$registrocliente['NOMBRE']."</a></p></td>
											<td>&nbsp;</td>
								</tr>
								<tr>
											<td >&nbsp;</td>
											<td >&nbsp;</td>
											<td >&nbsp;</td>
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
