<?php
include "../../include/xpts.php";
/*
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg"))
&& ($_FILES["file"]["size"] < 20000))
  {*/
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
//		if (file_exists("upload/" . $_FILES["file"]["name"]))
		if (file_exists("../cc0001/" . $_FILES["file"]["name"]))
		  {
		//  echo $_FILES["file"]["name"] . " already exists. ";
		  }
		else
		  {
	/*	  move_uploaded_file($_FILES["file"]["tmp_name"],
		  "../cc0001/" . $_FILES["file"]["name"]);
	*/	  
		  move_uploaded_file($_FILES["file"]["tmp_name"],
		  "../cc0001/" .$_REQUEST['t_nombre_imagen']);// $_FILES["file"][]);

		  
	//	  move_uploaded_file($_FILES["file"]["tmp_name"],
	//	  "upload/" . $_FILES["file"]["name"]);
		  echo "Stored in: " . "../cc0001/" . $_FILES["file"]["name"];
	//	  echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	//	  header( 'Location: /desarrollo/_admin_/cls_im.php' ) ;
		  }
    }
 /* }
else
  {
  echo "Invalid file";
  }*/
 ?> 
 <form >
 <input name="button" type="button" onclick="window.close();" value="Cerrar" /> 
 </form>