<?php
include('./include/idioma.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body background="img/fondo_pag.jpg" >
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="631" height="44" class="encabezado2-portada-lista"><div align="center"><a><?php echo $mensaje_video; ?></a></div></td>
  </tr>
  <tr>
    <td height="172"><table width="519" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="26" bgcolor="#ffffff">&nbsp;</td>
        <td width="470" bgcolor="#ffffff">&nbsp;</td>
        <td width="23" bgcolor="#ffffff">&nbsp;</td>
      </tr>
      <tr>
        <td height="225" bgcolor="#ffffff">&nbsp;</td>
        <td><object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='470' height='320' id='single2' name='single1'>
          <param name='movie' value='http://www.cosisered.com/desarrollo/videos/player.swf' />
          <param name='allowfullscreen' value='true' />
          <param name='allowscriptaccess' value='always' />
          <param name='wmode' value='transparent' />
          <param name='flashvars' value='file=http://www.cosisered.com/desarrollo/videos/video.mp4&image=http://www.cosisered.com/desarrollo/videos/preview.jpg' />
          <embedtype='application/x-shockwave-flash'id='single2'name='single2'src='http://www.cosisered.com/desarrollo/videos/player.swf'width='470'height='320'bgcolor='undefined'allowscriptaccess='always'allowfullscreen='true'wmode='transparent'flashvars='file=http://www.cosisered.com/desarrollo/videos/video.mp4&image=http://www.cosisered.com/desarrollo/videos/preview.jpg'/>
        </object></td>
        <td bgcolor="#ffffff" >&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#ffffff">&nbsp;</td>
        <td align="center" bgcolor="#ffffff" class="encabezado2-portada-lista"><a><?php echo $video_1; ?></a></td>
        <td bgcolor="#ffffff">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="344"><table width="519" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="26" bgcolor="#ffffff">&nbsp;</td>
        <td width="470" bgcolor="#ffffff">&nbsp;</td>
        <td width="23" bgcolor="#ffffff">&nbsp;</td>
      </tr>
      <tr>
        <td height="225" bgcolor="#ffffff">&nbsp;</td>
        <td>
        <object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='470' height='320' id='single1' name='single1'><param name='movie' value='http://www.cosisered.com/desarrollo/videos/player.swf'><param name='allowfullscreen' value='true'><param name='allowscriptaccess' value='always'><param name='wmode' value='transparent'><param name='flashvars' value='file=http://www.cosisered.com/desarrollo/videos/video1.mp4&image=http://www.cosisered.com/desarrollo/videos/silvio.jpg'><embedtype='application/x-shockwave-flash'id='single2'name='single2'src='http://www.cosisered.com/desarrollo/videos/player.swf'width='470'height='320'bgcolor='undefined'allowscriptaccess='always'allowfullscreen='true'wmode='transparent'flashvars='file=http://www.cosisered.com/desarrollo/videos/video1.mp4&image=http://www.cosisered.com/desarrollo/videos/silvio.jpg'/></object>
        </td>
        <td bgcolor="#ffffff" >&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#ffffff">&nbsp;</td>
        <td align="center" bgcolor="#ffffff"  class="encabezado2-portada-lista"><a><?php echo $video_2; ?></a></td>
        <td bgcolor="#ffffff">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="19" class="volver"><a href="portada.php"><?php echo $volver; ?></a></td>
  </tr>
</table>
</body>
</html>