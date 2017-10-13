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
<table width="748" height="1231" align="center" bgcolor="#ffffff" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="748" height="1229"><!--incio tabla del cuerpo -->
        <table width="748" height="740" cellpadding="0" cellspacing="0">
          <tr>
            <td width="4" bgcolor="#2c6eb5" height="40"></td>
            <td width="738"class="encabezado2-nosotros" bgcolor="#2c6eb5" height="40"><a></a></td>
            <td width="10" height="40" bgcolor="#2c6eb5"></td>
          </tr>
          <tr>
            <td width="4" bgcolor="#2c6eb5">&nbsp;</td>
            <td width="738" height="100"><!--encabezado -->
                <table width="738" height="100" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="30" height="100" bgcolor="#FFFFFF" background="img/fondo_pag.jpg" >&nbsp;</td>
                    <td width="676" bgcolor="#FFFFFF" background="img/fondo_pag.jpg"><div class="encabezado-nosotros"><a><?php echo $titulo_trab; ?></a></div>
                        <div class="contenido-nosotros-justificado"><a><?php echo $trab_intro; ?></a></div></td>
                    <td width="30" bgcolor="#FFFFFF" background="img/fondo_pag.jpg">&nbsp;</td>
                  </tr>
                </table>
              <!-- fin encabezado -->
            </td>
            <td width="10" bgcolor="#2c6eb5">&nbsp;</td>
          </tr>
          <tr>
            <td width="4" rowspan="2" bgcolor="#2c6eb5">&nbsp;</td>
            <td width="738" height="55" background="img/fondo_pag.jpg">&nbsp;</td>
            <td width="10" rowspan="2" bgcolor="#2c6eb5">&nbsp;</td>
          </tr>
          <tr>
            <td height="305" background="img/fondo_pag.jpg"><form name='formulario' id='formulario' method='post' action='enviar_curr.php' enctype="multipart/form-data">
                <table width="720" height="610" cellpadding="0" cellspacing="0" background="img/fondo_pag.jpg">
                  <tr>
                    <td width="59" class="etiquetas-contactenos"></td>
                    <td width="156" class="etiquetas-contactenos"><a><?php echo $dat_trab_1; ?></a></td>
                    <td width="11">&nbsp;</td>
                    <td colspan="5"><input type="text" name="nombre" id="nombre" style="width:450px"  /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $dat_trab_2; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="apellido"  id="apellido" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos"></td>
                    <td class="etiquetas-contactenos"><a><?php echo $dat_trab_3; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="direccion" id="direccion" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $dat_trab_4; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text"name="distrito"  id="distrito" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $dat_trab_5; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="telefono" id="telefono" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $dat_trab_6; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="celular" id="celular" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $dat_trab_7; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="email" id="email" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos"><a>&nbsp;</a></td>
                    <td class="etiquetas-contactenos"><a><?php echo $dat_trab_8; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="edad" id="edad" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $dat_trab_9; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="uni-ist" id="uni-ist" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $dat_trab_10; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="grado" id="grado" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $dat_trab_11; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="profesion" id="profesion" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td colspan="5" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2" bgcolor="#f0f0f0" class="etiquetas-contactenos"></td>
                    <td bgcolor="#f0f0f0">&nbsp;</td>
                    <td colspan="5"class="encabezado-nosotros" bgcolor="#f0f0f0"><a><?php echo $trab_nivel_con; ?></a> </td>
                  </tr>
                  <tr>
                    <td colspan="2" class="etiquetas-contactenos"></td>
                    <td>&nbsp;</td>
                    <td colspan="2" class="etiquetas-contactenos"><center>
                      <a><?php echo $trab_b; ?></a>
                    </center></td>
                    <td colspan="2" class="etiquetas-contactenos"><center>
                      <a><?php echo $trab_i; ?></a>
                    </center></td>
                    <td width="212" class="etiquetas-contactenos"><center>
                      <a><?php echo $trab_a; ?></a>
                    </center></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_word; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="2"><center>
                      <input name="word" id="word" type="radio" value="basico" />
                    </center></td>
                    <td colspan="2"><center>
                      <input name="word" id="word" type="radio" value="intermedio" />
                    </center></td>
                    <td><center>
                      <input name="word" id="word" type="radio" value="avanzado" />
                    </center></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_excell; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="2"><center>
                      <input name="excell" id="excell" type="radio" value="basico" />
                    </center></td>
                    <td colspan="2"><center>
                      <input name="excell" id="excell" type="radio" value="intermedio" />
                    </center></td>
                    <td><center>
                      <input name="excell" id="excell" type="radio" value="avanzado" />
                    </center></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_point; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="2"><center>
                      <input name="power_point" id="power_point" type="radio" value="basico" />
                    </center></td>
                    <td colspan="2"><center>
                      <input name="power_point" id="power_point" type="radio" value="intermedio" />
                    </center></td>
                    <td><center>
                      <input name="power_point" type="radio" id="power_point" value="avanzado" />
                    </center></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_spss; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="2"><center>
                      <input name="spss" id="spss" type="radio" value="basico" />
                    </center></td>
                    <td colspan="2"><center>
                      <input name="spss" id="spss" type="radio" value="intermedio" />
                    </center></td>
                    <td><center>
                      <input name="spss" id="spss" type="radio" value="avanzado" />
                    </center></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_ingles; ?></a></td>
                    <td rowspan="2">&nbsp;</td>
                    <td colspan="2"><center>
                      <input name="ingles" id="ingles" type="radio" value="basico" />
                    </center></td>
                    <td colspan="2"><center>
                      <input name="ingles" id="ingles" type="radio" value="intermedio" />
                    </center></td>
                    <td><center>
                      <input name="ingles" id="ingles" type="radio" value="avanzado" />
                    </center></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $otro_idi; ?></a></td>
                    <td colspan="2"><center>
                      <input name="otro_idi" id="otro_idi" type="radio" value="basico" />
                    </center></td>
                    <td colspan="2"><center>
                      <input name="otro_idi" id="otro_idi" type="radio" value="intermedio" />
                    </center></td>
                    <td><center>
                      <input name="otro_idi" id="otro_idi" type="radio" value="avanzado" />
                    </center></td>
                  </tr>
                  <tr>
                    <td colspan="5" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2" bgcolor="#f0f0f0" class="etiquetas-contactenos"></td>
                    <td bgcolor="#f0f0f0">&nbsp;</td>
                    <td colspan="5" class="encabezado-nosotros" bgcolor="#f0f0f0"><a><?php echo $trab_area_a_laborar; ?></a> </td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_a_1; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="checkbox" name="area_en_la_que_le_gustaria_trabajar_1" value="administracion" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_a_2; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="checkbox" name="area_en_la_que_le_gustaria_trabajar_2" value="integracion" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_a_3; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="checkbox" name="area_en_la_que_le_gustaria_trabajar_3" value="procesamiento" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_a_4; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="checkbox" name="area_en_la_que_le_gustaria_trabajar_4" value="campo" /></td>
                  </tr>
                  <tr>
                    <td colspan="5" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2" bgcolor="#f0f0f0" class="etiquetas-contactenos"></td>
                    <td bgcolor="#f0f0f0">&nbsp;</td>
                    <td colspan="5" class="encabezado-nosotros" bgcolor="#f0f0f0"><a><?php echo $trab_cargo_a_lab; ?></a> </td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_c_1; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="checkbox" name="cargo_al_que_le_gustaria_postular_1" value="encuestador" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_c_2; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="checkbox" name="cargo_al_que_le_gustaria_postular_2" value="reclutador" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_c_3; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="checkbox" name="cargo_al_que_le_gustaria_postular_3" value="entrevistador" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_c_4; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="checkbox" name="cargo_al_que_le_gustaria_postular_4" value="operador_telefonico" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_c_5; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="checkbox" name="cargo_al_que_le_gustaria_postular_5" value="practicante" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_c_6; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="checkbox" name="cargo_al_que_le_gustaria_postular_6" value="asistente" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_c_7; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="checkbox" name="cargo_al_que_le_gustaria_postular_7" value="analista" /></td>
                  </tr>
                  <tr>
                    <td colspan="5" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2" bgcolor="#f0f0f0" class="etiquetas-contactenos"></td>
                    <td bgcolor="#f0f0f0">&nbsp;</td>
                    <td colspan="5" class="encabezado-nosotros" bgcolor="#f0f0f0"><a><?php echo $trab_exp_lab; ?></a> </td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a>1.&nbsp;<?php echo $trab_exp_emp; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="empresa_1" id="empresa_1" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a>&nbsp;&nbsp;&nbsp;<?php echo $trab_exp_car; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="cargo_1" id="cargo_1" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a>2.&nbsp;<?php echo $trab_exp_emp; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="empresa_2" id="empresa_2" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a>&nbsp;&nbsp;&nbsp;<?php echo $trab_exp_car; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="cargo_2" id="cargo_2" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a>3.&nbsp;<?php echo $trab_exp_emp; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="empresa_3"  id="empresa_3"style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a>&nbsp;&nbsp;&nbsp;<?php echo $trab_exp_car; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><input type="text" name="cargo_3"  id="cargo_3" style="width:450px" /></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a>&nbsp;&nbsp;&nbsp;<?php echo $trab_ant; ?></a></td>
                    <td>&nbsp;</td>
                    <td width="117" class="etiquetas-contactenos"><center>
                      <input name="ha trabajado anteriormente en una empresa de investigacion" id="ha trabajado anteriormente en una empresa de investigacion" type="radio" value="si" />
                    </center></td>
                    <td width="33" class="etiquetas-contactenos"><a><?php echo $trab_ant_si; ?></a></td>
                    <td width="74" class="etiquetas-contactenos"><center>
                      <input name="ha trabajado anteriormente en una empresa de investigacion" id="ha trabajado anteriormente en una empresa de investigacion" type="radio" value="no" />
                    </center></td>
                    <td width="56" class="etiquetas-contactenos"><a><?php echo $trab_ant_no; ?></a></td>
                  </tr>
                  <tr>
                    <td class="etiquetas-contactenos">&nbsp;</td>
                    <td class="etiquetas-contactenos"><a><?php echo $trab_mensaje; ?></a></td>
                    <td>&nbsp;</td>
                    <td colspan="5"><textarea name="mensaje" id="mensaje" style="width:450px; height:100px"></textarea></td>
                  </tr>
                  <tr>
                    <td colspan="8"><center>
                      <input type="submit" name="Submit" value="<?php echo $dat_boton_enviar; ?>" />
                    </center></td>
                  </tr>
                  <tr>
                    <td colspan="8" class="volver"><a href="portada.php"><?php echo $volver; ?>&nbsp;&nbsp;</a></td>
                  </tr>
                </table>
            </form></td>
          </tr>
        </table>
      <!-- fin de la tabla -->
    </td>
  </tr>
</table>
<blockquote>&nbsp;</blockquote>
</body>
</html>