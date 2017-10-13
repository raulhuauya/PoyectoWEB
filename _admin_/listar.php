<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysql_connect("localhost","root","") or
  die("Problemas en la conexion");
mysql_select_db("cosise",$conexion) or
  die("Problemas en la selección de la base de datos");
$registros=mysql_query("select * from customers
                       where cod_cli='$_REQUEST[codigo]'",$conexion) or
  die("Problemas en el select:".mysql_error());
$nombre=$_REQUEST['t_nombre'];
$codigo=$_POST['codigo'];
if ($reg=mysql_fetch_array($registros))
{

?>

  <form action="actualizar-customers.php" method="post">
  Ingrese nuevo nombre:
  <input type="text" name="nuevonombre" value="<?php echo $nombre ?>">
  <br>
  <input type="text" name="codigo" value="<?php echo $codigo ?>">
  <br>
  <input type="hidden" name="nombreanterior" value="<?php 
  echo $nombre ?>">
  <input type="submit" value="Modificar">
  </form>
<?php
}
else
  echo "No existe alumno con dicho cod_id";
?>
</body>
</html>