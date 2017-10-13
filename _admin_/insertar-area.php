<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
?>
<html>
<head>
<title>insertar-customers</title>
</head>
<body>
<?php
include "../include/xpts.php";
$registros=mysql_query("insert into areas (COD_AR,TITLE,TITLE_EN)
						values
						('$_REQUEST[t_clave]','$_REQUEST[t_titulo_area_e]','$_REQUEST[t_titulo_area_i]')",$conexion) or
  die("Problemas en el select:".mysql_error());
  
?>
<script language="javascript">
window.location="admin_areas.php";
</script>



</body>
</html>