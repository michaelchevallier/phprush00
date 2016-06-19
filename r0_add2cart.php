<?php
if ($_GET)
{
	if (isset($_COOKIE['cart']))
	{
		$cart = unserialize($_COOKIE['cart']);
		$i = count($cart);
	}
	else
	{
		$i = 0;
	}
	$cart[$i]['brand'] = $_GET['brand'];
	$cart[$i]['name'] = $_GET['name'];
	$cart[$i]['color'] = $_GET['color'];
	setcookie("cart", serialize($cart), time() + 3600);
}
else if (isset($_COOKIE['cart']))
	print_r(unserialize($_COOKIE['cart']));
?>