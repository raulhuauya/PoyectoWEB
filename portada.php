<?php
include('./include/idioma.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body bgcolor="#2c6eb5">



<!-- hojas de estilo CSS -->
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<table width="757" height="753" align="center" cellpadding="0" cellspacing="0" bgcolor="#2c6eb5" >
  <tr>
    <td width="755" height="751"><!-- tabla que contiene el contenido de la portada -->
        <table width="755" height="751" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="503" height="352" bgcolor="#2c6eb5" align="left"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="500" height="345" id="banner" align="middle">
              <param name="allowScriptAccess" value="sameDomain" />
              <param name="movie" value="banner.swf" />
              <param name="quality" value="high" />
              <param name="bgcolor" value="#ffffff" />
              <embed src="banner.swf" quality="high" bgcolor="#ffffff" width="500" height="345" name="banner" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />            
</object></td>
            <td width="250" height="352" bgcolor="#2c6eb5"><center>
                <img src="img/cosise.jpg" width="250" height="345" />
            </center></td>
          </tr>
          <tr>
            <td width="503" height="2" bgcolor="#FFFFFF"></td>
            <td width="250" height="2" bgcolor="#FFFFFF"></td>
          </tr>
          <tr>
            <td bgcolor="#f0f0f0" width="500" height="25"class="encabezado2-portada-lista"><a>
			<div style="width:400" >
			<marquee behavior="scroll" direction="right">
			&nbsp;&nbsp;
			statistische   Forschung			  
			<img src="img/alemania.jpg" width="35" height="20" />
			&nbsp;&nbsp;
statistical research			  
			<img src="img/eu.jpg" width="35" height="20" />
			&nbsp;&nbsp;
&sigma;&tau;&alpha;&tau;&iota;&sigma;&tau;&iota;&kappa;&#942;   &#941;&rho;&epsilon;&upsilon;&nu;&alpha;
			<img src="img/dinamarca.jpg" width="35" height="20" />
			&nbsp;&nbsp;
&#1089;&#1090;&#1072;&#1090;&#1080;&#1089;&#1090;&#1080;&#1095;&#1077;&#1089;&#1082;&#1080;&#1093;   &#1080;&#1089;&#1089;&#1083;&#1077;&#1076;&#1086;&#1074;&#1072;&#1085;&#1080;&#1081;		  			<img src="img/rusia.jpg" width="35" height="20" />
			&nbsp;&nbsp;
recherche   statistique			  
			<img src="img/francia.jpg" width="35" height="20" />
			</marquee>
			</div>	
            </a>		</td>
            <td width="250" height="398" rowspan="2" bgcolor="#2c6eb5"><!-- tabla de las palabras de bienvenida -->
                <table width="250px" height="391" cellpadding="0" cellspacing="0" align="center">
                  <tr>
                    <td height="19" colspan="3" class="encabezado-portada-bienvenida"><a href="palabras.php"><?php echo $titulo_bienvenida; ?> </a></td>
                  </tr>
                  <tr>
                    <td  width="10" height="222px"class="contenido-portada-bienvenida"></td>
                    <td  width="230"class="contenido-portada-bienvenida"><a href="palabras.php"><?php echo $comentario_bienvenida; ?></a> </td>
                    <td  width="8"class="contenido-portada-bienvenida"></td>
                  </tr>
                  <tr>
                    <td height="142"></td>
                    <td height="142"><div align="center"><A href="palabras.php"><img src="img/grupososise.jpg" width="200px" height="138px" /></A></div></td>
                    <td height="142"></td>
                  </tr>
              </table>
              <!-- fin tabla de las palabras de bienvenida -->            </td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" height="347">
			
			<table width="500px" height="260" cellpadding="0" cellspacing="0" align="center" >
                  <tr>
                    <td width="8" height="50">&nbsp;</td>
                    <td width="112"><img height="50" width="109" src="img/lista2.jpg" /> </td>
                    <td width="7">&nbsp;</td>
                    <td width="347" bgcolor="#f0f0f0" class="encabezado2-portada-lista">
                      <a><?php echo $cuant_3; ?></a>                    </td>
                    <td width="10">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="2">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="50">&nbsp;</td>
                    <td><img height="50" width="109" src="img/lista1.jpg" /> </td>
                    <td>&nbsp;</td>
                    <td bgcolor="#f0f0f0" class="encabezado2-portada-lista">
                      <a><?php echo $cuant_4; ?></a>                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="2">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="50">&nbsp;</td>
                    <td><img height="50" width="109" src="img/lista3.jpg" /> </td>
                    <td>&nbsp;</td>
                    <td bgcolor="#f0f0f0" class="encabezado2-portada-lista">
                      <a><?php echo $cuali_2; ?></a>                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="2">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="50">&nbsp;</td>
                    <td><img height="50" width="109" src="img/lista4.jpg" /> </td>
                    <td>&nbsp;</td>
                    <td bgcolor="#f0f0f0" class="encabezado2-portada-lista">
                      <a><?php echo $cuali_1; ?></a>                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="2">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="50">&nbsp;</td>
                    <td><img height="50" width="109" src="img/lista5.jpg" /></td>
                    <td>&nbsp;</td>
                    <td bgcolor="#f0f0f0" class="encabezado2-portada-lista">
                      <a><?php echo $cartografia; ?></a>                    </td>
                    <td>&nbsp;</td>
                  </tr>
              </table>
			
			</td>
          </tr>
      </table>
      <!-- fin tabla que contiene el contenido de la portada -->
    </td>
  </tr>
</table>
</body>
</html>
