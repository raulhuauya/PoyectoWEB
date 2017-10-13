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
<title>nuevo proyectos</title>

</head>

<body bgcolor="#CCCCCC">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<table width="740" align="center" class="encabezado-iz-negro">
  <tr>
    <td>
	<form action="insertar-proyectos.php" method="post" name="insertar_proyecto">
	<table width="740" cellpadding="0" cellspacing="0" align="left">
      <tr>
        <td colspan="2" bgcolor="#999999"><a>nuevo proyecto</a></td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999" align="right"><a href="admin_proyectos.php">volver</a></td>
      </tr>
      <tr>
        <td width="200" align="left"><a>codigo proyecto</a></td>
        <td width="690">
        <?php
			
			$consulta="select max(cast(right(COD_PRO,6) as unsigned))+1 mayor from proyects";
			$resul=mysql_query($consulta);			
			$registro=mysql_fetch_assoc($resul);
			if(strlen($registro['mayor'])==1)
			{
				echo "<input width='50' name='t_clave' type='text' value='"."PP00000".$registro['mayor']."'/>";
			}
			else
			{
				if(strlen($registro['mayor'])==2)
				{
					echo "<input width='50' name='t_clave' type='text' value='"."PP0000".$registro['mayor']."'/>";
				}
				else
				{
					if(strlen($registro['mayor'])==3)
					{
						echo "<input width='50' name='t_clave' type='text' value='"."PP000".$registro['mayor']."'/>";
					}
				}
			}
			
			

		?>        </td>
        <td width="100">&nbsp;</td>
        <td width="440">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" width="200" align="left"><a>area a la que pertenece el proyecto</a></td>
        <td width="100">
        <select name="lista_areas"> 
			<?php
			//consulto por el mayor de los valores de la columna COD_CLI y lo guardo en el nuevo campo temporal "num_mayor"						
			$con_mayor_valor="select max(cast(right(COD_AR,6) as unsigned)) num_mayor from areas";
			$resul_mayor=mysql_query($con_mayor_valor);			
			$mayor=mysql_fetch_assoc($resul_mayor);
			//creo una lista de los valores que se asignan al select.			
			for($valor_for=1;$valor_for<=$mayor['num_mayor'];$valor_for++)
				{				 
					 $query_lista="select * from areas where cast(right(COD_AR,6) as unsigned) ='".$valor_for."'";
					 $resul_lista=mysql_query($query_lista);
					 $registro_select=mysql_fetch_assoc($resul_lista);						 			
					 //imprimo en el select los valores de COD_CLI  
					 if($registro_select['COD_AR']<>""){	
					 echo "<option value='".$registro_select['COD_AR']."'>".$registro_select['TITLE']."</option>";	};	  
				};			
			
			?>
			</select>        </td>
        <td width="440">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" width="200" align="left"><a>cliente al que pertenece el proyecto</a></td>
        <td width="100">
        <select name="lista_clientes"> 
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
			</select>        </td>
        <td width="440">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" width="200" align="left"><a>fecha</a></td>
        <td width="100"><input width="70" name="t_fecha" type="text" value="" /></td>
        <td width="440">&nbsp;</td>
      </tr>
      <tr>
        <td width="200" align="left"><a>texto_ espa&ntilde;ol</a></td>
        <td width="690" colspan="3">
        <textarea style='width:650px; height:100px' name='t_descripcion_es'></textarea>        </td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td width="200" align="left"><a>texto_ingles</a></td>
        <td width="690" colspan="3">
        <textarea style='width:650px; height:100px' name='t_descripcion_in'></textarea>        </td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="4" bgcolor="#999999"><center><input type="submit" name="Submit" value="Guardar" /></center></td>
        </tr>
    </table>
	</form>
	</td>
  </tr>
</table>


</body>
</html>
