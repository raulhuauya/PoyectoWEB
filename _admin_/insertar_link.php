<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
?>
<html>
<head>
<title>insertar link</title>
</head>
<body>
<?php
include "../include/xpts.php";
$registros=mysql_query(
"insert into links
(cod_ln,description,description_en,link,picture)
 values
('$_REQUEST[t_clave]','$_REQUEST[t_descripcion_e_l]','$_REQUEST[t_descripcion_i_l]','$_REQUEST[t_url_l]','$_REQUEST[t_img]')",$conexion) or
 die("Problemas en el select:".mysql_error());
  
?>
<script language="javascript">
window.location="admin_link.php";
</script>



</body>
</html>