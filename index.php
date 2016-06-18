<?PHP
session_start();
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
var limit="0:15"

var doctitle = document.title
var parselimit=limit.split(":")
	parselimit=parselimit[0]*60+parselimit[1]*1

function beginrefresh(){
if (parselimit==1)
	window.location.reload()
	else{
		parselimit-=1
		curmin=Math.floor(parselimit/60)
		cursec=parselimit%60
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
	<link rel="stylesheet" type="text/css" href="legendary.css" />

</HEAD>
<BODY>
	<DIV id="banner">
		<img id="banner_img" SRC = "sources/images/banner-img.png" alt="Legendary Motorsport"/>
		<ul id="body_menu">
			<li id="connexion">Connexion
				<ul id="scroll_menu">
				<form action="create.php" method="post">
					<table><tr><td>Identifiant: </td><td><input type="text" name="login" id="login"/></td></tr>
					<tr><td>Mot de passe: </td><td><input type="password" name="passwd" id="pass"/></td>
					<td><input type="submit" name="submit" value="OK" /></td></tr>
				</table>
				</form>
					<li id="new_account_link"><a href="#">Cr&eacute;er un nouveau compte</a>
				</ul>
			</li>
		</ul>
	</DIV>
	<DIV id="core">
		<DIV>
			<form id="sort_by_form" action="sort_by.php" method="post">
				<select id ="sort_by" name="sort_by">
					<option selected value="prix" checked>Tri par prix</option>
					<option value="new_first" checked>Tri par nouveau en premier</option>
					<option value="old_first" checked>Tri par ancien en premier</option>
				</select>
				<input id ="sort_by_submit" type="submit" value="Trier"/>
			</form>	
		</DIV>
		<DIV class="content"></DIV>
		<DIV class="content"></DIV>
		<DIV class="content"></DIV>
		<DIV class="content"></DIV>
		<DIV class="content"></DIV>
		<DIV class="content"></DIV>
		<DIV class="content"></DIV>
		<DIV class="content"></DIV>
		<DIV class="content"></DIV>
		<DIV class="content"></DIV>
		<DIV class="content"></DIV>
	
	</DIV>

</BODY>
</HTML>