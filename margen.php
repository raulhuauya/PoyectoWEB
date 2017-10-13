<?php
include('./include/idioma.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MARGEN DE ERROR</title>
</head>
<script language=JavaScript> 
<!--
 
//Please cite as 
//Shanti R Rao and Potluri M Rao, "Sample Size Calculator", 
//Raosoft Inc., 2009, http://www.raosoft.com/samplesize.html
 
//You can derive these formulas from first principles. The 
//ProbCriticalNormal function is adapted from an algorithm published
//in Numerical Recipes in Fortran.
 
function ProbCriticalNormal(P)
{
//      input p is confidence level convert it to
//      cumulative probability before computing critical
 
	var   Y, Pr,	Real1, Real2, HOLD;
	var  I;
	var PN = [0,    // ARRAY[1..5] OF REAL
			-0.322232431088  ,
			 -1.0             ,
			 -0.342242088547  ,
			 -0.0204231210245 ,
			 -0.453642210148E-4 ];
 
	var QN = [0,   //  ARRAY[1..5] OF REAL
			0.0993484626060 ,
			 0.588581570495  ,
			 0.531103462366  ,
			 0.103537752850  ,
			 0.38560700634E-2 ];
 
	 Pr = 0.5 - P/2; // one side significance
 
 
  if ( Pr <=1.0E-8) HOLD = 6;
	else {
			if (Pr == 0.5) HOLD = 0;
			else{
					Y = Math.sqrt ( Math.log( 1.0 / (Pr * Pr) ) );
					Real1 = PN[5];  Real2 = QN[5];
 
					for ( I=4; I >= 1; I--)
					{
					  Real1 = Real1 * Y + PN[I];
					  Real2 = Real2 * Y + QN[I];
					}
 
					HOLD = Y + Real1/Real2;
			} // end of else pr = 0.5
		} // end of else Pr <= 1.0E-8
 
  return HOLD;
}  // end of CriticalNormal
 
function SampleSize(margin,  confidence,  response,  population)
{
     pcn = ProbCriticalNormal(confidence / 100.0);
     d1 = pcn * pcn * response * (100.0 - response);
     d2 = (population - 1.0) * (margin * margin) + d1;
    if (d2 > 0.0)
     return Math.ceil(population * d1 / d2);
    return 0.0;
}
 
function MarginOfError( sample,  confidence,  response,  population)
{
     var pcn = ProbCriticalNormal(confidence / 100.0);
     d1 = pcn * pcn * response * (100.0 - response);
     d2 = d1 * (population - sample) / (sample * (population - 1.0))
    if (d2 > 0.0)
     return Math.sqrt(d2);
    return 0.0;
}
 
function DoCalculate()
{
	var ss = SampleSize(Number(document.ss.margin.value),
		    Number(document.ss.confidence.value), 
		    Number(document.ss.response.value), 
		    Number(document.ss.population.value));
	document.getElementById('sample').innerHTML=('<b>'+Math.ceil(ss).toString()+'</b');
	
	ss = SampleSize(Number(document.ss.margin.value),
		    Number(document.ss.confidence1.value), 
		    Number(document.ss.response.value), 
		    Number(document.ss.population.value));
	document.getElementById('sample4').innerHTML=('<b>'+Math.ceil(ss).toString()+'</b');
	
	ss = SampleSize(Number(document.ss.margin.value),
		    Number(document.ss.confidence2.value), 
		    Number(document.ss.response.value), 
		    Number(document.ss.population.value));

	document.getElementById('sample5').innerHTML=('<b>'+Math.ceil(ss).toString()+'</b');
	
	ss = SampleSize(Number(document.ss.margin.value),
		    Number(document.ss.confidence3.value), 
		    Number(document.ss.response.value), 
		    Number(document.ss.population.value));
	document.getElementById('sample6').innerHTML=('<b>'+Math.ceil(ss).toString()+'</b');
 
	var m = MarginOfError(Number(document.ss.sample1.value),
		    Number(document.ss.confidence.value), 
		    Number(document.ss.response.value), 
		    Number(document.ss.population.value));
	document.getElementById('margin1').innerHTML=('<b>'+m.toFixed(2).toString()+'%</b');
		    
	m = MarginOfError(Number(document.ss.sample2.value),
		    Number(document.ss.confidence.value), 
		    Number(document.ss.response.value), 
		    Number(document.ss.population.value));
	document.getElementById('margin2').innerHTML=('<b>'+m.toFixed(2).toString()+'%</b');
		    
	m = MarginOfError(Number(document.ss.sample3.value),
		    Number(document.ss.confidence.value), 
		    Number(document.ss.response.value), 
		    Number(document.ss.population.value));
	document.getElementById('margin3').innerHTML=('<b>'+m.toFixed(2).toString()+'%</b');
 
	return true;
}
-->
</script>
  <script type="text/javascript">
function calculate(){
	var n=parseFloat(document.getElementById("n").value);
	var p=parseFloat(document.getElementById("p").value);
	var N=parseFloat(document.getElementById("N").value);
	document.getElementById("res_area").style.visibility="visible";
	var m;
	if(p>1||p<0){
		alert("P debe ser menor que 1 y mayor que 0");
	}
	if (N=="") {
		m=Math.round(196000*Math.sqrt(p*(1-p)/n))/1000;
		document.getElementById("res1").innerHTML="Margen de error";
	}
	else {
		m=Math.round(196000*Math.sqrt((N-n)/(N-1))*Math.sqrt(p*(1-p)/n))/1000;
		document.getElementById("res1").innerHTML="Margen de error";
	}
	document.getElementById("result1").value=m;
}
</script>
<body bgcolor="#2c6eb5">
<!-- hojas de estilo CSS -->
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<table width="732" height="760px" align="center" bgcolor="#ffffff" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="732">
	<!--incio tabla del cuerpo -->
	<table width="732" height="760" cellpadding="0" cellspacing="0">
	<tr>
	<td width="4" height="40" bgcolor="#2c6eb5"></td>
	<td width="722" height="40"class="encabezado2-nosotros" bgcolor="#2c6eb5"><a></a></td>
	<td width="10" height="40" bgcolor="#2c6eb5"></td>
	</tr>
  	<tr>
    	<td width="4" bgcolor="#2c6eb5">&nbsp;</td>
    	<td width="722" height="680">
		<!-- area de los cuadros de margen de error -->
		<table width="722" height="680" background="img/fondo_pag.jpg">
		  <tr>
		    <td width="21" class="encabezado-nosotros">&nbsp;</td>
			<td height="40" width="670" class="encabezado-nosotros"><a><?php echo $calculadora_muestra; ?></a></td>
		    <td width="15" class="encabezado-nosotros">&nbsp;</td>
		  </tr>
		  <tr>
		    <td width="21" class="contenido-nosotros">&nbsp;</td>
			<td height="100" class="contenido-nosotros"><a><?php echo $intro_2; ?></a></td>
		    <td height="100" class="contenido-nosotros">&nbsp;</td>
		  </tr>
		  <tr>
		    <td width="21" class="contenido-nosotros">&nbsp;</td>
			<td height="200" class="contenido-nosotros">
			<!-- formulario1 -->

  
  
  
  			<form name="ss">
			  <table summary="" alt="" border="0" cellspacing="0"  align="center">
				<thead>
				  </thead>
				<tbody>
				  <tr>
					<td bgcolor="#f0f0f0" class="contenido-nosotros" >
						<a><?php echo $calculadora_7; ?></a><br>					            </td>
					<td align="left" bgcolor="#f0f0f0">
						<input id="margin" style="width:50;" tabindex="1" accesskey="M" name="margin" value="5" onChange="DoCalculate()" onKeyUp="DoCalculate() ;return true;";>
					  %</td>
				  </tr>
				  <tr>
					<td bgcolor="#f0f0f0" class="contenido-nosotros">
						<a><?php echo $calculadora_8; ?></a>					        </td>
					<td align="left" bgcolor="#f0f0f0">
						<input id="confidence" name="confidence" tabindex="2" accesskey="C"  value="95" onChange="DoCalculate()" onKeyUp="DoCalculate(); return true;">
					  %</td>
				  </tr>
				  <tr>
					<td bgcolor="#f0f0f0" class="contenido-nosotros">
						<a><?php echo $calculadora_9; ?></a>					           </td>
					<td align="left" bgcolor="#f0f0f0">
						<input id="population"  tabindex="3" name="population" value="20000" accesskey="P" onChange="DoCalculate()" onKeyUp="DoCalculate(); return true;">					</td>
				  </tr>
				  <tr>
					<td  bgcolor="#f0f0f0">
						<a><?php echo $calculadora_10; ?></a>					           </td>
					<td bgcolor="#f0f0f0">
						<input id="response" tabindex="4" name="response" accesskey="R" value="50" onChange="DoCalculate()" onKeyUp="DoCalculate(); return true;">
					  %</td>
				  </tr>
				  <tr>
					<td bgcolor="#f0f0f0" ><a><?php echo $calculadora_11; ?></a> </td>
					<td bgcolor="#f0f0f0"><div align="center" id="sample" onClick="DoCalculate()">
						<b>377</b>        </div>						</td>
				  </tr>
				</tbody>
			  </table>
			</form> 
			
			<!-- fin del formulario 1--></td>
		    <td height="200" class="contenido-nosotros">&nbsp;</td>
		  </tr>
		  <tr>
		    <td width="21" class="encabezado-nosotros">&nbsp;</td>
			<td height="40" class="encabezado-nosotros"><a></a> <a><?php echo $calculadora_margen; ?></a></td>
		    <td height="40" class="encabezado-nosotros">&nbsp;</td>
		  </tr>
		  <tr>
		    <td class="contenido-nosotros">&nbsp;</td>
			<td class="contenido-nosotros">
<a></a>			<a><?php echo $intro_1; ?></a></td>
		    <td class="contenido-nosotros">&nbsp;</td>
		  </tr>
		  <tr>
		    <td class="contenido-nosotros">&nbsp;</td>
			<td class="contenido-nosotros">
			<!-- 2do formulario-->
			  <table align="center" bgcolor="#f0f0f0">
    <tr>
      <td width="395"><div id="input">
        <table width="98%" style="margin:0px; width:100%">
          <tr>
            <td colspan="2" align="center" valign="top" id="title"><a><?php echo $calculadora_1; ?></a></h2></td>
          </tr>
          <tr>
            <td width="56%"><a>
              <label><?php echo $calculadora_2; ?></label></a></td>
            <td width="39%"><input name="text" type="text" id="n" />
                  <label id="unit"></label></td>
          </tr>
          <tr>
            <td><a>
            <label><?php echo $calculadora_3; ?></label>
            </a></td>
            <td><input name="text2" type="text" id="p" />
                  <label id="unit"></label></td>
          </tr>
          <tr>
            <td><a><label><?php echo $calculadora_4; ?></label></a></td>
            <td><input name="text2" type="text" id="N" />
                  <label id="unit"></label></td>
          </tr>
          <tr>
            <td align="center"></td>
            <td><input name="button" type="button" id="button" onclick="calculate()" value="<?php echo $boton_calculadora_1; ?>" /></td>
            <td width="5%"></td>
          </tr>
        </table>
      </div></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><div id="res_area"  style="visibility:visible;">
        <table width="395">
          <tr>
            <td colspan="2"><font id="res"><a><?php echo $calculadora_5; ?></a></font></td>
          </tr>
          <tr>
            <td width="186"><a>
              <label id="res1"><?php echo $calculadora_6; ?></label></a></td>
            <td width="197" align="right"><input name="text22" type="text" class="result" id="result1" size="3" />
              <label id="unit">%</label></td>
          </tr>
        </table>
      </div></td>
    </tr>
  </table>
			<!-- fin del segundo formulario --></td>
		    <td class="contenido-nosotros">&nbsp;</td>
		  </tr>
		</table>

		<!-- fin area de los cuadros de margen de error -->
		</td>
    	<td width="10" bgcolor="#2c6eb5">&nbsp;</td>
  	</tr>
  	<tr>
    	<td width="4" height="40" bgcolor="#2c6eb5">&nbsp;</td>
    	<td width="722" height="40" class="volver" background="img/fondo_pag.jpg"><a href="portada.php"><?php echo $volver; ?>&nbsp;&nbsp;&nbsp;</a>		</td>
    	<td width="10" height="40" bgcolor="#2c6eb5">&nbsp;</td>
  	</tr>
	</table>
	<!-- fin de la tabla -->
	</td>
  </tr>
</table>
</body>
</html>
