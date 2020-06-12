<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$mysqli = new mysqli('localhost', 'root', '', 'centri_sportivi');

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
			<h2>è avvenuto un errore, clicca sul pulsante homepage in alto a sinistra per tornare alla pagina iniziale</h2>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Images for information purposes only | Designed by Davide Isoni </a>.</p>
</div>
</body>
</html>
