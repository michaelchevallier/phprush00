<?php
session_start();

if (isset($_SESSION) && isset($_SESSION['logged']) && $_SESSION['logged'])
{
	$_SESSION['logged'] = false;
	$_SESSION['logged_as'] = "";
}
header('Location: index.php');
?>