<?php

include('./include/idioma.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PROYECTOS</title>
</head>


<body bgcolor="#2c6eb5">
<!-- hojas de estilo CSS -->
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<table width="760px" height="760px" align="center" bgcolor="#ffffff" cellpadding="0" cellspacing="0" >
  <tr>
    <td>
	<!--incio tabla del cuerpo -->
	<table width="760" height="952" cellpadding="0" cellspacing="0">
	<tr>
	<td width="24" height="40" bgcolor="#2c6eb5"></td>
	<td height="40" colspan="3" bgcolor="#2c6eb5"class="encabezado2-nosotros"><a><?php echo $titulo_bienvenida; ?> </a></td>
	<td width="24" height="40" bgcolor="#2c6eb5"></td>
	</tr>
  	<tr>
    	<td width="24" bgcolor="#2c6eb5">&nbsp;</td>
    	<td width="20" height="680" background="img/fondo_pag.jpg">		</td>
    	<td width="665" height="790" class="contenido-nosotros-justificado" background="img/fondo_pag.jpg">
				<a><?php echo $contenido_bienvenida; ?></a>
		
		        <table width="385" height="297" align="center">
                  <tr>
                    <td width="17" height="21">&nbsp;</td>
                    <td width="161">&nbsp;</td>
                    <td width="10">&nbsp;</td>
                    <td width="156">&nbsp;</td>
                    <td width="17">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><img src="img/nosotros3.jpg" width="254" height="203" /></td>
                    <td>&nbsp;</td>
                    <td><img src="img/nosotros5.jpg" width="254" height="203" /></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3"><img src="img/nosotros2.jpg" width="523" height="268" /></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                
          <p>&nbsp;</p></td>
    	<td width="25" background="img/fondo_pag.jpg"></td>
    	<td width="24" bgcolor="#2c6eb5">&nbsp;</td>
  	</tr>
  	
  	<tr>
    	<td width="24" height="40" bgcolor="#2c6eb5">&nbsp;</td>
    	<td height="40" colspan="3" class="volver" background="img/fondo_pag.jpg"><a href="portada.php"><?php echo $volver; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a>		</td>
    	<td width="24" height="40" bgcolor="#2c6eb5">&nbsp;</td>
  	</tr>
	</table>
	<!-- fin de la tabla -->
	</td>
  </tr>
</table>
</body>
</html>
