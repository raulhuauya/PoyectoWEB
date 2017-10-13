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
$registros=mysql_query("update links
                         set link='$_REQUEST[t_url_l]',description='$_REQUEST[t_descripcion_e_l]',description_en='$_REQUEST[t_descripcion_i_l]'
                         where cod_ln='$_REQUEST[t_codigo_l]'",$conexion) or
  die("Problemas en el select:".mysql_error());
  
?>
<script language="javascript">
window.location="admin_link.php";
</script>

</body>
</html>
