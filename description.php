<?php
session_start();
?>
<HTML>
<HEAD>
	<meta charset="utf-8" />
	<TITLE>Legendary Motorsports</TITLE>
	<link rel="stylesheet" type="text/css" href="./sources/index.css" />
</HEAD>
<BODY>
	<DIV id="banner">
		<span>
			<a href="index.php"><img id="banner_img" src="sources/images/banner-img.png" alt="Legendary Motorsport">
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
<?php
	$gets = "id=".$_GET['id'].
			"&brand=".$_GET['brand'].
			"&name=".$_GET['name'].
			"&price=".$_GET['price'].
			"&topspeed=".$_GET['topspeed'].
			"&acceleration=".$_GET['acceleration'].
			"&brake=".$_GET['brake'].
			"&traction=".$_GET['traction']."&img=".$_GET['img'];
	echo "<DIV id='description_car_name'>".$_GET['brand']."&nbsp;".$_GET['name']."</DIV>
		  <DIV id='description_price'>$".$_GET['price']."</DIV>
		</DIV>
	   <DIV id='description_image_div'><img id='description_image' src='".$_GET['img']."'>
		  <span id='description_colors'>Available colors<br />";
	if ($_GET['color'] == 'red')
		echo "<a href='?".$gets."&color=red#core'><DIV id='RED' style='box-shadow:0px 0px 5px 15px white;'></DIV></a>";
	else
		echo "<a href='?".$gets."&color=red#core'><DIV id='RED'></DIV></a>";
	if ($_GET['color'] == 'pink')
		echo "<a href='?".$gets."&color=pink#core'><DIV id='PINK' style='box-shadow:0px 0px 5px 15px white;'></DIV></a>";
	else
		echo "<a href='?".$gets."&color=pink#core'><DIV id='PINK'></DIV></a>";
	if ($_GET['color'] == 'orange')
		echo "<a href='?".$gets."&color=orange#core'><DIV id='ORANGE' style='box-shadow:0px 0px 5px 15px white;'></DIV></a>";
	else
		echo "<a href='?".$gets."&color=orange#core'><DIV id='ORANGE'></DIV></a>";
	if ($_GET['color'] == 'yellow')
		echo "<a href='?".$gets."&color=yellow#core'><DIV id='YELLOW' style='box-shadow:0px 0px 5px 15px white;'></DIV></a>";
	else
		echo "<a href='?".$gets."&color=yellow#core'><DIV id='YELLOW'></DIV></a>";
	if ($_GET['color'] == 'green')
		echo "<a href='?".$gets."&color=green#core'><DIV id='GREEN' style='box-shadow:0px 0px 5px 15px white;'></DIV></a>";
	else
		echo "<a href='?".$gets."&color=green#core'><DIV id='GREEN'></DIV></a>";
	if ($_GET['color'] == 'blue')
		echo "<a href='?".$gets."&color=blue#core'><DIV id='BLUE' style='box-shadow:0px 0px 5px 15px white;'></DIV></a>";
	else
		echo "<a href='?".$gets."&color=blue#core'><DIV id='BLUE'></DIV></a>";
	if ($_GET['color'] == 'black')
		echo "<a href='?".$gets."&color=black#core'><DIV id='BLACK' style='box-shadow:0px 0px 5px 15px white;'></DIV></a>";
	else
		echo "<a href='?".$gets."&color=black#core'><DIV id='BLACK'></DIV></a>";
	if ($_GET['color'] == 'white')
		echo "<a href='?".$gets."&color=white#core'><DIV id='WHITE' style='box-shadow:0px 0px 5px 15px white;'></DIV></a>";
	else
		echo "<a href='?".$gets."&color=white#core'><DIV id='WHITE'></DIV></a>";
	echo "</span>
		<DIV id='stats'><span>Statistiques du v&eacute;hicule</span>
		<table id='description_stats_table'>
			<tr><td class='description_stats'>Vitesse maximum :</td><td class='description_stats_numbers'>".$_GET['topspeed']." / 5</td></tr>
			<tr><td class='description_stats'>Acc&eacute;leration :</td><td class='description_stats_numbers'>".$_GET['acceleration']." / 5</td></tr>
			<tr><td class='description_stats'>Freinage :</td><td class='description_stats_numbers'>".$_GET['brake']." / 5</td></tr>
			<tr><td class='description_stats'>Tenue de route :</td><td class='description_stats_numbers'>".$_GET['traction']." / 5</td></tr>
        </table>
        </DIV>";
	if ($_GET['color'])
        echo "<a style ='text-decoration:none;' href='r0_add2cart.php?".$gets."&color=".$_GET['color']."'><DIV id ='description_order'>Order<img id='description_panier_black' src='sources/images/panier_black.jpg' /></DIV></a>";
    else
        echo "<DIV id ='description_pick_color'>Choisissez une couleur</DIV>";
?>
 </body>
</html>