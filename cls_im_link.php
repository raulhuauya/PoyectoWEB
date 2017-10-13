
<?php

//include "include/xpts.php";
include "../include/xpts.php";
include "../include/vz.php";

	$aux_name_new_img=0;//para subir una nueva imagen
	$aux_index=0;
?>
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Seleccionar imagen</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<p class="style1">SELECCIONE LA IMAGEN A USAR PARA<BR />
  CLIENTE***************</p>
<form action="/desarrollo/img/link/cls_up.php" method="post" enctype="multipart/form-data"> 
 <input type="hidden" name="t_nombre_imagen" value="<?php echo $_GET['b000'].".jpg" ?>">
 <input type="hidden" name="t_codigo" value="<?php echo $_GET['b000']?>">

 
<table width="55%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>


<label for="file">Archivo:</label>
<input type="file" name="file" id="file"  />
<br />
<input type="submit" name="Subir Imagen" value="Subir Imagen" />

<br />

 </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="500px"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    
    <td width="67%" rowspan="2">&nbsp;
	
	<table width="90%" border="0" cellspacing="0" cellpadding="0" >
	
	<?
	//definimos el path de acceso
	$path="../img/link/";
	
	//instanciamos el objeto
	$dir=dir($path);
	
	//Mostramos las informaciones
	echo "Directorio ".$dir->path."<br><br>";
	$left_=true;
	
//	$to_replace = array(".jpeg", "fiber");
//	$yummy   = array("pizza", "beer", "ice cream");
	while ($elemento = $dir->read())
	{
	
//		if (	strrpos($mystring, "b")=true)
		if ($left_==true)
		{
			if (strrpos($elemento, ".jp")>0)
			{
			   //echo $elemento."<br>";
			   //echo "<img src='../images/cc0001/".$elemento."' width='200px' />"."<br>";
			   echo "<tr><td><table width='90%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center'><img src='../img/link/".$elemento."' width='200px' />"."</td></tr><tr><td align='center'>".$elemento."</td></tr></table></td>";
			   
			   $aux_name_new_img=str_replace(".jpeg", "",$elemento) + 0;
			   if ($aux_name_new_img>$aux_index)
			   {$aux_index=($aux_name_new_img + 0);
			   }
			 }
	//	   echo strrpos($elemento, "T")."<br>";
			$left_=false;
		}
		else
		{
			if (strrpos($elemento, ".jp")>0)
			{
			   echo "<td><table width='90%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center'><img src='../img/link/".$elemento."' width='200px' />"."</td></tr><tr><td align='center'>".$elemento."</td></tr></table></td></tr>";
			   $aux_name_new_img=str_replace(".jpeg", "",$elemento) + 0;
			   if ($aux_name_new_img>$aux_index)
			   {$aux_index=($aux_name_new_img + 0);}
			 }
			$left_=true;
		}
	}
	//Cerramos el directorio
	$dir->close();
	?>
	
      
        
		
        <td>&nbsp;</td>
      </tr>
      
    </table>
	</td>
  </tr>
  
</table>

<?php
//convertir a nombre completo de imagen
	$aux_index=$aux_index+1;
	$aux_name_new_img="0".$aux_index;
	//echo $aux_name_new_img."<br>";
	if (strlen($aux_name_new_img)<5)
	{ 
		for ($i = (5-strlen($aux_name_new_img)); $i < 5; $i++) 
		{//	echo $i."<br>";
			$aux_name_new_img="0".$aux_name_new_img;
		//	echo $aux_name_new_img."<br>";
			if (strlen($aux_name_new_img)==5)
			{ break;
			}
			
		}
		$aux_name_new_img=$aux_name_new_img.".jpeg";
	}
	else
	{
		$aux_name_new_img=$aux_name_new_img.".jpeg";
	}

?>

<input type="hidden" name="ng" value="<?php  echo $aux_name_new_img; ?>">
</form>
</body>
</html>
