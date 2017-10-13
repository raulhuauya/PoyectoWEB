<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
?>
<html>
<head>
<title>insertar-proyectos</title>
</head>
<body>
<?php
include "../include/xpts.php";
$registros=mysql_query("insert into proyects (COD_PRO,COD_AR,COD_CLI,DATE,TITLE,TITLE_EN)
						values
						('$_REQUEST[t_clave]','$_REQUEST[lista_areas]','$_REQUEST[lista_clientes]','$_REQUEST[t_fecha]','$_REQUEST[t_descripcion_es]','$_REQUEST[t_descripcion_in]')",$conexion) or
  die("Problemas en el select:".mysql_error());
  
?>
<script language="javascript">
window.location="admin_proyectos.php";
</script>



</body>
</html>