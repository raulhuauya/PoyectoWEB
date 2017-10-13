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
"update customers_opinion set
COD_CLI='$_REQUEST[t_codigo_opinion]',
DESCRIPTION='$_REQUEST[descripcion_espa]',
DESCRIPTION_EN='$_REQUEST[descripcion_ing]',
PRIORITY='$_REQUEST[t_pri_opinion_e]',
PRIORITY_EN='$_REQUEST[t_pri_opinion_i]',
REPRESENTATIVE='$_REQUEST[t_repre_opinion]'
where COD_CLI='$_REQUEST[t_codigo_opinion]'",$conexion) or
  die("Problemas en el select:".mysql_error());
  
?>
<script language="javascript">
window.location="admin_opinion.php";
</script>

</body>
</html>
