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
$registros=mysql_query("update ALBUM set NAME='$_REQUEST[t_nombre_e]',NAME_EN='$_REQUEST[t_nombre_i]'
where COD_AL='$_REQUEST[t_clave]'",$conexion) or
  die("Problemas en el select:".mysql_error());
 
?>
<script language="javascript">
window.location="admin_album.php";
</script>

</body>
</html>
