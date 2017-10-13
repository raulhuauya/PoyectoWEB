<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
?>
<html>
<head>
<title>insertar opinion</title>
</head>
<body>
<?php
include "../include/xpts.php";
	
$query_lista="select nombre from customers where COD_CLI = '".$_REQUEST['lista_codigo']."'";
$resul_lista=mysql_query($query_lista);

while ($fila = mysql_fetch_assoc($resul_lista)) {
   $nombre_empresa = $fila['nombre'];
};
		
?>



<?php

$registros=mysql_query(
"insert into customers_opinion
(COD_CLI,DESCRIPTION,DESCRIPTION_EN,cargo,cargo_e,REPRESENTATIVE,empresa) values						('$_REQUEST[lista_codigo]','$_REQUEST[descripcion_espa]','$_REQUEST[descripcion_ing]','$_REQUEST[t_pri_opinion_e]','$_REQUEST[t_pri_opinion_i]','$_REQUEST[t_repre_opinion]','$nombre_empresa')",$conexion) or
 die("Problemas en el select:".mysql_error());
 //$_REQUEST[nombre] 
  
 
  
?>
<script language="javascript">
window.location="admin_opinion.php";
</script>



</body>
</html>