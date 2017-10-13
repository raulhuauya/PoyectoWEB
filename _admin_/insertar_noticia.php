<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
?>
<html>
<head>
<title>insertar-noticia</title>
</head>
<body>
<?php
include "../include/xpts.php";
$registros=mysql_query(
"insert into news
(COD_N,TITLE,TITLE_EN,DESCRIPTION,DESCRIPTION_EN,fecha) values						('$_REQUEST[t_clave]','$_REQUEST[t_titulo_noticia_e]','$_REQUEST[t_titulo_noticia_i]','$_REQUEST[descripcion_espa]','$_REQUEST[descripcion_ing]','$_REQUEST[t_fecha_noticia]')",$conexion) or
 die("Problemas en el select:".mysql_error());
  
?>
<script language="javascript">
window.location="admin_noticias	.php";
</script>



</body>
</html>