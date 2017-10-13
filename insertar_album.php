<html>
<head>
<title>insertar-usuarios</title>
</head>
<body>
<?php
include "../include/xpts.php";
$registros=mysql_query("insert into ALBUM (cod_al,name,name_en)
						values
						('$_REQUEST[t_clave]','$_REQUEST[t_nombre_e]','$_REQUEST[t_nombre_i]')",$conexion) or
  die("Problemas en el select:".mysql_error());
  
?>
<?php
$nombre_carpeta = "/desarrollo/images/".$_REQUEST[t_clave]; 

if(!is_dir($nombre_carpeta)){ 
@mkdir($nombre_carpeta, 0700); 
}else{ 
echo "Ya existe ese directorio\n"; 
}


?>




<script language="javascript">
window.location="admin_album.php";
</script>



</body>
</html>