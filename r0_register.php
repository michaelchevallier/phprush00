<?php
session_start();
include_once("r0f_dbselect.php");
include_once("r0f_dbinsert.php");

if (isset($_POST) && isset($_SESSION))
{
	$qr = r0f_dbselect("SELECT u_login FROM USER WHERE login = '".$_POST['login']."';");
	if ($qr == -1)
		echo "Failed to query db";
	else if ($qr != 0)
		echo "User already exists\n";
	else
	{
		if (r0f_dbinsert("INSERT INTO USER (u_group_id, u_login, u_email, u_password) VALUES ('2', '".$_POST['login']."', '".$_POST['email']."', '".hash('whirlpool', $_POST['password'])."');"))
		{
			$_SESSION['logged'] = true;
			$_SESSION['logged_as'] = $_POST['login'];
			echo "Account successfully created\n";
		}
		else
			echo "Failed to insert into db\n";
	}
}
?>