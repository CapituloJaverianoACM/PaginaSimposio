<?php
session_start();
$_SESSION['log'] = 0;
$_SESSION['err'] = 0;
	$PSW = /*------Password-----*/;
	$comp = $_POST["psw"];
if ($comp==$PSW)
{
	header("Location:datos.php");
	$_SESSION['log'] = 1;
}
else
{
	header("Location:admin.php");
	$_SESSION['err'] = 1;

}
?>
