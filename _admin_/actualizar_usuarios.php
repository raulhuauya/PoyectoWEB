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
$registros=mysql_query("update usuarios set nick='$_REQUEST[t_nick]',nombre='$_REQUEST[t_nombre]',password='$_REQUEST[t_password]',email='$_REQUEST[t_email]'
where nombre='$_REQUEST[t_nombre]'",$conexion) or
  die("Problemas en el select:".mysql_error());
 
?>
<script language="javascript">
window.location="admin_usuarios.php";
</script>

</body>
</html>
