<?php
session_start();
//periksa apakah user telah login atau memiliki sesion
if(!isset($_SESSION['user']) || !isset($_SESSION['pass']))
{
	?><script language='javascript'> document.location='home.php'</script> <?php
}
else
{
	unset($_SESSION);
	session_destroy();
	?><script language='javascript'> document.location='home.php'</script> <?php
}
?>