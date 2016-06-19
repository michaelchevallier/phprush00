<?php
session_start()
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
	<DIV id="core" style="min-height:90vw">
		<select name="select_task" id="admin_select_task">
  			<option id="admin_commandes" value="commandes" selected>Commandes</option> 
  			<option id="admin_compte" value="compte">Comptes utilisateurs</option>
  			<option id="admin_produits" value="produits">Gestion produits</option>
		</select>
		<div>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			<DIV class="commandes">
				Utilisateur name commande n*
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			
			<DIV class="compte">
				Utilisateur account
			</DIV>
			<form action="admin_view.php" method="GET">
				<img class="admin_view" src="sources/images/oeil.png">
			</form>
			<form action="admin_destroy.php" method="GET">
				<img class="admin_destroy" src="sources/images/trash.jpg">
			</form>
			

		</div>
	</DIV>