
<?php

include "include/xpts.php";

$queEmp = "SELECT * FROM CUSTOMERS ORDER BY nombre ASC";

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
</head>

<body>
<div align="center">
  <table width="90%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="center" valign="top">
	  <form id="frmClient" name="frmClient" method="post" action="">
	    <table width="706" height="100" border="0" cellpadding="0" cellspacing="0" >
          <tr >
            <td colspan="5"><table width="99%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="96%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style13">CLIENTES DE COSISERED S.A.C </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="style16">En &eacute;sta p&aacute;gina usted podr&aacute; ver la lista de clientes y de igual forma crear nuevos clientes y modificar los ya existentes. </td>
    <td>&nbsp;</td>
  </tr>
</table>
</td>
            </tr>
          <tr bgcolor="#000066"class="style3" align="center">
            <td colspan="2" bordercolor="#D1D1D1"  height="17"><strong>IMAGEN</strong></td>
            <td width="200" rowspan="2" ><strong>NOMBRE DEL CLIENTE</strong></td>
            <td width="250" rowspan="2" ><strong>DESCRIPCI&Oacute;N DEL CLIENTE (ES)</strong></td>
            <td width="250" rowspan="2" ><strong>DESCRIPCI&Oacute;N DEL CLIENTE (EN)</strong></td>
          </tr>
          <tr bgcolor="#000066"class="style3" align="center">
            <td bordercolor="#D1D1D1"  height="18"><span class="style9"> IMAGEN</span></td>
            <td bordercolor="#D1D1D1"  height="18"><span class="style9">MOSTRAR IMAGEN</span> </td>
          </tr>
          <tr >
            <td width="75" bgcolor="#E4E0F5"align="center" ><input width="70px" height="75%" type="image" name="imageField" src="../images/cc0001/00001.jpeg" /></td>
            <td width="19" bgcolor="#E4E0F5" align="center"><input type="checkbox" name="checkbox" value="checkbox" /></td>
            <td bgcolor="#E4E0F5"><div align="center">
                <table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div align="center"><span class="style7">INTERNATIONAL FOOD POLICY RESEARCH INSTITUTE (IFPRI).</span></div></td>
                  </tr>
                </table>
            </div></td>
            <td bgcolor="#E4E0F5"><div align="center">
                <table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div align="center"><span class="style7">INTERNATIONAL FOOD POLICY RESEARCH INSTITUTE (IFPRI).</span></div></td>
                  </tr>
                </table>
            </div></td>
            <td bgcolor="#E4E0F5"><div align="center">
                <table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div align="center"><span class="style7">INTERNATIONAL FOOD POLICY RESEARCH INSTITUTE (IFPRI).</span></div></td>
                  </tr>
                </table>
            </div></td>
          </tr>
          <tr>
            <td  width="75" bgcolor="#C4BCED"align="center"><input width="70px" height="75%" type="image" name="imageField2" src="../images/cc0001/00006.jpeg" /></td>
            <td bgcolor="#C4BCED" align="center"><input type="checkbox" name="checkbox2" value="checkbox" /></td>
            <td bgcolor="#C4BCED"><div align="center">
                <table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div align="center" class="style7"><strong>UNIVERSIDAD DE CALIFORNIA &ndash; BERKELEY  (EEUU).</strong></div></td>
                  </tr>
                </table>
            </div></td>
            <td bgcolor="#C4BCED"><div align="center">
                <table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div align="center" class="style7"><strong>UNIVERSIDAD DE CALIFORNIA &ndash; BERKELEY  (EEUU).</strong></div></td>
                  </tr>
                </table>
            </div></td>
            <td bgcolor="#C4BCED"><div align="center">
                <table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div align="center" class="style7"><strong>UNIVERSIDAD DE CALIFORNIA &ndash; BERKELEY  (EEUU).</strong></div></td>
                  </tr>
                </table>
            </div></td>
          </tr>
          <tr>
            <td colspan="5" bgcolor="#FFFFFF"align="center" class="style5">1 2 3 4 5 6 7 </td>
          </tr>
        </table>
	  </form>	  </td>
    </tr>
  </table>
<span class="style1"></span></div>
</body>
</html>
