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
$registros=mysql_query("delete from customers  where cod_cli='$_REQUEST[lista]'",$conexion) or
  die("Problemas en el select:".mysql_error());
?>
<script language="javascript">
window.location="cls_e.php";
</script>

</body>
</html>