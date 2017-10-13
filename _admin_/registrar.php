<?php
//AQUI CONEXION O include() DE ARCHIVO DE CONEXION CON BASE DE DATOS.
include "../include/xpts.php";
function quitar($mensaje)
{
$mensaje = str_replace("<","<",$mensaje);
$mensaje = str_replace(">",">",$mensaje);
$mensaje = str_replace("\'","'",$mensaje);
$mensaje = str_replace('\"',"",$mensaje);
$mensaje = str_replace("\\\\","",$mensaje);
return $mensaje;
}

if(trim($HTTP_POST_VARS["nick"]) != "" && trim($HTTP_POST_VARS["email"]) != "")
{
$sql = "SELECT id FROM usuarios WHERE nick='".quitar($HTTP_POST_VARS["nick"])."'";
$result = mysql_query($sql);
if($row = mysql_fetch_array($result))
{
echo "Error, nick escogido por otro usuario";
}
else
{
$sql = "INSERT INTO usuarios (nick,password,nombre,email) VALUES (";
$sql .= "'".quitar($HTTP_POST_VARS["nick"])."'";
$sql .= ",'".quitar($HTTP_POST_VARS["password"])."'";
$sql .= ",'".quitar($HTTP_POST_VARS["nombre"])."'";
$sql .= ",'".quitar($HTTP_POST_VARS["email"])."'";
$sql .= ")";
mysql_query($sql);
echo "Registro exitoso!";
}
mysql_free_result($result);
}
else
{
echo "Debe llenar como minimo los campos de email y password";
}
mysql_close();
?>
