
<?php

function ValidarUs()
{
/*
if(count($_SESSION[])==0)
{
	return false;
}
else
{
	return true;
}
*/
return true;
}
if (ValidarUs()==false)
{//redireccionamos al index
	header( 'Location: http://www.cosisered.com' ) ;
}
?>