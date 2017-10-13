
<?php
include('./include/idioma.php');
include('concosise.php');
$queEmp = "SELECT * FROM ALBUM";

$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>COSISERED Galeria de fotos</title>

<link href="css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />

<script src="scripts/jquery-1.3.2.js" language="javascript"></script>
<script src="scripts/jquery.lightbox-0.5.js" language="javascript"></script>

</head>

<body background="img/fondo_pag.jpg">
<link href="css/estilo.css" rel="stylesheet" type="text/css" />


<div align="center">  
<?php
			
			if ($totEmp> 0) {
				while ($rowEmp = mysql_fetch_assoc($resEmp)) {
				
				// extensiones a mostrar
				$extensions = array('jpg','jpeg','gif','png','bmp');
				// nombre del directorio
				//$folder_image_name = "..//images/".$rowEmp['cod_al']."/";
				$folder_image_name = "/cosisered/images/".$rowEmp['cod_al']."/";
				 
				//C:\xampp\htdocs\cosisered\images\img00001
				// ruta del directorio
				$images_folder_path = $_SERVER['DOCUMENT_ROOT'].$folder_image_name;
				
				// url del directorio
				$url_to_folder = 'http://'.$_SERVER["SERVER_NAME"].":8080".$folder_image_name;
				
				// array de imagenes
				$images = array();
				//srand((float) microtime() * 10000000);
				// Si es PHP Version < 4.2.0
				// abrimos directorio y mostramos imagenes
				if ($handle = opendir($images_folder_path))
				 { 
					while (false !== ($file = readdir($handle)))
					 { 
							if ($file != "." && $file != "..")
							 { 
									 // obtener extension del archivo
									 $ext = strtolower(substr(strrchr($file, "."), 1));
									 // almacenamos en el array
											   if(in_array($ext, $extensions))
											   {           
												$images[] = $url_to_folder.$file;
											   }  
							}
					  }
					  closedir($handle);
				}
				if(!empty($images))
				{
				// si tenemos algo que mostrar...
														  
				$rand_key = array_rand($images, 1);
				$src = $images[$rand_key];
				if($_GET['idioma']==1)
				{
				echo
				"
	
							<table width='280' height='230' border='0' align='center' cellpadding='0' cellspacing='0'>
							  <tr>
								<td width='17' bgcolor='#FFFFFF'>&nbsp;</td>
								<td width='250' bgcolor='#FFFFFF'>&nbsp;</td>
								<td width='11' bgcolor='#FFFFFF'>&nbsp;</td>
							  </tr>
							  <tr>
								<td height='155' bgcolor='#FFFFFF'>&nbsp;</td>
								<td>
								<a href='galeriafotos.php?id=".$rowEmp['cod_al']."'>								
								<img width='250' height='200' src='".$src."' align='absmiddle'>							
								</a>
								</td>
								<td bgcolor='#FFFFFF'>&nbsp;</td>
							  </tr>
							  <tr>
								<td bgcolor='#FFFFFF'>&nbsp;</td>
								<td bgcolor='#FFFFFF' align='center' class='encabezado2-portada-lista'><a href='galeriafotos.php?id=".$rowEmp['cod_al']."'>".$rowEmp['name']."</a>
								</td>
								<td bgcolor='#FFFFFF'>&nbsp;</td>
							  </tr>
							</table>				
				
				";
				};
				if($_GET['idioma']==0)
				{
				echo
				"
	
							<table width='280' height='230' border='0' align='center' cellpadding='0' cellspacing='0'>
							  <tr>
								<td width='17' bgcolor='#FFFFFF'>&nbsp;</td>
								<td width='250' bgcolor='#FFFFFF'>&nbsp;</td>
								<td width='11' bgcolor='#FFFFFF'>&nbsp;</td>
							  </tr>
							  <tr>
								<td height='155' bgcolor='#FFFFFF'>&nbsp;</td>
								<td>
								<a href='galeriafotos.php?id=".$rowEmp['cod_al']."'>								
								<img width='250' height='200' src='".$src."' align='absmiddle'>							
								</a>
								</td>
								<td bgcolor='#FFFFFF'>&nbsp;</td>
							  </tr>
							  <tr>
								<td bgcolor='#FFFFFF'>&nbsp;</td>
								<td bgcolor='#FFFFFF' align='center' class='encabezado2-portada-lista'><a href='galeriafotos.php?id=".$rowEmp['cod_al']."'>".$rowEmp['name_en']."</a>
								</td>
								<td bgcolor='#FFFFFF'>&nbsp;</td>
							  </tr>
							</table>				
				
				";
				};
				}						
			}
		}
?>   
</div>
<div class="volver"><a href="portada.php"><?php echo $volver;?>&nbsp;&nbsp;&nbsp; </a></div>



</body>
</html>