<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
?>
<html>
<head>
<title>actualizar</title>
</head>
<body>
<?php
include "../include/xpts.php";
$registros=mysql_query(
"update news set TITLE='$_REQUEST[t_titulo_noticia_e]',TITLE_EN='$_REQUEST[t_titulo_noticia_i]',DESCRIPTION='$_REQUEST[descripcion_espa]',DESCRIPTION_EN='$_REQUEST[descripcion_ing]',fecha='$_REQUEST[t_fecha_noticia]'
where COD_N='$_REQUEST[t_codigo_noticia]'",$conexion) or
  die("Problemas en el select:".mysql_error());
  
?>
<script language="javascript">
window.location="admin_noticias.php";
</script>

</body>
</html>
