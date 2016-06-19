<?php
?>

<HTML>
<HEAD>
	<meta charset="utf-8" />
	<TITLE>Legendary Motorsports</TITLE>
	<link rel="stylesheet" type="text/css" href="sources/index.css" />

</HEAD>
<BODY>
	<DIV id="banner">
		<span>
			<a href="index.php"><img id="banner_img" SRC = "sources/images/banner-img.png" alt="Legendary Motorsport">
			</a>
		</span>
		<ul id="panier_menu">
			<a href="panier.php">Panier
				<img id="panier_black_menu" src="sources/images/panier_black.jpg">
			</a>
		</ul>
		<ul id="body_menu">
			<li id="connexion">Connexion
				<ul id="scroll_menu">
				<form action="create.php" method="POST">
					<table id="table_scroll_menu"><tr><td>Identifiant: </td><td><input type="text" name="login" id="login"/></td></tr>
						<tr><td>Mot de passe: </td><td><input type="password" name="passwd" id="pass"/></td>
						<td><input id="connexion" type="submit" name="submit" value="OK" /></td></tr>
					</table>
				</form>
					<li id="new_account_link"><a href="#">Cr&eacute;er un nouveau compte</a></li>
				</ul>
			</li>
		</ul>
	</DIV>
	<DIV id="core" style="min-height:60vw">
		<DIV id="description_car_price">
			<DIV id="description_car_name">car name</DIV>
			<DIV id="description_price">$10000000000</DIV>
		</DIV>
		<DIV id="description_image_div"><img id="description_image" src="http://vignette1.wikia.nocookie.net/gtawiki/images/9/94/Alpha-GTAV-front.png/revision/latest?cb=20150529155505">
		<form id="description_colors">Available colors<br />
			<input type="radio" name="color" id="RED" value="RED">
			<input type="radio" name="color" id="PINK" value="PINK">
			<input type="radio" name="color" id="YELLOW" value="YELLOW">
			<input type="radio" name="color" id="ORANGE" value="ORANGE">
			<input type="radio" name="color" id="GREEN" value="GREEN">
			<input type="radio" name="color" id="BLUE" value="BLUE">
			<input type="radio" name="color" id="BLACK" value="BLACK">
			<input type="radio" name="color" id="WHITE" value="WHITE">
			<DIV id="RED"></DIV>
			<DIV id="PINK"></DIV>
			<DIV id="YELLOW"></DIV>
			<DIV id="ORANGE"></DIV>
			<DIV id="GREEN"></DIV>
			<DIV id="BLUE"></DIV>
			<DIV id="BLACK"></DIV>
			<DIV id="WHITE"></DIV>
		</form>
		<DIV id="stats"><span>Vehicle stats</span>
		<table id="description_stats_table">
			<tr><td class="description_stats">Top Speed :</td><td class="description_stats_numbers">4.3</td></tr>
			<tr><td class="description_stats">Acceleration :</td><td class="description_stats_numbers">3.0</td></tr>
			<tr><td class="description_stats">Braking :</td><td class="description_stats_numbers">2.4</td></tr>
			<tr><td class="description_stats">Traction :</td><td class="description_stats_numbers">3.7</td></tr>
		</table>
		</DIV>
		<form action="order.php" method="POST">
			<DIV id ="description_order"> Order
				<img id="description_panier_black" src="sources/images/panier_black.jpg"/>
			</DIV>
		</form>