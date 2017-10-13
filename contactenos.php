<?php
include('./include/idioma.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CONTACTENOS</title>
</head>


<body bgcolor="#2c6eb5">
<!-- hojas de estilo CSS -->
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<table width="760px" height="760px" align="center" bgcolor="#ffffff" cellpadding="0" cellspacing="0" >
  <tr>
    <td>
	<!--incio tabla del cuerpo -->
	<table width="760" height="760" cellpadding="0" cellspacing="0">
	<tr>
	<td width="40" bgcolor="#2c6eb5"></td>
	<td width="720"class="encabezado2-nosotros" bgcolor="#2c6eb5"><a></a></td>
	<td width="40" bgcolor="#2c6eb5"></td>
	</tr>
  	<tr>
    	<td width="40" background="img/fondo_pag.jpg">&nbsp;</td>
    	<td width="720" height="250">
		<!--encabezado -->
		<table width="720" height="250" cellpadding="0" cellspacing="0">
  		<tr>
    		<td width="400" height="250" bgcolor="#FFFFFF" background="img/fondo_pag.jpg">
			
			<div class="encabezado-nosotros"><a><?php echo $cosise_cont; ?></a></div>
			<div class="contenido-nosotros"><a><?php echo $direccion_cont; ?></a></div>
			<div class="encabezado-nosotros"><a><?php echo $telefono_cont; ?></a></div>
			<div class="encabezado-nosotros"><a><?php echo $correo_cont; ?></a></div>
			<div class="contenido-nosotros"><a></a></div>
			
			</td>
    		<td width="320" height="250" bgcolor="#FFFFFF" background="img/fondo_pag.jpg"><div align="center" ><img src="img/recepcionista.png" width="172" height="240" align="right" /></div></td>
  		</tr>
		</table>
		<!-- fin encabezado -->
		</td>
    	<td width="40" background="img/fondo_pag.jpg">&nbsp;</td>
  	</tr>
  	<tr>
    	<td width="40" background="img/fondo_pag.jpg">&nbsp;</td>
    	<td width="720" height="460" background="img/fondo_pag.jpg">
		<!-- formulario -->
		<form name='formulario' id='formulario' method='post' action='enviar_mail.php' enctype="multipart/form-data">
		<table width="705" height="460" cellpadding="0" cellspacing="0" background="img/fondo_pag.jpg">
  		<tr>
  		  <td width="45" class="etiquetas-contactenos" background="img/fondo_pag.jpg">&nbsp;</td>
    		<td width="128" class="etiquetas-contactenos"><a><?php echo $dat_cont_1; ?></a></td>
    		<td width="23">&nbsp;</td>
    		<td width="507"><input type="text" name="nombre" style="width:450px"  /></td>
  		</tr>
  		<tr>
  		  <td class="etiquetas-contactenos">&nbsp;</td>
    		<td class="etiquetas-contactenos"><a><?php echo $dat_cont_2; ?></a></td>
    		<td>&nbsp;</td>
    		<td><input type="text" name="apellido" style="width:450px" /></td>
  		</tr>
  		<tr>
  		  <td class="etiquetas-contactenos">&nbsp;</td>
    		<td class="etiquetas-contactenos"><a><?php echo $dat_cont_3; ?></a></td>
    		<td>&nbsp;</td>
    		<td><input type="text" name="direccion" style="width:450px" /></td>
  		</tr>
  		<tr>
  		  <td class="etiquetas-contactenos">&nbsp;</td>
    		<td class="etiquetas-contactenos"><a><?php echo $dat_cont_4; ?></a></td>
    		<td>&nbsp;</td>
    		<td><input type="text"name="pais" style="width:450px" /></td>
  		</tr>
  		<tr>
  		  <td class="etiquetas-contactenos">&nbsp;</td>
    		<td class="etiquetas-contactenos"><a><?php echo $dat_cont_5; ?></a></td>
    		<td>&nbsp;</td>
    		<td><input type="text" name="ciudad" style="width:450px" /></td>
  		</tr>
  		<tr>
  		  <td class="etiquetas-contactenos">&nbsp;</td>
    		<td class="etiquetas-contactenos"><a><?php echo $dat_cont_6; ?></a></td>
    		<td>&nbsp;</td>
    		<td><input type="text" name="estado" style="width:450px" /></td>
  		</tr>
  		<tr>
  		  <td class="etiquetas-contactenos">&nbsp;</td>
    		<td class="etiquetas-contactenos"><a><?php echo $dat_cont_7; ?></a></td>
    		<td>&nbsp;</td>
    		<td><input type="text" name="codigo_postal" style="width:450px" /></td>
  		</tr>
  		<tr>
  		  <td class="etiquetas-contactenos">&nbsp;</td>
    		<td class="etiquetas-contactenos"><a><?php echo $dat_cont_8; ?></a></td>
    		<td>&nbsp;</td>
    		<td><input type="text" name="telefono" style="width:450px" /></td>
  		</tr>
  		<tr>
  		  <td class="etiquetas-contactenos">&nbsp;</td>
    		<td class="etiquetas-contactenos"><a><?php echo $dat_cont_9; ?></a></td>
    		<td>&nbsp;</td>
    		<td><input type="text" name="celular" style="width:450px" /></td>
  		</tr>
  		<tr>
  		  <td class="etiquetas-contactenos">&nbsp;</td>
    		<td class="etiquetas-contactenos"><a><?php echo $dat_cont_10; ?></a></td>
    		<td>&nbsp;</td>
    		<td><input type="text" name="email" style="width:450px" /></td>
  		</tr>
  		<tr>
  		  <td class="etiquetas-contactenos">&nbsp;</td>
    		<td class="etiquetas-contactenos"><a><?php echo $dat_cont_11; ?></a></td>
    		<td>&nbsp;</td>
    		<td><textarea name="mensaje" style="width:450px; height:100px"></textarea></td>
  		</tr>
  		<tr>
    		<td colspan="4"><center><input type="submit" name="Submit" value="<?php echo $dat_boton_enviar; ?>" /></center></td>
    		</tr>
  		<tr>
    		<td colspan="4" class="volver"><a href="portada.php"><?php echo $volver; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
    		</tr>
		</table>
		 </form>
    	<!-- fin formulario -->
		</td>
    	<td width="40" background="img/fondo_pag.jpg">&nbsp;</td>
  	</tr>
	</table>
	<!-- fin de la tabla -->
	</td>
  </tr>
</table>
</body>
</html>
