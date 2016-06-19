<?php
session_start();
include_once("r0f_dbselect.php");

if (isset($_POST) && isset($_SESSION))
{
	$result = r0f_dbselect("SELECT u_login FROM USER WHERE login = '".$_POST['login']."' AND password = '".hash('whirlpool', $_POST['password'])."';");
	if ($result == -1)
		echo "Failed to connect to DB\n";
	else if ($result == 0)
		echo "User not found\n";
	else
    {
		$_SESSION['logged'] = true;
		$_SESSION['logged_as'] = $_POST['login'];
		header('Location: index.php');
    }
}
?>