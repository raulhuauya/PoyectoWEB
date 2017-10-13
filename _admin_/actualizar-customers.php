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
$registros=mysql_query("update customers
                         set nombre='$_REQUEST[t_nombre]',lnk='$_REQUEST[t_lnk]',lnk_en='$_REQUEST[t_lnk_e]' 
                         where cod_cli='$_REQUEST[codigo]'",$conexion) or
  die("Problemas en el select:".mysql_error());
  
?>
<script language="javascript">
window.location="cls_e.php";
</script>

</body>
</html>
