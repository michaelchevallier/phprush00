<?PHP
session_start();
?>
<HTML>
<HEAD>
	<meta charset="utf-8" />
	<TITLE>Legendary Motorsports</TITLE>
	<link rel="stylesheet" type="text/css" href="sources/index.css" />
</HEAD>
<BODY>
	<DIV id="banner">
		<img id="banner_img" SRC="sources/images/banner-img.png" alt="Legendary Motorsport"/>
		<ul id="panier_menu"><a href="panier.php">Panier<img id="panier_black_menu" src="sources/images/panier_black.jpg"></a></ul>
		<ul id="body_menu">
			<li id="connexion">Connexion
				<ul id="scroll_menu">
				<form action="create.php" method="post">
					<table id="table_scroll_menu"><tr><td>Identifiant: </td><td><input type="text" name="login" id="login"/></td></tr>
					<tr><td>Mot de passe: </td><td><input type="password" name="passwd" id="pass"/></td>
					<td><input id="connexion" type="submit" name="submit" value="OK" /></td></tr>
				</table>
				</form>
					<li id="new_account_link"><a href="#">Cr&eacute;er un nouveau compte</a>
				</ul>
			</li>
		</ul>
	</DIV>
	<DIV id="core" style="background-color: black;">
		<DIV id="panier"><img id="panier_black" src="sources/images/panier_black.jpg">Votre Panier<br /><br /></DIV>
		<table class="panier_row">
<?php
	if ($_COOKIE['cart'])
	{
		$cart = unserialize($_COOKIE['cart']);
		$total_price = 0;
		foreach ($cart as $product => $value)
		{
			echo "<tr>
					<td class='panier_content'></td>
					<td class='panier_item_name'>".$value['brand']."&nbsp;".$value['name']."</td>
					<td class='panier_item_color_text'>".$value['color']."<span class='panier_item_color'></span></td>
					<td><a href='r0_removefromcart.php?brand=".$value['brand']."&name=".$value['name']."&color=".$value['color']."'><img class='destroy' src='sources/images/trash.jpg'></a></td>
				</tr>";
			$total_price += $value['price'];
		}
		echo "<tr>
				<td id='checkout_total'>Total</td>
				<td id='checkout_total_value'>$".$total_price."</td>
				<td>
					<form action='checkout.php' method='get'>";
		if ($_SESSION['logged'])
			echo "<input id='valid_panier' type='submit' name='submit' value='Valider le panier' />";
		else
			echo "Connectez vous pour valider votre panier";
	
		echo "		</form>
				</td>
			</tr>";
	}
    else
        echo "Your cart is empty";
?>				
		</table>
	</DIV>
</BODY>
</HTML>