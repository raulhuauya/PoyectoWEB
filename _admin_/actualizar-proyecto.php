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
$registros=mysql_query("update proyects
                         set COD_AR='$_REQUEST[t_codigo_a]',
						 COD_CLI ='$_REQUEST[t_codigo_c]',
						 DATE='$_REQUEST[t_fecha]',
						 TITLE='$_REQUEST[t_descripcion_es]',
						 TITLE_EN='$_REQUEST[t_descripcion_in]'   
                         where COD_PRO='$_REQUEST[t_codigo_p]'",$conexion) or
  die("Problemas en el select:".mysql_error());
  
?>
<script language="javascript">
window.location="admin_proyectos.php";
</script>

</body>
</html>
