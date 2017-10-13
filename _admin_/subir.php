<?php
session_start();
if(!$_SESSION['usuario'])
{
Header('Location: inicio.php'); 
}
?>
<?php
 if ($_POST['volver']) 
{
Header('Location: admin_album.php');
}
?>
<?php
include "../../include/xpts.php";

  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["file"]["tmp_name"];

		if (!is_dir("../images/".$_REQUEST['t_codigo']))
		  {

		  }
		else
		  {
  		  move_uploaded_file($_FILES["file"]["tmp_name"],
		  "../images/".$_REQUEST['t_codigo']."/". $_FILES["file"]["name"]);		  

		  echo "Stored in: " . "../images/".$_REQUEST['t_codigo']. $_FILES["file"]["name"];
		  echo
		  "
		  
		  <form method='post'>
			<table width='740'>
			  <tr>
				<td><input name='volver' type='submit' value='volver' /></td>
			  </tr>
			</table>
			</form>
		  
		  ";


		  }
    }

 ?> 


 