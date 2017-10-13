<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
else
{
	echo "ingreso a sesion:   ".$_SESSION['usuario'];
}
?>
<?php
if (isset($_POST['cerrarsesion'])) {
	
	if ($_POST['cerrarsesion']) 
	{
	session_start();
	$_SESSION=array();
	session_destroy();
	
	}
}



?>
<?php
if (isset($_POST['salir'])) {
	if ($_POST['salir']) 
	{
	Header('Location: inicio.php');
	}
}
?>