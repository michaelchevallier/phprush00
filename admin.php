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
  			<option id="admin_add_brand" value="addbrand">Ajouter une marque</option>
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
			<form id="add_brand" action="add_brand.php" method="GET">
				<div>Ajouter une marque :<input type="text" name ="name" maxlength="15" />
				<input type ="submit" name="submit" value="OK"></div>
			</form>
			<table class="produits">
			<tr><td>Cr&eacute;ation nouvelle r&eacute;f&eacute;rence:</td></tr>
			<form action="add_ref.php" method="GET">
			<tr><td>Marque:</td><td> <select name="brand" id="brand">
  							<option value="1" selected>Truffade</option> 
  							<option value="2">Alabany</option>
  							<option value="3">Annis</option>
  							<option value="4">Benefactor</option>
 		 					<option value="5">Bravado</option>
  							<option value="6">Coil</option>
  							<option value="7">Declasse</option>
  							<option value="8">Dewbauchee</option>
  							<option value="9">Dinka</option>
  							<option value="10">Enus</option>
  							<option value="11">Gallivanter</option>
  							<option value="12">Grotti</option>
  							<option value="13">Hijak</option>
  							<option value="14">Imponte</option>
  							<option value="15">Invetero</option>
  							<option value="16">Lampadati</option>
  							<option value="17">Nagasaki</option>
  							<option value="18">Obey</option>
  							<option value="19">Overflod</option>
	  						<option value="20">Pegassi</option>
	  						<option value="21">Pfister</option>
	  						<option value="22">Principe</option>
	  						<option value="23">Progen</option>
	  						<option value="24">Vapid</option>
				</select></td></tr>
			<tr><td>Mod&egrave;le:</td> <td><input type="text" name ="name" maxlength="15" /></td></tr>
			<br />
			<br />
			<tr><td>Prix :</td><td><input type="number" name="Price" maxlength="15"></td></tr>
			<br />
			<br />
			<tr><td>Places :</td><td><input type="number" name="capacity" maxlength="2"></td></tr>
			<br />
			<br />
			<tr><td>Vitesse maximale :</td><td><input type="number" name="topspeed" maxlength="6"></td></tr>
			<br />
			<br />
			<tr><td>Acceleration :</td><td><input type="number" name="acceleration" maxlength="6"></td></tr>
			<br />
			<br />
			<tr><td>Freinage :</td><td><input type="number" name="brake" maxlength="6"></td></tr>
			<br />
			<br />
			<tr><td>Tenue de route :</td><td><input type="number" name="traction" maxlength="6"></td></tr>
			<br />
			<br />
			<tr><td>Image :</td><td><input type="url" name="image"></td></tr>
			<br />
			<br />
			<br />
			<tr><td>Soumettre:</td><td><input type="submit" name="submit" value="OK"></td></tr>
			</form>
			</table>			
		</div>
	</DIV>