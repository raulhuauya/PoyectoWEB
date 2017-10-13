<?php
include('./include/idioma.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NOSOTROS</title>

</head>

<body bgcolor="#2c6eb5">
<!-- hojas de estilo CSS -->
<link href="css/estilo-nosotros.css" rel="stylesheet" type="text/css" />
<table width="760px" height="1000px" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="760px" height="1000">
	<!--TABLA QUE CONTIENE el esquema de la pagina nosotros -->
	<table width="769" height="1000" align="center" cellpadding="0" cellspacing="0"> 
  <tr>
    <td width="767" height="1000">
      <table width="720px" height="772" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="40px" colspan="3" class="encabezado-nosotros"><a><?php echo $nosotros; ?></a> </td>
          </tr>
        <tr>
          <td height="220px" colspan="3" bgcolor="#ffffff">
            <table width="720" height="131" cellpadding="0" cellspacing="0" background="img/fondo_pag.jpg">
              <tr>
                <td height="40" colspan="2" bgcolor="#f0f0f0" class="titulo-nosotros"><center>
                  <a><?php echo $titulo; ?></a>
                  </center></td>
                <td width="10" height="40">&nbsp;</td>
                </tr>
              <tr>
                <td rowspan="2" height="170" width="260" bgcolor="#f0f0f0"><center><img width="220" height="180px" src="img/foto-nosotros.JPG" /></center></td>
                <td width="464" height="40" class="titulo2-nosotros"><a><?php echo $subtitulo; ?></a> </td>
                <td height="40">&nbsp;</td>
                </tr>
              <tr>
                <td height="130" class="contenido-centrado-nosotros">
                  <table width="464" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="15" height="190">&nbsp;</td>
                      <td width="435"><a><?php echo $presentacion; ?></a></td>
                      <td width="12">&nbsp;</td>
                      </tr>
                    </table>
                    </td>
                <td height="130">&nbsp;</td>
                </tr>
              <tr>
                <td height="10">&nbsp;</td>
                <td height="10">&nbsp;</td>
                <td height="10">&nbsp;</td>
                </tr>
              </table>
              </td>
          </tr>
        <tr>
          <td height="20px" bgcolor="#f0f0f0" class="subtitulo-nosotros">&nbsp; </td>
          <td height="20px" bgcolor="#f0f0f0" class="subtitulo-nosotros"><a><?php echo $vision; ?></a></td>
          <td height="20px" bgcolor="#f0f0f0" class="subtitulo-nosotros">&nbsp;</td>
          </tr>
        <tr>
          <td height="150px" bgcolor="#ffffff" class="contenido-nosotros" background="img/fondo_pag.jpg"> </td>
          <td height="150px" bgcolor="#ffffff" class="contenido-nosotros" background="img/fondo_pag.jpg"><p><a><?php echo $texto_vision; ?></a></p></td>
          <td width="24" bgcolor="#ffffff" class="contenido-nosotros" background="img/fondo_pag.jpg">&nbsp;</td>
          </tr>
        <tr>
          <td width="23" height="20px" bgcolor="#f0f0f0" class="subtitulo-nosotros">&nbsp; </td>
          <td width="673" bgcolor="#f0f0f0" class="subtitulo-nosotros"><a><?php echo $mision; ?></a></td>
          <td height="20px" bgcolor="#f0f0f0" class="subtitulo-nosotros">&nbsp;</td>
          </tr>
        <tr>
          <td height="100px" bgcolor="#ffffff" class="contenido-nosotros" background="img/fondo_pag.jpg">        </td>
          <td height="100px" bgcolor="#ffffff" class="contenido-nosotros" background="img/fondo_pag.jpg"><p><a><?php echo $texto_mision; ?>       
            </a></p>
            <p>&nbsp;</p></td>
          <td height="100px" bgcolor="#ffffff" class="contenido-nosotros" background="img/fondo_pag.jpg">&nbsp;</td>
          </tr>
        <tr>
          <td height="20px" bgcolor="#f0f0f0" class="subtitulo-nosotros">&nbsp;</td>
          <td height="20px" bgcolor="#f0f0f0" class="subtitulo-nosotros"><a><?php echo $valores; ?></a></td>
          <td height="20px" bgcolor="#f0f0f0" class="subtitulo-nosotros">&nbsp;</td>
          </tr>
        
        <tr>
          <td height="180px" bgcolor="#ffffff" background="img/fondo_pag.jpg">&nbsp;</td>
          <td height="180px" bgcolor="#ffffff" class="contenido-nosotros" background="img/fondo_pag.jpg"><a>
            <p>			<?php echo $valores_intro; ?></p>
            <p>	        <?php echo $valores_1; ?></p>
            <p>	        <?php echo $valores_2; ?></p>
            <p>	        <?php echo $valores_3; ?></p>
            <p>	        <?php echo $valores_4; ?></p>
            <p>	        <?php echo $valores_5; ?></p>
            <p>	        <?php echo $valores_6; ?></p>
            <p>	        <?php echo $valores_7; ?></p>
            <p>	        <?php echo $valores_8; ?></p>
            <p>	        <?php echo $valores_9; ?> </p>
            </a></td>
          <td height="180px" bgcolor="#ffffff" background="img/fondo_pag.jpg">&nbsp;</td>
          </tr>
        <tr>
          <td height="20px" colspan="3" bgcolor="#f0f0f0" class="volver">
          <a href="portada.php?id="<?php $_GET['marcador'];?>"&idioma="<?php $_GET['idioma']; ?>><?php echo $volver; ?></a></td>
      </tr>
    </table>	</td>
    <td width="40"  class="volver"><a href="portada.php"><?php echo $volver; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
          </tr>
  </table>
      
      <!--fin TABLA QUE CONTIENE el esquema de la pagina nosotros --></td>
  </tr>
</table>
</body>
</html>
