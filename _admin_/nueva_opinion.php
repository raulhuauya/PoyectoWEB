<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
else
{
	echo "ingreso a sesion:   ".$_SESSION['usuario'];
}
?>
<?php
 if ($_POST['cerrarsesion']) 
{
session_start();
$_SESSION=array();
session_destroy();

}
?>
<?php
 if ($_POST['salir']) 
{
Header('Location: inicio.php');
}
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
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nueva opinion</title>

</head>

<body bgcolor="#CCCCCC">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<table width="740" align="center" class="encabezado-iz-negro">
  <tr>
    <td>
	<form action="insertar_opinion.php" method="post" name="nueva_opinion">
	<table width="740" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#999999"><a>nueva opinion</a> </td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999" align="right"><a href="admin_opinion.php">volver</a></td>
      </tr>
      <tr>
        <td width="93" bgcolor="#ffffff"><a>codigo cliente</a></td>
        <td width="635" colspan="2" bgcolor="#ffffff">
				
			<select name="lista_codigo"> 
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
					 echo "<option value='".$registro_select['COD_CLI']."'>".$registro_select['NOMBRE']."</option>";	};
					 
					   
				};			
			
			?>
			</select>
			<input type="hidden" name="nombre" value="<?php echo $registro_select['NOMBRE']; ?>" />	
            
           
            	</td>		
      </tr>
	  	  	  
      <tr>
        <td bgcolor="#ffffff"><a>representante</a></td>
        <td colspan="2" bgcolor="#ffffff"><input width="400px" name="t_repre_opinion" type="text" /></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor='#f0f0f0'><a>espa&ntilde;ol:</a></td>
        </tr>
      <tr>
        <td bgcolor="#ffffff"><a>cargo</a></td>
        <td colspan="2" bgcolor="#ffffff"><input width="250" name="t_pri_opinion_e" type="text"/></td>
      </tr>
      <tr>
        <td bgcolor="#ffffff"><a>contenido</a></td>
        <td colspan="2" bgcolor="#ffffff"><textarea style="width:600px; height:100px" name="descripcion_espa" cols="" rows=""></textarea></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor='#f0f0f0'><a>ingles</a></td>
        </tr>
      <tr>
        <td bgcolor="#ffffff"><a>cargo</a></td>
        <td colspan="2" bgcolor="#ffffff"><input width="250" name="t_pri_opinion_i" type="text" /></td>
      </tr>
      <tr>
        <td bgcolor="#ffffff"><a>contenido</a></td>
        <td colspan="2" bgcolor="#ffffff"><textarea style="width:600px; height:100px" name="descripcion_ing" cols="" rows=""></textarea></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#999999"><center><input type="submit" name="Submit" value="Agregar" /></center></td>
        </tr>
    </table>
	</form>
	</td>
  </tr>
</table>


</body>
</html>
