
<?php
include('concosise.php');
include('./include/idioma.php');
?>
<?php
$queEmp = "SELECT * FROM links ORDER BY COD_LN DESC";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
?>
<?php
$quenews = "SELECT * FROM news";
$resnews = mysql_query($quenews, $conexion) or die(mysql_error());
$totnews = mysql_num_rows($resnews);
?>
<?php
$queop = "select * from customers_opinion where PRIORITY='2'";
$resop = mysql_query($queop, $conexion) or die(mysql_error());
$totop = mysql_num_rows($resop);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>COSISERED</title>
<!-- este javascript imprime los tres valores de la página  -->
<script language="javascript" >
function reloader( pag,mar,idi)
{
	document.FRMI.pagina.value=pag; <!--pagina web -->
	document.FRMI.marcador.value=mar; <!--seccion de la pagina web, si tiene ,marcadores -->
	document.FRMI.idioma.value=idi; <!--seccion de idioma -->
	document.FRMI.submit();
}
</script>

<!-- fin este javascript imprime los tres valores de la página -->

<!-- cambio de color en la calculadora -->

</head>

<body background="img/fondo.png">
<!-- este formulario se usa para cambiar de paginas con sus tres valores /pagina/seccion/idioma/ -->
<form  name="FRMI" method="get" action="index.php">
	<!-- si no recibe ningun parametro, por defecto es value=0-->
	<?php
		if(count($_GET)==0) 
		{
	?>			
	 <input type="hidden" name="pagina" value="portada.php"/> <!-- la pagina por defecto es portada-->
	 <input type="hidden" name="marcador" value="0"> <!-- portada no lleva ninguna seccion -->
	 <input type="hidden" name="idioma" value="1">  <!-- por defecto español-->
	<?php
		}else {
	?>	
	 <input type="hidden" name="pagina" value="<?php echo $_GET['pagina']; ?>"><!-- recibir valor de la pagina a la que deseo ir-->
	 <input type="hidden" name="marcador" value="<?php echo $_GET['marcador']; ?>"> <!-- recibir la seccion de la pagina a la cual quiero ir-->
	 <input type="hidden" name="idioma" value="<?php echo $_GET['idioma']; ?>"><!--  recibir el idioma de la pagina-->
	 <?php
	  }
	 ?>	 
</form>

