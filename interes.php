<?php
include('./include/idioma.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body bgcolor="#2c6eb5">
<!-- hojas de estilo CSS -->
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link href="css/estilo-interes.css" rel="stylesheet" type="text/css" />
<table width="760px" height="1160px" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="760px" height="1160px"><!--TABLA QUE CONTIENE el esquema de la pagina nosotros -->
      <table width="760" height="1160" cellpadding="0" cellspacing="0">
        <tr>
          <td width="30">&nbsp;</td>
          <td width="680">
          <table width="708" height="1160px" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="40px" colspan="3" class="encabezado-interes">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#ffffff">
              <!-- areas de ineteres-->                
            
              <table width="707" border="0" cellpadding="0" cellspacing="0" background="img/fondo_pag.jpg">
                <tr background="img/fondo_pag.jpg">
                  <td width="11" height="21" align="center">
                  <!-- primera area-->
                  <!-- fin primera area--></td>
                  <td width="663" align="center" class="encabezado4-interes"><a><?php echo $titulo_interes; ?></a></td>
                  <td width="19" align="center">&nbsp;</td>
                </tr>
                <tr background="img/fondo_pag.jpg">
                  <td height="102" align="center">&nbsp;</td>
                  <td height="102" align="center" class="contenido-justificado-interes"><a><?php echo $intro_interes; ?></a></td>
                  <td height="102" align="center">&nbsp;</td>
                </tr>
                <tr background="img/fondo_pag.jpg">
                  <td height="21" align="center">&nbsp;</td>
                  <td height="21" align="center">&nbsp;</td>
                  <td height="21" align="center">&nbsp;</td>
                </tr>
                <tr background="img/fondo_pag.jpg">
                  <td height="59" colspan="3" align="center">
                  <table width="680" height="120" border="0" cellpadding="0" cellspacing="0" background="img/fondo_pag.jpg">
                    <tr>
                      <td colspan="5">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="120" rowspan="4" bgcolor="#ffffff" background="img/fondo_pag.jpg"></td>
                      <td width="110" height="120" rowspan="4" bgcolor="#f0f0f0"><center>
                        <img src="img/econo.jpg" width="100" height="100" />
                      </center></td>
                      <td height="20" colspan="2" bgcolor="#f0f0f0" class="encabezado2-interes"><a><?php echo $interes_1; ?></a></td>
                      <td height="20" width="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td height="10" width="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="80">&nbsp;</td>
                      <td colspan="2" height="80" class="contenido-derecha-interes"><a><?php echo $text_interes_1; ?></a></td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td width="10" height="10">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr background="img/fondo_pag.jpg">
                  <td height="120" colspan="3" align="center">
                  <!--  segunda area-->
                  <table width="680" height="120" border="0" cellpadding="0" cellspacing="0" background="img/fondo_pag.jpg">
  				<tr>
				  <td colspan="5">&nbsp;</td>
				  </tr>
					<tr>
    				<td width="10" height="20">&nbsp;</td>
                    <td colspan="2" bgcolor="#f0f0f0" class="encabezado3-interes"><a><?php echo $interes_2; ?></a></td>
                    <td width="110" height="120" rowspan="4" bgcolor="#f0f0f0"><center><img src="img/educacion.jpg" width="100" height="100" /></center></td>
					<td width="10" height="120" rowspan="4" bgcolor="#ffffff" background="img/fondo_pag.jpg"></td>
                  </tr>
                  <tr>
                    <td width="10" height="10">&nbsp;</td>
                    <td width="500" height="10">&nbsp;</td>
                    <td width="10" height="10">&nbsp;</td>
                    </tr>
                  <tr>
                    <td height="80" colspan="2" class="contenido-izquierda-interes"><a><?php echo $text_interes_2; ?>

                    </a></td>
                    <td>&nbsp;</td>
                    </tr>
                  <tr>
                    <td width="10" height="10">&nbsp;</td>
                    <td width="500" height="10">&nbsp;</td>
                    <td width="10" height="10">&nbsp;</td>
                    </tr>
                </table>

                  <!-- fin segunda area-->                  </td>
                </tr>
                <tr background="img/fondo_pag.jpg">
                  <td height="120" colspan="3" align="center">
				  <table width="680" height="120" border="0" cellpadding="0" cellspacing="0" background="img/fondo_pag.jpg">
                    <tr>
                      <td colspan="5">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="120" rowspan="4" bgcolor="#ffffff"></td>
                      <td width="110" height="120" rowspan="4" bgcolor="#f0f0f0"><center>
                        <img src="img/empleo.jpg" width="100" height="100" />
                      </center></td>
                      <td height="20" colspan="2" bgcolor="#f0f0f0" class="encabezado2-interes"><a><?php echo $interes_3; ?></a></td>
                      <td height="20" width="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td height="10" width="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="80">&nbsp;</td>
                      <td colspan="2" height="80" class="contenido-derecha-interes"><a><?php echo $text_interes_3; ?>.</a></td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td width="10" height="10">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr background="img/fondo_pag.jpg">
                  <td height="120" colspan="3" align="center">
				  <table width="680" height="120" border="0" cellpadding="0" cellspacing="0" background="img/fondo_pag.jpg">
                    <tr>
                      <td colspan="5">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="20">&nbsp;</td>
                      <td colspan="2" bgcolor="#f0f0f0" class="encabezado3-interes"><a><?php echo $interes_4; ?></a></td>
                      <td width="110" height="120" rowspan="4" bgcolor="#f0f0f0"><center>
                        <img src="img/nutricion.jpg" width="100" height="100" />
                      </center></td>
                      <td width="10" height="120" rowspan="4"></td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td width="10" height="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="80" colspan="2" class="contenido-izquierda-interes"><a><?php echo $text_interes_4; ?></a></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td width="10" height="10">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr background="img/fondo_pag.jpg">
                  <td height="120" colspan="3" align="center">
				  <table width="680" height="120" border="0" cellpadding="0" cellspacing="0" background="img/fondo_pag.jpg">
                    <tr>
                      <td colspan="5">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="120" rowspan="4" bgcolor="#ffffff"></td>
                      <td width="110" height="120" rowspan="4" bgcolor="#f0f0f0"><center>
                          <img src="img/pobreza-equi.jpg" width="100" height="100" />
                      </center></td>
                      <td height="20" colspan="2" bgcolor="#f0f0f0" class="encabezado2-interes"><a><?php echo $interes_5; ?></a></td>
                      <td height="20" width="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td height="10" width="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="80">&nbsp;</td>
                      <td colspan="2" height="80" class="contenido-derecha-interes"><a><?php echo $text_interes_5; ?></a></td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td width="10" height="10">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr background="img/fondo_pag.jpg">
                  <td height="120" colspan="3" align="center">
				  <table width="680" height="120" border="0" cellpadding="0" cellspacing="0" background="img/fondo_pag.jpg">
                    <tr>
                      <td colspan="5">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="20">&nbsp;</td>
                      <td colspan="2" bgcolor="#f0f0f0" class="encabezado3-interes"><a><?php echo $interes_6; ?></a></td>
                      <td width="110" height="120" rowspan="4" bgcolor="#f0f0f0"><center>
                      </center></td>
                      <td width="10" height="120" rowspan="4"></td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td width="10" height="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="80" colspan="2" class="contenido-izquierda-interes"><a><?php echo $text_interes_6; ?></a></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td width="10" height="10">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr background="img/fondo_pag.jpg">
                  <td height="120" colspan="3" align="center">
				  <table width="680" height="120" border="0" cellpadding="0" cellspacing="0" background="img/fondo_pag.jpg">
                    <tr>
                      <td colspan="5">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="120" rowspan="4"></td>
                      <td width="110" height="120" rowspan="4" bgcolor="#f0f0f0"><center>
                          <img src="img/medioambiente.jpg" width="100" height="100" />
                      </center></td>
                      <td height="20" colspan="2" bgcolor="#f0f0f0" class="encabezado2-interes"><a><?php echo $interes_7; ?></a></td>
                      <td height="20" width="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td height="10" width="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="80">&nbsp;</td>
                      <td colspan="2" height="80" class="contenido-derecha-interes"><a><?php echo $text_interes_7; ?></a></td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td width="10" height="10">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr background="img/fondo_pag.jpg">
                  <td height="120" colspan="3" align="center">
				  <table width="680" height="120" border="0" cellpadding="0" cellspacing="0" background="img/fondo_pag.jpg">
                    <tr>
                      <td colspan="5">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="20">&nbsp;</td>
                      <td colspan="2" bgcolor="#f0f0f0" class="encabezado3-interes"><a><?php echo $interes_8; ?></a></td>
                      <td width="110" height="120" rowspan="4" bgcolor="#f0f0f0"><center><img src="img/sociales.jpg" width="100" height="100" />
                      </center></td>
                      <td width="10" height="120" rowspan="4"></td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td width="10" height="10">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="80" colspan="2" class="contenido-izquierda-interes"><a><?php echo $text_interes_8; ?></a></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="10">&nbsp;</td>
                      <td width="500" height="10">&nbsp;</td>
                      <td width="10" height="10">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
              </table>
              <!-- fin de las areas de interes -->              </td>
            </tr>
            <tr background="img/fondo_pag.jpg">
              <td width="15" height="40px" class="volver" background="img/fondo_pag.jpg"></td>
              <td width="676"  class="volver" background="img/fondo_pag.jpg" class="volver"><a href="portada.php"><?php echo $volver; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
              <td width="16"  class="volver" background="img/fondo_pag.jpg">&nbsp;</td>
            </tr>
          </table>
        </td>
          <td width="30">&nbsp;</td>
        </tr>
      </table>
      <!--fin TABLA QUE CONTIENE el esquema de la pagina nosotros --></td>
  </tr>
</table>


</body>
</html>