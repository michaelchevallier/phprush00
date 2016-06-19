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
	$cart[$i]['img'] = $_GET['img'];
	$cart[$i]['price'] = $_GET['price'];
	setcookie("cart", serialize($cart), time() + 3600);
}
else if (isset($_COOKIE['cart']))
	print_r(unserialize($_COOKIE['cart']));
header('Location: index.php');
?>