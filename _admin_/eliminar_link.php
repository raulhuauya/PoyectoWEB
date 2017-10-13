<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
?>
<html>
<head>
<title>eliminar</title>
</head>
<body>
<?php
include "../include/xpts.php";
$registros=mysql_query("delete from links where COD_LN='$_REQUEST[lista]'",$conexion) or
  die("Problemas en el select:".mysql_error());
?>
<script language="javascript">
window.location="admin_link.php";
</script>

</body>
</html>