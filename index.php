<?PHP
session_start();
include_once("r0f_dbselect.php");
?>
<HTML>
<HEAD>
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
<?php
    if (isset($_SESSION) && isset($_SESSION['logged']) && $_SESSION['logged'])
    {
        echo "You are logged as ".$_SESSION['logged_as']."<br /><a href='r0_logout.php'>logout</a>";
    }
    else
    {
        echo "<li id='connexion'>Connexion
                <ul id='scroll_menu'>
                  <form action='r0_login.php' method='post'>
                    <table>
                      <tr><td>Identifiant: </td><td><input type='text' name='login' id='login'/></td></tr>
                      <tr><td>Mot de passe: </td><td><input type='password' name='password' id='pass'/></td>
                      <td><input type='submit' name='submit' value='OK' /></td></tr>
                    </table>
                  </form>
               <li id='new_account_link'><a href='#'>Cr&eacute;er un nouveau compte</a>
                 </ul>
            </li>";
    }
?>
				</ul>
			</li>
		</ul>
	</DIV>
	<DIV id="core">
		<DIV id="forms">
			<DIV>
				<form id="sort_by_type_form" action="sort_by_type.php" method="post">
					<select id ="sort_by_type" name="sort_by_type">
						<option selected value="all">Tous les types</option>
<?php
	$objects = r0f_dbselect("SELECT * FROM P_TYPE ORDER BY pt_name;");
	foreach ($objects as $type)
		echo "<option value='".$type['pt_id']."'>".$type['pt_name']."</option>";
?>	
					</select>
					<input id ="sort_by_type_submit" type="submit" value="Trier"/>
				</form>	
			</DIV>
			<DIV>
				<form id="sort_by_form" action="sort_by.php" method="post">
					<select id ="sort_by" name="sort_by">
						<option selected value="name" checked>Tri par prix</option>
						<option value="new_first" checked>Tri par nouveau en premier</option>
						<option value="old_first" checked>Tri par ancien en premier</option>
					</select>
					<input id ="sort_by_submit" type="submit" value="Trier"/>
				</form>	
			</DIV>
		</DIV>
<?php
	$objects = r0f_dbselect("SELECT PRODUCT.*, P_BRAND.* FROM PRODUCT, P_BRAND WHERE PRODUCT.p_brand_id = P_BRAND.pb_id ORDER BY pb_name;");
	foreach ($objects as $car)
		echo "<DIV class='content'><img src='".$car['p_image']."'></img><span class='carname'>".$car['pb_name']."&nbsp;".$car['p_name']."</span><span class='price'>$&nbsp;".$car['p_price']."</DIV>";
?>	
	</DIV>

</BODY>
</HTML>