<?php

include('./include/idioma.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>COSISERED Mapa</title>

</head>

<body background="img/fondo_pag.jpg">
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<table width="780px" height="700" align="center" cellpadding="0" cellspacing="0">
  <tr>  	
    <td width="780px" height="680">
<div align="center" class="tit_mapa"><a><?php echo $google; ?></a></div>
<div align="center">
<iframe width="600" height="600" frameborder="1" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.pe/maps/ms?msid=201348448583123924851.0004bc4f54f048f12da18&amp;msa=0&amp;hl=es&amp;ie=UTF8&amp;ll=-12.09189,-76.996045&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe><br />
<div class="tit_mapa" align="center">
<a><?php echo $ver; ?></a>
<a href="http://maps.google.com.pe/maps/ms?msid=201348448583123924851.0004bc4f54f048f12da18&amp;msa=0&amp;hl=es&amp;ie=UTF8&amp;ll=-12.09189,-76.996045&amp;spn=0,0&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:center" target="_black">COSISE RED SAC</a>
<a><?php echo $map; ?></a>
</div>
</div></td>
  </tr>
  <tr>
    <td width="780px" height="20"class="volver"><a href="portada.php"><?php echo $volver; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
  </tr>
</table>


</body>
</html>