<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Sportizer</a></h1>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="index.php" accesskey="1" title="">Homepage</a></li>
					<li><a href="account.php" accesskey="2" title="">Il tuo account</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="page" class="container">
		<div class="title">
			<h2>Benvenuto nel nostro sito!</h2>
		</div>
		<p>Questo è <strong>Sportizer</strong>, un sito gratuito, nel quale potrai prenotare dei campi in cui poter praticare, da solo o con i tuoi amici, vari sport.   </p>
		<p>Qui di sotto ti elenchiamo le possibilità che ti offriamo.</p>
	</div>
</div>
<div id="wrapper">
	<div id="portfolio" class="container">
		<div class="column1">
			<div class="box"> <img src="images/calcetto.jpg" alt="" class="image image-full" /></a>
				<h3> Calcetto</h3>
				<p>Cliccando nel bottone arancione qui sotto potrai accedere alla pagina nella quale potrai prenotare uno dei nostri campi da calcetto</p>
				<a href="calcetto.php" class="button button-small">Prenota un campo da calcetto</a> </div>
		</div>
		<div class="column2">
			<div class="box"> <img src="images/tennis.jpg" alt="" class="image image-full" /></a>
				<h3>Tennis</h3>
				<p>Cliccando nel bottone arancione qui sotto potrai accedere alla pagina nella quale potrai prenotare uno dei nostri campi da tennis</p>
				<a href="tennis.php" class="button button-small">Prenota un campo da tennis</a> </div>
		</div>
		<div class="column3">
			<div class="box"> <img src="images/volley.jpg" alt="" class="image image-full" /></a>
				<h3>Volley</h3>
				<p>Cliccando nel bottone arancione qui sotto potrai accedere alla pagina nella quale potrai prenotare uno dei nostri campi da volley</p>
				<a href="volley.php" class="button button-small">Prenota un campo da volley</a> </div>
		</div>
		<div class="column4">
			<div class="box"> <img src="images/basket.jpg" alt="" class="image image-full" /></a>
				<h3>Basket</h3>
				<p>Cliccando nel bottone arancione qui sotto potrai accedere alla pagina nella quale potrai prenotare uno dei nostri campi da basket</p>
				<a href="basket.php" class="button button-small">Prenota un campo da basket</a> </div>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Images for information purposes only | Designed by Davide Isoni </a>.</p>
</div>
</body>
</html>
