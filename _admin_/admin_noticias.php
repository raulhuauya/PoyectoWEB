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

$quenoticias = "SELECT * FROM news;";

$resnoticias = mysql_query($quenoticias, $conexion) or die(mysql_error());
$totnoticias = mysql_num_rows($resnoticias);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>noticias</title></head>

<body bgcolor="#CCCCCC">
<link href="../css/estilo_admin.css" rel="stylesheet" type="text/css" />
<!-- cuerpo de l apgina consult -->
<table  width="740" align="center" cellpadding="0" cellspacing="0" class="encabezado-iz-negro">
  <tr>
    <td>
	<table width="740" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" bgcolor="#999999"><a>administrador de noticias</a> </td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999"><a href="administrador.php">volver </a></td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>
      <tr><form name="nueva_noticia" method="post" action="nueva_noticia.php">
        <td width="188" bgcolor="#999999"><a>nueva noticia</a></td>
        <td width="189" bgcolor="#999999">		
		<center><input name="nuevo" type="submit" value="Nuevo" /></center>                </td></form>
        <td width="173" bgcolor="#999999"><a>eliminar noticia</a> </td>
		<form name="eliminar_noticia" method="post" action="eliminar_noticia.php">
        <td width="87" bgcolor="#999999">
			<center>
			<select name="lista"> 
			<?php
			//consulto por el mayor de los valores de la columna COD_CLI y lo guardo en el nuevo campo temporal "num_mayor"						
			$con_mayor_valor="select max(cast(right(COD_N,6) as unsigned)) num_mayor from news";
			$resul_mayor=mysql_query($con_mayor_valor);			
			$mayor=mysql_fetch_assoc($resul_mayor);
			//creo una lista de los valores que se asignan al select.			
			for($valor_for=1;$valor_for<=$mayor['num_mayor'];$valor_for++)
				{				 
					 $query_lista="select * from news where cast(right(COD_N,6) as unsigned) ='".$valor_for."'";
					 $resul_lista=mysql_query($query_lista);
					 $registro_select=mysql_fetch_assoc($resul_lista);						 			
					 //imprimo en el select los valores de COD_CLI
					 if($registro_select['COD_N']<>""){  	
					 echo "<option value='".$registro_select['COD_N']."'>".$registro_select['TITLE']."</option>";
					 };
				};			
			
			?>
			</select>
			</center>		</td>
        <td width="87" bgcolor="#999999">
		<center><input name="eliminar" type="submit" value="Eliminar" /></center>		</td>
		</form>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>	  
      <tr>
        <td colspan="5">
		<?php
			if ($totnoticias> 0)
			 {
				while ($rownoticias = mysql_fetch_assoc($resnoticias))
				{
					echo "
						<form action='editar_noticias.php' method='post' name='actualizar_noticias'>
						<table width='740' cellpadding='0' cellspacing='0'>
						  <tr>
							<td width='54' bgcolor='#F0F0F0'><a>fecha</a></td>
							<td width='55' bgcolor='#F0F0F0'><a>codigo</a></td>
							<td width='316' bgcolor='#F0F0F0'><a>titulo</a></td>
							<td width='299' bgcolor='#F0F0F0'><a>titulo ingles</a></td>
						  </tr>
						  <tr>
							<td bgcolor='#ffffff'><input name='t_fecha' type='text' value='".$rownoticias['fecha']."'/></td>
							<td bgcolor='#ffffff'><input name='t_codigo' type='text' value='".$rownoticias['COD_N']."'/></td>
							<td bgcolor='#ffffff'><input style='width:350px;' name='t_titulo_es' type='text' value='".$rownoticias['TITLE']."'/></td>
							<td bgcolor='#ffffff'><input style='width:350px;' name='t_titulo_in' type='text' value='".$rownoticias['TITLE_EN']."'/></td>
						  </tr>
						  <tr>
							<td width='109' colspan='2' rowspan='2' bgcolor='#ffffff'></td>
							<td width='316' bgcolor='#F0F0F0'><a>noticia</a></td>
							<td width='299' bgcolor='#F0F0F0'><a>noticia ingles</a></td>
						  </tr>
						  <tr>
							<td bgcolor='#ffffff'><textarea style='width:350px; height:100px' name='contenido_noticia_es'>".$rownoticias['DESCRIPTION']."</textarea></td>
							<td bgcolor='#ffffff'><textarea style='width:350px; height:100px' name='contenido_noticia_in'>".$rownoticias['DESCRIPTION_EN']."</textarea></td>
						  </tr>
						  <tr>							
							<td colspan='4' bgcolor='#CCCCCC'><CENTER><input type='submit' name='Submit' value='Modificar' /></center></td>
						  </tr>
						</table>
						</form>";
				}
				
			  }		
		?>			</td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#999999">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
