<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
?>
<html>
<head>
<title>insertar-usuarios</title>
</head>
<body>
<?php
include "../include/xpts.php";
$registros=mysql_query("insert into usuarios (nombre,nick,password,email)
						values
						('$_REQUEST[t_nombre]','$_REQUEST[t_nick]','$_REQUEST[t_password]','$_REQUEST[t_email]')",$conexion) or
  die("Problemas en el select:".mysql_error());
  
?>
<script language="javascript">
window.location="admin_usuarios.php";
</script>



</body>
</html>