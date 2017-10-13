<?php
include "../include/xpts.php";
			$consulta="select password from usuarios where nick='".$_REQUEST['t_nick']."'";
			$resultado=mysql_query($consulta);			
			$resultado_campos=mysql_fetch_assoc($resultado);
			if($resultado_campos['password']==$_REQUEST['t_password'])
			{
				session_start();
				$_SESSION['usuario']=$_REQUEST['t_nick'];
				Header('Location: administrador.php');
				

			}
			else
			{
				echo "usuario no existe".$_REQUEST['t_nick'].$_REQUEST['t_password'];
			}


?>