<!-- fin de este formulario se usa para cambiar de paginas con sus tres valores /pagina/seccion/idioma/ -->
<!-- hojas de estilo CSS -->
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<!-- tabla que contiene a toda la pagian web -->
<table width="1200px" height="1000px" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1200px" height="1000px"><!-- tabla que contiene divicioes principales de la pagina -->
        <table width="1200px" height="1000px" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="3" width="1200px" height="140px">
			<!-- cabecera web-->
			<!-- fin de la cabecera -->
			<table border="0" cellpadding="0" cellspacing="0" width="1200">
              <!-- fwtable fwsrc="cabecera1.png" fwbase="cabecera1.png" fwstyle="Dreamweaver" fwdocid = "698903960" fwnested="0" -->
              <tr>
                <td><img src="img/spacer.gif" width="1008" height="1" border="0" alt="" /></td>
                <td><img src="img/spacer.gif" width="59" height="1" border="0" alt="" /></td>
                <td><img src="img/spacer.gif" width="57" height="1" border="0" alt="" /></td>
                <td><img src="img/spacer.gif" width="36" height="1" border="0" alt="" /></td>
                <td><img src="img/spacer.gif" width="33" height="1" border="0" alt="" /></td>
                <td><img src="img/spacer.gif" width="7" height="1" border="0" alt="" /></td>
                <td><img src="img/spacer.gif" width="1" height="1" border="0" alt="" /></td>
              </tr>
              <tr>
                <td colspan="3"><img name="cabecera1_r1_c1" src="img/cabecera1_r1_c1.png" width="1124" height="9" border="0" id="cabecera1_r1_c1" alt="" /></td>
                <td rowspan="3"><a id="text1" title="@cosisered"><img name="cabecera1_r1_c4" src="img/cabecera1_r1_c4.png" width="36" height="35" border="0" id="cabecera1_r1_c4" alt="" /></a></td>
				<script type="text/javascript">
				document.getElementById(text1).title="New tooltip";
				</script>
                <td rowspan="3"><a href="http://www.facebook.com/cosisered" target="_blank" ><img name="cabecera1_r1_c5" src="img/cabecera1_r1_c5.png" width="33" height="35" border="0" id="cabecera1_r1_c5" alt="" /></a></td>
                <td rowspan="4"><img name="cabecera1_r1_c6" src="img/cabecera1_r1_c6.png" width="7" height="137" border="0" id="cabecera1_r1_c6" alt="" /></td>
                <td><img src="img/spacer.gif" width="1" height="9" border="0" alt="" /></td>
              </tr>
              <tr>
                <td rowspan="3"><img name="cabecera1_r2_c1" src="img/cabecera1_r2_c1.png" width="1008" height="128" border="0" id="cabecera1_r2_c1" alt="" /></td>
                <td><img name="cabecera1_r2_c2" src="img/cabecera1_r2_c2.png" width="59" height="16" border="0" id="cabecera1_r2_c2" alt="" onclick="javascript:reloader('<?php echo $url2;?>','','1' );"/></td>
                <td><img name="cabecera1_r2_c3" src="img/cabecera1_r2_c3.png" width="57" height="16" border="0" id="cabecera1_r2_c3" alt="" onclick="javascript:reloader('<?php echo $url2;?>','','0' );"  /></td>
                <td><img src="img/spacer.gif" width="1" height="16" border="0" alt="" /></td>
              </tr>
              <tr>
                <td rowspan="2" colspan="2"><img name="cabecera1_r3_c2" src="img/cabecera1_r3_c2.png" width="116" height="112" border="0" id="cabecera1_r3_c2" alt="" /></td>
                <td><img src="img/spacer.gif" width="1" height="10" border="0" alt="" /></td>
              </tr>
              <tr>
                <td colspan="2"><img name="cabecera1_r4_c4" src="img/cabecera1_r4_c4.png" width="69" height="102" border="0" id="cabecera1_r4_c4" alt="" /></td>
                <td><img src="img/spacer.gif" width="1" height="102" border="0" alt="" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan="3" width="1200px" height="40px"><!-- tabla del menu horizontal -->
                <table width="1200px" height="40px" cellpadding="0" cellspacing="0" align="center" background="img/menu-fondo.png">
                  <tr>
                    <td width="150px">&nbsp;</td>
                    <td class="encabezado"><a href="javascript:reloader('portada.php','','<?php echo $idioma; ?>');"><?php echo $inicio; ?></a></td>
                    <td class="encabezado"><a href="javascript:reloader('nosotros.php','','<?php echo $idioma; ?>');"><?php echo $nosotros; ?></a></td>
					<td class="encabezado"><a href="javascript:reloader('interes.php','','<?php echo $idioma; ?>');"><?php echo $areas_interes; ?></a></td>
                    <td class="encabezado"><a href="javascript:reloader('servicios.php','','<?php echo $idioma; ?>');"><?php echo $servicios; ?></a></td>
                    <td class="encabezado"><a href="javascript:reloader('clientes.php','','<?php echo $idioma; ?>');"><?php echo $clientes; ?></a></td>                    
                    <td class="encabezado"><a href="javascript:reloader('contactenos.php','','<?php echo $idioma; ?>');"><?php echo $contactenos; ?></a></td>
                    <td class="encabezado"><a href="javascript:reloader('trabaje.php','','<?php echo $idioma; ?>');"><?php echo $trabaje_con_nosotros; ?></a> </td>
					<td class="encabezado"><a href="javascript:reloader('mapa.php','','<?php echo $idioma; ?>');"><?php echo $mapa; ?></a> </td>
                    <td width="150px">&nbsp;</td>
                  </tr>
                </table>

              <!-- fin de la tabla del menu horizontal -->
            </td>
          </tr>
          <tr>
            <td width="205px" height="760px">
			<!-- tabla de la izquierda -->
                <table width="205px" height="760px" align="center" cellpadding="0" cellspacing="0" border="1px" bordercolor="#ffffff">
                  <tr>
                    <td width="205px" height="35px" bgcolor="#2c6eb5" class="encabezado-columnas"><a><?php echo $ultimas_noticias; ?></a></td>
                  </tr>
                  <tr>
                    <td width="205px" height="140px" bgcolor="#ffffff">
					<!-- tabla que contiene las noticias -->
			
					<div id="div-news">
					<?php 
					if($idioma==1)
					{					
								$consulta="select max(cast(right(COD_N,6) as unsigned)) mayor from news";
								$resul=mysql_query($consulta);			
								$registro=mysql_fetch_assoc($resul);								
								$ultimo_reg=$registro['mayor'];							
																							
									for($valor_for=$ultimo_reg-2;$valor_for<=$ultimo_reg;$valor_for++)
									{				 
										 $query_lista="select * from news where cast(right(COD_N,6) as unsigned) ='".$valor_for."'";
										 $resul_lista=mysql_query($query_lista);
										 $registro_select=mysql_fetch_assoc($resul_lista);						 			
										 //imprimo 	
										 echo
										 "
										 	
										 <table width='195' height='40' cellpadding='0' cellspacing='0' class='tabla'>
											<tr class='modo1'>
											<td width='205' height='40'><a href=javascript:reloader('noticias.php','".$registro_select['COD_N'].
													"','1');>".$registro_select['TITLE']."</a>

											</td>											
											</tr>
											</table>									
															 
										 
										 ";		  
									};
					  };
					  if($idioma==0)
					  {
								$consulta="select max(cast(right(COD_N,6) as unsigned)) mayor from news";
								$resul=mysql_query($consulta);			
								$registro=mysql_fetch_assoc($resul);								
								$ultimo_reg=$registro['mayor'];							
																							
									for($valor_for=$ultimo_reg-2;$valor_for<=$ultimo_reg;$valor_for++)
									{				 
										 $query_lista="select * from news where cast(right(COD_N,6) as unsigned) ='".$valor_for."'";
										 $resul_lista=mysql_query($query_lista);
										 $registro_select=mysql_fetch_assoc($resul_lista);						 			
										 //imprimo 	
										 echo
										 "
										 	
										 <table width='195' height='40' cellpadding='0' cellspacing='0' class='tabla'>
											<tr class='modo1'>
											<td width='205' height='40'><a href=javascript:reloader('noticias.php','".$registro_select['COD_N'].
													"','0');>".$registro_select['TITLE_EN']."</a>

											</td>											
											</tr>
											</table>									
															 
										 
										 ";		  
									};
					  
					  };
							
					?>

					</div>	
	
					<!-- fin de la tabla de noticias -->
					</td>
                  </tr>
                  <tr>
                    <td width="205px" height="35px" bgcolor="#2c6eb5" class="encabezado-columnas"><a href="javascript:reloader('proyectos_todos.php','','<?php echo $idioma; ?>');"><?php echo $proyectos; ?></a></td>
                  </tr>
                  <tr>
                    <td width="205px" height="260px" bgcolor="#ffffff">
					<!-- tabla de los proyectos -->
                    <div id="div-areas">
					<?php
								$consulta="select max(cast(right(COD_AR,6) as unsigned)) mayor from areas";
								$resul=mysql_query($consulta);			
								$registro=mysql_fetch_assoc($resul);								
								$ultimo_reg=$registro['mayor'];							
																							
									for($valor_for=1;$valor_for<=$ultimo_reg;$valor_for++)
									{				 
										 $query_lista="select * from areas where cast(right(COD_AR,6) as unsigned) ='".$valor_for."'";
										 $resul_lista=mysql_query($query_lista);
										 $registro_select=mysql_fetch_assoc($resul_lista);						 			
										 //imprimo 
										 if ($registro_select['COD_AR']<>"")
										 {
										 	if($idioma==1)
											{
												 echo
												 "
													
													<table width='195' height='25' cellpadding='0' cellspacing='0' class='tabla'>
													<tr class='modo1'>
													<td width='205' height='25'><a href=javascript:reloader('proyectos.php','".$registro_select['COD_AR'].
															"','1');>".$registro_select['TITLE']."</a>
		
													</td>											
													</tr>
													</table>								
															 
												 ";
										 	};
										 	if($idioma==0)
											{
												 echo
												 "
													
													<table width='195' height='25' cellpadding='0' cellspacing='0' class='tabla'>
													<tr class='modo1'>
													<td width='205' height='25'><a href=javascript:reloader('proyectos.php','".$registro_select['COD_AR'].
															"','0');>".$registro_select['TITLE_EN']."</a>
		
													</td>											
													</tr>
													</table>								
															 
												 ";
										 	};

											
										 };
									};
							
					?>

					</div>
					

					<!-- fin tabla de los proyectos -->
                    </td>
                  </tr>
                  <tr>
                    <td width="205px" height="35px" bgcolor="#2c6eb5" class="encabezado-columnas"><a><?php echo $opinan_nuestros_clientes; ?></a></td>
                  </tr>
                  <tr>
                    <td width="205px" height="140px" bgcolor="#ffffff">
					<!-- tabla que contiene la opinion de nuestros clientes -->
					<div id="div-news">
					<?php
					if($idioma==1)
					{																
								

			
								if ($totop> 0) {
									while ($rowop = mysql_fetch_assoc($resop)) {														
							
									//imprimo 
										 if ($rowop['COD_CLI']<>"")	{	
										 echo
										 "
										 	
										 <table width='195' height='40' cellpadding='0' cellspacing='0' class='tabla'>
											<tr class='modo1'>
											<td width='205' height='40'><a href=javascript:reloader('opiniones.php','".$rowop['COD_CLI']."','1');>".$rowop['REPRESENTATIVE']." ".$rowop['empresa']."</a>

											</td>											
											</tr>
											</table>									
															 
										 
										 ";};
									}
								}
																
					 			
		  
									
					  };
					  if($idioma==0)
					  {
		
												

							if ($totop> 0) {
									while ($rowop = mysql_fetch_assoc($resop)) {														
							
									//imprimo 
										 if ($rowop['COD_CLI']<>"")	{	
										 echo
										 "
										 	
										 <table width='195' height='40' cellpadding='0' cellspacing='0' class='tabla'>
											<tr class='modo1'>
											<td width='205' height='40'><a href=javascript:reloader('opiniones.php','".$rowop['COD_CLI']."','0');>".$rowop['REPRESENTATIVE']." ".$rowop['empresa']."</a>

											</td>											
											</tr>
											</table>									
															 
										 
										 ";};
									}
								}
					  };
							
					?>

					</div>
					<!-- fin de la tabla opinion de nuestros clientes --></td>
                  </tr>
                  <tr>
                    <td width="205px" height="35px" bgcolor="#2c6eb5" class="encabezado-columnas"><a href="javascript:reloader('repro.php','','<?php echo $idioma; ?>');"><?php echo $videos; ?></a></td>
                  </tr>
                  <tr>
                    <td width="205px" height="35px" bgcolor="#2c6eb5" class="encabezado-columnas"> <a href="javascript:reloader('albunes.php','','<?php echo $idioma; ?>');"><?php echo $galeria_fotos; ?></a></td>
                  </tr>
                  <tr>
                    <td width="205px" height="35px" bgcolor="#2c6eb5" class="encabezado-columnas"><a href="#">&nbsp;</a></td>
                  </tr>
                </table>
              <!-- fin tabla de la izquierda -->
            </td>
            <td width="780px" height="760px" bgcolor="#2c6eb5">
			<!-- tabla que contiene al iframe -->
			<table width="780px" height="760px"  align="top" cellpadding="0" cellspacing="0" bgcolor="#2c6eb5"> 
 				 <tr>
    				<td width="780px" height="760px"><?php					
 
						if (count($_GET)>0)
						{$url=$_GET['pagina']."?id=".$_GET['marcador']."&idioma=".$_GET['idioma'];
						}
						else
						{
						$url="portada.php#";
						}
						?>
   				    <iframe src="<?php echo $url; ?>" width="780px" height="760px" marginheight="0" marginwidth="0" frameborder="0" bgcolor="#2c6eb5"></iframe></td>
  				</tr>
			</table>
	
			<!-- fin de la tabla que contiene al iframe -->
			</td>
            <td width="205px" height="760px"><!--tabla de la derecha -->
                <table width="205px" height="760px" align="center" cellpadding="0" cellspacing="0" border="1px" bordercolor="#ffffff">
                  <tr>
                    <td  width="205px" height="70px" bgcolor="#2c6eb5" class="encabezado-columnas-izq">
					
					<table width="205" height="70px" cellpadding="0" cellspacing="0"  border="0">
                      <tr>
                        <td width="75" align="right"><img src="img/celular.png" width="42" height="42" /></td>
                        <td width="130">
							<div><a href="javascript:reloader('margen.php','','<?php echo $idioma; ?>');"><?php echo $margen_error; ?></a></div>				
					        <div><a href="javascript:reloader('margen.php','','<?php echo $idioma; ?>');"><?php echo $margen_error_1; ?></a></div>
						</td>
                      </tr>
                    </table>
					
					</td>
                  </tr>
				  <tr>
                    <td  width="205px" height="35px" bgcolor="#2c6eb5" class="encabezado-columnas"><a><?php echo $central_telefonica; ?></a></td>
                  </tr>
                  <tr>
                    <td  width="205px" height="50px" bgcolor="#ffffff">
						<table width="205" height="50px" cellpadding="0" cellspacing="0"  border="0">
						  <tr>
							<td width="75" align="right"><img src="img/telefono.png" width="45" height="45" /></td>
							<td width="130"><div class="contenidotablaslaterales-telefono"><a>(511) 224-4758</a></div>	</td>
						  </tr>
						</table>

					</td>
                  </tr>
                  <tr>
                    <td  width="205px" height="35px" bgcolor="#2c6eb5" class="encabezado-columnas"><a><?php echo $correo; ?></a></td>
                  </tr>
                  <tr>
                  <td  width="205px" height="70px" bgcolor="#ffffff">
				  <table width="205" height="70" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td colspan="2" height="10"><div class="contenidotablaslaterales"><a><?php echo $correo_1; ?></a></div>
					</td>
					</tr>
				  <tr>
					<td height="50" align="right" width="75"><img src="img/mail.png" width="45" height="45" /></td>
					<td height="50"><div class="contenidotablaslaterales-telefono"><a href="mailto:info@cosisered.com">info@cosisered.com</a></div>	</td>
				  </tr>
				</table>

				  
 				  </td>
                  </tr>
                  <tr>
                    <td  width="205px" height="35px" bgcolor="#2c6eb5" class="encabezado-columnas"><a><?php echo $enlaces; ?></a></td>
                  </tr>
                  <tr>
                    <td  width="205px" height="450px" bgcolor="#f0f0f0">
					<!-- LINKS DE INTERES CONSULTA A BASE DE DATOS-->
					<div id="div-link">
					<?php 
					if ($totEmp> 0) {
						while ($rowEmp = mysql_fetch_assoc($resEmp)) {
						echo					
							"
							<table width='200' height='140' cellpadding='0' cellspacing='0'>
							  <tr>
								<td width='200' height='100'><center><a href=".$rowEmp['LINK']." target='_black'><img  height='80' width='80'  src=".'img/LINK/'.$rowEmp['PICTURE']."></a></td>
							  </tr>
							  <tr>
								<td width='200' height='40' class='contenidotablaslaterales'><a href=".$rowEmp['LINK']." target='_black'>".$rowEmp['DESCRIPTION']."</a></td>
							  </tr>
							</table>
							";					

						}
					}
					?>
					</div>

					<!-- FIN DE LINKS DE INTERES-->
					</td>
                  </tr>
                </table>
              <!-- fin tabla de la derecha -->
            </td>
          </tr>
          <tr>
            <td colspan="3" width="1200px" height="60px">
			<!-- tabla del pie de pagina -->
			<table width="1200px" height="60px" cellpadding="0" cellspacing="0" align="center" background="img/pie.png" >
 			 <tr>
    			<td colspan="5" height="5px" bgcolor="#000000">&nbsp;</td>
   			  </tr>
  			<tr>
    			<td  width="142" height="5px" class="piepagina1"><a></a></td>
   			    <td  width="231" class="piepagina1"><a>COSISERED</a></td>
   			    <td  width="266" height="5px" class="piepagina1">&nbsp;</td>
   			    <td  width="310" height="5px" class="piepagina1">&nbsp;</td>
   			    <td  width="249" height="5px" class="piepagina1">&nbsp;</td>
  			</tr>
  			<tr>
    			<td  width="142" height="50px">				</td>
    			<td  width="231" height="50px">
				<div class="piepagina2"><a href="javascript:reloader('portada.php','','<?php echo $idioma; ?>');"><?php echo $central_telefonica; ?></a></div>
				<div class="piepagina3"><a> (511) 224-4758</a> </div>
				</td>
    			<td  width="266" height="50px">
				<div class="piepagina2"><a href="javascript:reloader('portada.php','','<?php echo $idioma; ?>');"><?php echo $correo; ?></a></div>
				<div class="piepagina3"><a>info@cosisered.com</a></div>				</td>
    			<td  width="310" height="50px">
				<div class="piepagina2"><a href="javascript:reloader('portada.php','','<?php echo $idioma; ?>');"><?php echo $direccion; ?></a></div>
				<div class="piepagina3"><a>Av. San Luis 2134, San Borja, Lima.</a></div>				</td>
    			<td  width="249" height="50px">
				<div class="piepagina2"><a href="javascript:reloader('portada.php','','<?php echo $idioma; ?>');"><?php echo $visitas; ?></a></div>
				<div class="piepagina3"><a> <?php include("contador.php"); ?><?php echo $personas; ?></a></div>				</td>
  			</tr>
			</table>
			<!-- fin tabla del pie de pagina -->
			</td>
          </tr>
        </table>
      <!-- fin tabla que contiene divicioes principales de la pagina -->
    </td>
  </tr>
</table>

<!-- fin tabla que contiene a toda la pagian web -->
</body>
</html>
