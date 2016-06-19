<?php
session_start();
include_once("r0f_dbinsert.php");

if (isset($_SESSION['logged']) && $_SESSION['logged'] == true)
{
	if ($_COOKIE['cart'])
	{
		$cart = unserialize($_COOKIE['cart']);
		foreach ($cart as $product => $value)
		{
			echo $value['brand']." ".$value['name']." ".$value['color']."\n";
		}
		echo "Click to validate\n";
	}
	else
		echo "Your cart is empty\n";
}
else
	echo "You must be logged in to validate your cart\n";
?>