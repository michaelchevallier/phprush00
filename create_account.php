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
	<DIV id="core" style="min-height: 65vmin;">
		<form action="register.php" method="POST">
			<table id="register_table">
			<tr></tr>
			<tr></tr>
				<tr><td class="register_td">Login :</td><td><input class="register_input" type="text" name="login"/></td></tr>
				<tr><td class="register_td">Mot de passe :</td><td><input class="register_input" type="password" name="password"/></td></tr>
				<tr><td class="register_td">R&eacute;peter le mot de passe :</td><td><input  class="register_input"type="password" name="password_dup"/></td></tr>
				<tr><td class="register_td">E-mail :</td><td><input  class="register_input" type="email" name="email"/></td></tr>
				<tr><td class="register_td">Adresse :</td><td><input  class="register_input" type="text" name="adress"/></td></tr>
				<tr><td class="register_td">Code postale :</td><td><input  class="register_input" type="text" name="zipcode"/></td></tr>
				<tr><td class="register_td">Ville :</td><td><input  class="register_input" type="text" name="city"/></td></tr>
				<tr><td class="register_td">Pays :</td><td><input  class="register_input" type="text" name="pays"/></td></tr>
			</table>
			<div><input id="register_submit" type='submit' name='submit' value='Envoyer'/></div>
		</form>
	</DIV>
</BODY>
</HTML>