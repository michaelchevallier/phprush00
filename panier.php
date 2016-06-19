<?PHP
?>

<HTML>
<HEAD>
<script>
<!--
/*
Auto Refresh Page with Time script
By JavaScript Kit (javascriptkit.com)
Over 200+ free scripts here!
*/

//enter refresh time in "minutes:seconds" Minutes should range from 0 to inifinity. Seconds should range from 0 to 59
var limit="0:05"

var doctitle = document.title
var parselimit=limit.split(":")
	parselimit=parselimit[0]*60+parselimit[1]*1

function beginrefresh(){
if (parselimit==1)
	window.location.reload()
	else{
		parselimit-=1
		curmin=Math.floor(parselimit/60)
		cursec=parselimitvw60
		if (curmin!=0)
			curtime=curmin+" minutes and "+cursec+" seconds left until page refresh!"
		else
			curtime=cursec+" seconds left until page refresh!"
			document.title = doctitle + ' (' + curtime +')'
			setTimeout("beginrefresh()",1000)
		}
																								}

if (window.addEventListener)
	window.addEventListener("load", beginrefresh, false)
else if (window.attachEvent)
	window.attachEvent("load", beginrefresh)
</script>

	<meta charset="utf-8" />
	<TITLE>Legendary Motorsports</TITLE>
	<link rel="stylesheet" type="text/css" href="sources/index.css" />

</HEAD>
<BODY>
	<DIV id="banner">
		<img id="banner_img" SRC = "sources/images/banner-img.png" alt="Legendary Motorsport"/>
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
		<DIV id="panier"><img id="panier_black" src="sources/images/panier_black.jpg"> Votre Panier<br /><br /></DIV>
		<table class="panier_row">
			<tr>
				<td class="panier_content"></td>
				<td class="panier_item_name">item name</td>
				<td class="panier_item_color_text">Couleur<span class="panier_item_color"></span></td>
				<td><form action="destroy.php" method="GET"><img class="destroy" src="sources/images/trash.jpg"</td>
			</tr>
			<tr>
				<td class="panier_content"></td>
				<td class="panier_item_name">item name</td>
				<td class="panier_item_color_text">Couleur<span class="panier_item_color"></span></td>
				<td><form action="destroy.php" method="GET"><img class="destroy" src="sources/images/trash.jpg"</td>
			</tr>
			<tr>
				<td class="panier_content"></td>
				<td class="panier_item_name">item name</td>
				<td class="panier_item_color_text">Couleur<span class="panier_item_color"></span></td>
				<td><form action="destroy.php" method="GET"><img class="destroy" src="sources/images/trash.jpg"</td>
			</tr>
			<tr>
				<td class="panier_content"></td>
				<td class="panier_item_name">item name</td>
				<td class="panier_item_color_text">Couleur<span class="panier_item_color"></span></td>
				<td><form action="destroy.php" method="GET"><img class="destroy" src="sources/images/trash.jpg"</td>
			</tr>
			<tr>
				<td class="panier_content"></td>
				<td class="panier_item_name">item name</td>
				<td class="panier_item_color_text">Couleur<span class="panier_item_color"></span></td>
				<td><form action="destroy.php" method="GET"><img class="destroy" src="sources/images/trash.jpg"</td>
			</tr>
			<tr>
				<td class="panier_content"></td>
				<td class="panier_item_name">item name</td>
				<td class="panier_item_color_text">Couleur<span class="panier_item_color"></span></td>
				<td><form action="destroy.php" method="GET"><img class="destroy" src="sources/images/trash.jpg"</td>
			</tr>
			<tr>
				<td class="panier_content"></td>
				<td class="panier_item_name">item name</td>
				<td class="panier_item_color_text">Couleur<span class="panier_item_color"></span></td>
				<td><form action="destroy.php" method="GET"><img class="destroy" src="sources/images/trash.jpg"</td>
			</tr>
			<tr>
				<td id="checkout_total">Total</td>
				<td id="checkout_total_value">10000000</td>
				<td>
					<form action="checkout.php" method="GET">
						<input id="valid_panier" type="submit" name="submit" value="Valider le panier" />
					</form>
				</td>
			</tr>
			</tr>
		</table>
		

	</DIV>
</BODY>
</HTML>