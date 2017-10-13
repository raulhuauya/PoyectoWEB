<?php
//include('./include/idioma.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>COSISERED Galeria de fotos</title>

<link href="css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />

<script src="scripts/jquery-1.3.2.js" language="javascript"></script>
<script src="scripts/jquery.lightbox-0.5.js" language="javascript"></script>

</head>

<body background="img/fondo_pag.jpg">
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<table width="780px" height="700" align="center" cellpadding="0" cellspacing="0">
  <tr>  	
    <td width="780px" height="680"><div align="center">
      <?php
			
			include_once('gallery.php');
			
			$mygallery = new gallery();
			$mygallery->loadFolder('images/'.$_GET['id']);
			$mygallery->show(650, 200, 10	);
		
		?>
    </div></td>
  </tr>
  <tr>
    <td width="780px" height="20"class="volver"><a href="albunes.php"><?php echo $volver; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
  </tr>
</table>


</body>
</html>