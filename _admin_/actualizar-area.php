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
$registros=mysql_query("update areas set TITLE='$_REQUEST[t_titulo_area_e]',TITLE_EN='$_REQUEST[t_titulo_area_i]'
where COD_AR='$_REQUEST[t_codigo_a]'",$conexion) or
  die("Problemas en el select:".mysql_error());
 
?>
<script language="javascript">
window.location="admin_areas.php";
</script>

</body>
</html>
