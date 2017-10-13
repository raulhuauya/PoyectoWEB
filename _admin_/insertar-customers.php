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
$registros=mysql_query("insert into customers (cod_cli,nombre,lnk,lnk_en,image)
						values
						('$_REQUEST[t_clave]','$_REQUEST[nombre]','$_REQUEST[lnk]','$_REQUEST[lnk_e]','$_REQUEST[t_imagen]')",$conexion) or
  die("Problemas en el select:".mysql_error());
  
?>
<script language="javascript">
window.location="cls_e.php";
</script>

?>

</body>
</html>