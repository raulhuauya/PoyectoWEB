<?php
include ('./include/terminar_sesion.php');
?>
<form method="post">
<table width="740">
  <tr>
    <td><input name="cerrarsesion" type="submit" value="Cerrar  sesion" /></td>
  </tr>
  <tr>
    <td><input name="salir" type="submit" value="Salir de sesion" /></td>
  </tr>
</table>
</form>
<?php

//include "include/xpts.php";
include "../include/xpts.php";
include "../include/vz.php";


$queEmp = "SELECT * FROM customers ORDER BY COD_CLI ASC;";

$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px;color: #FFFFFF;  }
.style5 {
	font-size: 10px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style7 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style9 {
	font-size: 9px;
	font-weight: bold;
}
.style13 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style16 {font-family: Arial, Helvetica, sans-serif; color: #666666; font-size: 12px;}
-->
</style>
<title>Lista de clientes</title></head>

<body bgcolor="#c0c0c0">
<div align="center">
  <table width="90%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="center" valign="top">
	 
	    <table width="1000" height="240" border="0" cellpadding="0" cellspacing="0" >
          <tr >
            <td height="58" colspan="5">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td bgcolor="#999999">&nbsp;</td>
                <td bgcolor="#999999">&nbsp;</td>
                <td bgcolor="#999999">&nbsp;</td>
                <td bgcolor="#999999">&nbsp;</td>
                <td bgcolor="#999999">&nbsp;</td>
                <td bgcolor="#999999">&nbsp;</td>
                <td bgcolor="#999999">&nbsp;</td>
                <td bgcolor="#999999"><a href="administrador.php">volver</a></td>
                <td bgcolor="#999999">&nbsp;</td>
              </tr>
              <tr>
                <td width="3%" bgcolor="#999999">&nbsp;</td>
                <td colspan="7" bgcolor="#999999">&nbsp;</td>
                <td width="1%" bgcolor="#999999">&nbsp;</td>
              </tr>
              <tr>
                <td bgcolor="#999999">&nbsp;</td>
                <td colspan="7" align="center" bgcolor="#999999"><span class="style13">CLIENTES DE COSISERED S.A.C </span></td>
                <td bgcolor="#999999">&nbsp;</td>
              </tr>
              <tr>
                <td bgcolor="#999999">&nbsp;</td>
                <td colspan="7" bgcolor="#999999" class="style16" align="center">En &eacute;sta p&aacute;gina usted podr&aacute; ver la lista de clientes y de igual forma crear nuevos clientes y modificar los ya existentes. </td>
                <td bgcolor="#999999">&nbsp;</td>
              </tr>
              <tr>
                <td bgcolor="#999999">&nbsp;</td>
                <td bgcolor="#999999" class="style16">&nbsp;</td>
                <td bgcolor="#999999" class="style16">&nbsp;</td>
                <td bgcolor="#999999" class="style16">&nbsp;</td>
                <td bgcolor="#999999" class="style16">&nbsp;</td>
                <td bgcolor="#999999" class="style16">&nbsp;</td>
                <td bgcolor="#999999" class="style16">&nbsp;</td>
                <td bgcolor="#999999" class="style16"></td>
                <td bgcolor="#999999">&nbsp;</td>
              </tr>
			  <tr>
                <td bgcolor="#999999">&nbsp;</td>
                <td width="34%" class="style16" bgcolor="#999999"><span class="style13">CREAR  NUEVO CLIENTE :</span></td>
                <td width="5%" class="style16" bgcolor="#999999">
                
                </td>
                <td width="6%" class="style16" bgcolor="#999999">

                </td>
                <td width="6%" class="style16" bgcolor="#999999"></td>
                
                <td width="17%" class="style16" bgcolor="#999999">&nbsp;</td>
                <td width="22%" class="style16" bgcolor="#999999">
                                             
                </td>
                <td width="6%" class="style16" bgcolor="#999999">				<form action="cls_nw.php" method="post" name="nuevo cliente">
				<input align="left" width="200px" type="submit" name="Nuevo" value="Nuevo" />
				</form></td>	
                <td bgcolor="#999999">&nbsp;</td>
              </tr>
			  <tr>
                <td bgcolor="#999999">&nbsp;</td>
                <form action="eliminar-customers.php" method="post" name="eliminar cliente">
                <td colspan="2" bgcolor="#999999" class="style16"><span class="style13">ELIMINAR CLIENTE :</span></td>
                <td colspan="4" bgcolor="#999999" class="style16">
                  <select name="lista"> 
                    <?php
                //consulto por el mayor de los valores de la columna COD_CLI y lo guardo en el nuevo campo temporal "num_mayor"						
                $con_mayor_valor="select max(cast(right(COD_CLI,6) as unsigned)) num_mayor from customers";
                $resul_mayor=mysql_query($con_mayor_valor);			
                $mayor=mysql_fetch_assoc($resul_mayor);
                //creo una lista de los valores que se asignan al select.			
                for($valor_for=1;$valor_for<=$mayor['num_mayor'];$valor_for++)
                    {				 
                         $query_lista="select * from customers where cast(right(COD_CLI,6) as unsigned) ='".$valor_for."'";
                         $resul_lista=mysql_query($query_lista);
                         $registro_select=mysql_fetch_assoc($resul_lista);						 			
                         //imprimo en el select los valores de COD_CLI  
						 if($registro_select['COD_CLI']<>""){	
                         echo "<option value='".$registro_select['COD_CLI']."'>".$registro_select['NOMBRE']."</option>";};		  
                    };			
                
                ?>
                    </select> 
                  
                  
                </td>
                <td class="style16" bgcolor="#999999">
                <input align="left" type="submit" name="Eliminar" value="Eliminar" />
                </td>
                </form>
                <td bgcolor="#999999">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr bgcolor="#f0f0f0" align="center">
            <td height="41" bordercolor="#000000">IMAGEN</td>
			<td bordercolor="#000000">COD.CLI</td>
			<td width="205" bordercolor="#000000" >VINCULO (ESPA&Ntilde;OL)</td>
            <td width="169" bgcolor="#f0f0f0" bordercolor="#000000">VINCULO  (INGLES)</td>
            <td bgcolor="#f0f0f0" bordercolor="#000000" >NOMBRE</td>
          </tr>
          
		  <?php 
		  	$color="0";
			$color_code="";//C4BCED#E4E0F5
			if ($totEmp> 0) {
				while ($rowEmp = mysql_fetch_assoc($resEmp)) {
				
				if ($color=="1")
				{	$color_code="FFFFFF";
					$color="0";
				}
				else
				{	$color_code="F0F0F0";
					$color="1";
				}
				//SELECT  
				//ID_C,COD_CLI,NOMBRE,IMAGE,IMAGE_PUBLISH,DESCRIPTION,DESCRIPTION_EN,PUBLISH, PUBLISH_EN 
				//FROM CUSTOMERS ORDER BY NOMBRE ASC;
				
				
			?>	
				
			<form id="<?php  echo $rowEmp['COD_CLI'] ;?>" name="<?php  echo $rowEmp['COD_CLI'] ;?>" method="post" action="cls_ed.php">
			<input type="hidden" name ="ID" value="<?php  echo $rowEmp['COD_CLI'] ;?>" />
				 <tr >
            <td width="80" rowspan="3" align="center" bgcolor="#<?php echo $color_code; ?>" ><input width="50px" height="50px" type="image" name="imageField" src= <?php echo "../img/cc0001/".$rowEmp['IMAGE'] ;?> /></td>
            <td width="87" bgcolor="#<?php echo $color_code; ?>"  align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:11px"><table width="90%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><div align="center"><span class="style7"><?php echo $rowEmp['COD_CLI'] ;?></span></div></td>
              </tr>
            </table></td>
			<td bgcolor="#<?php echo $color_code; ?>" ><div align="left"><?php echo $rowEmp['LNK'] ;?></div></td>
            <td bgcolor="#<?php echo $color_code; ?>" ><div align="left"><?php echo $rowEmp['LNK_EN'] ;?></div></td>
            <td bgcolor="#<?php echo $color_code; ?>" ><div align="center"><?php echo $rowEmp['NOMBRE'] ;?></div></td>
			  </tr>
          <tr>
            <td height="26" colspan="4"align="center" bgcolor="#<?php echo $color_code; ?>" class="style5">&nbsp;</td>
            </tr>
          <tr>
            <td height="17" colspan="3"align="center" bgcolor="#<?php echo $color_code; ?>" class="style5" valign="top"><div align="left"></td>
            <td width="296" height="17"align="center" valign="top" bgcolor="#<?php echo $color_code; ?>" class="style5">
              <input type="submit" name="Editar" value="Editar" /></td>
          </tr>
		  </form>
		<?php	//TERMINANDO EL WHILE
				}
			}
		?>
         
          <tr>
            <td colspan="4" align="center" class="style5"></td>
          </tr>
        </table>
	  
	  
  	  </td>
    </tr>
  </table>
<span class="style1"></span></div>
</body>
</html>
