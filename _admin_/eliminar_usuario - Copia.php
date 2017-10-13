<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
?>
<html>
<head>
<title>eliminar usuario</title>
</head>
<body>
<?php
include "../include/xpts.php";
$registros=mysql_query("delete from usuarios  where nombre='$_REQUEST[lista]'",$conexion) or
  die("Problemas en el select:".mysql_error());
?>
<script language="javascript">
window.location="admin_usuarios.php";
</script>

</body>
</html>