<?php 
define('__APP__', TRUE);
session_start();
include ("dbconn.php");

if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }

if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }

if (!isset($menu)) { $menu = 1; }

include_once("functions.php");

print '
<!DOCTYPE html>
<html>
	<head>
    <link rel="stylesheet" href="style.css">
    <title>d53Rent</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="Najam svih vrsta vozila.">
    <meta name="keywords" content="najam, auti, rent, vozila, povoljno">
    <meta name="author" content="Mario Baljak">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	</head>
<body>
	<header>
		<div'; { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
			print'
			<!--<ul class="prvi">
				<li class="prvi"><a href="index.php?menu=1">Naslovnica</a></li>
				<li class="prvi"><a href="index.php?menu=2">Vijesti</a></li>
				<li class="prvi"><a href="index.php?menu=3">Kontakt</a></li>
				<li class="prvi"><a href="index.php?menu=4">O nama</a></li>
                <li class="prvi"><a href="index.php?menu=5">Galerija</a></li>
                <li class="prvi"><a href="index.php?menu=6">Registracija</a></li>
				<li class="prvi"><a href="index.php?menu=7">Prijava</a></li>
				<li class="prvi"><a href="index.php?menu=9">Omdb</a></li>

		</ul>-->
		</nav>
	</header>
	<main>';
	if (isset($_SESSION['message'])) {
		print $_SESSION['message'];
		unset($_SESSION['message']);
	}
	# Homepage
	if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("home.php"); }
	
	# News
	else if ($_GET['menu'] == 2) { include("news.php"); }
	
	# Contact
	else if ($_GET['menu'] == 3) { include("contact.php"); }
	
	# About us
	else if ($_GET['menu'] == 4) { include("about-us.php"); }

    else if ($_GET['menu'] == 5) { include("gallery.php"); }
    else if ($_GET['menu'] == 6) { include("register.php"); }
	else if ($_GET['menu'] == 7) { include("signin.php"); }
	//else if ($_GET['menu'] == 8) { include("admin.php"); }
	else if ($menu == 8) { include("admin.php");}

	else if ($_GET['menu'] == 9) { include ("omdb.php");}
	else if ($_GET['menu'] == 10) { include ("IMAGIN.studioAPI.php");}
	else if ($_GET['menu'] == 11) { include ("chuck.php");}
	

	
	print '
	</main>
	<footer style class="footer">
        <p>Copyright; 2023 Mario Baljak <a href="https://github.com/mbaljak1/php_d53" target="_blank"><img src="img/github.png" style = "width: 15px" title="github"; alt="github"> </a></p>
    </footer>
</body>
</html>';
?>