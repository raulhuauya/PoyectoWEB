<?php

if (count($_GET)==0 )
{
     if (count($_COOKIE)==0)
     {setcookie("idioma", "1");
     }
	 
     if ($_COOKIE["idioma"]=="0" )
     {    setcookie("idioma", "0");
         include("idi_eng.php");
     }
     elseif($_COOKIE["idioma"]<>"0")
     {    setcookie("idioma", "1");
        include("idi_esp.php");
     }
	 //$url2="portada.php";
	 //$idioma="1";
	 
	 if (isset($url2)) {
				$url2="portada.php";
				} else {
				$url2="portada.php";
				}
	 if (isset($idioma)) {
				$idioma="1";
				} else {
				$idioma="1";
				}					
}
else
{   

 if ($_GET["idioma"]=="0" )
     {    setcookie("idioma", "0");
         include("idi_eng.php");
     }
     elseif($_GET["idioma"]<>"0")
     {    setcookie("idioma", "1");
        include("idi_esp.php");
     }
	 //$url2=$_GET['pagina'];
	 if (isset($url2)) {
				$url2="portada.php";
				} else {
				$url2="portada.php";
				}
	
	 $idioma=$_GET['idioma'];
	 
}
?>