<?php
session_start();
$_SESSION['message'] = '';

$mysqli = new mysqli('localhost', 'root', '', 'centri_sportivi');

if($_SERVER['REQUEST_METHOD']=='POST'){

    $id_campo = htmlentities($_POST['id_campo']);
		$username = $_SESSION['username'];
    $data = htmlentities($_POST['data']);
		$date_query = "SELECT data_prenotazione FROM prenotazioni WHERE campo = '$id_campo' AND data_prenotazione='$data'";
		$res_date = mysqli_query($mysqli, $date_query);
		// controllo che non sia già stato prenotato
		if ($res_date->num_rows != 0){
			header('location:errore.php');
		} else{
			$query = "SELECT id FROM users WHERE username = '$username'";
			$res = mysqli_query($mysqli, $query);
			$id_prenotatore = $res->fetch_array();
			$id_prenotatore = intval($id_prenotatore[0]);
			$sql = "INSERT INTO prenotazioni (campo,data_prenotazione,id_prenotatore) VALUES ('$id_campo','$data','$id_prenotatore')";
			if($mysqli->query($sql)===true){
				header('location: index.php');
				exit();
		} else{
			header('location: errore.php');
		}
	}
}

?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
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
					<li><a href="#" accesskey="2" title="">Il tuo account</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="page" class="container">
		<div class="title">
			<h2>Prenota un campo da tennis</h2>
		</div>
		<p>Benvenuto nella pagina di prenotazione dei campi da tennis.</p>
		<p>In questa pagina ti sarà consentito di scegliere uno tra i nostri <strong>campi da tennis</strong>, da prenotare per le tue giornate di svago o di allenamento.   </p>
		<p>Qui di sotto ti elenchiamo i nostri campi, in fondo alla pagina potrai inviare la tua prenotazione completando i campi richiesti.</p>
	</div>
</div>
<div id="wrapper">
	<div id="portfolio" class="container">
		<div class="column1">
			<div class="box"> <a href="#"><img src="images/tennis_coperto.jpg" alt="" class="image image-full" /></a>
				<h3> Tennis al coperto</h3>
				<p>Questo è il classico campo da tennis al coperto. <br> Qui sarai riparato da eventuali interperie per assicurarti di praticare il tuo sport preferito senza essere condizionato dalle condizioni atmosferiche, il tutto in un campo perfetto e controllato giornalmente.</p>
				</div>
		</div>
		<div class="column2">
			<div class="box"> <a href="#"><img src="images/tennis_aperto.jpg" alt="" class="image image-full" /></a>
				<h3>Tennis all'aperto</h3>
				<p>Questo è il classico campo da tennis all'aperto. Qui potrai praticare il tuo sport preferito all'aperto, in un ambiente urbano, ma non per questo meno tranquillo. Il campo è circondato da una rete alta e resistente in modo che le palline siano più comode da recuperare.</p>
				</div>
		</div>
		<div class="column3">
			<div class="box"> <a href="#"><img src="images/tennis_verde.jpg" alt="" class="image image-full" /></a>
				<h3>Tennis nel verde</h3>
				<p>Questo è un campo da tennis immerso nel verde. Si trova nel bel mezzo di una località in collina. Prenotando questo campo ti sara possibile godere di un panorama fantastico mentre pratichi il tuo sport preferito. Il campo è circondato da una rete bassa ma essenziale.</p>
				</div>
		</div>
		<div class="column4">
			<div class="box"> <a href="#"><img src="images/tennis_spiaggia.jpg" alt="" class="image image-full" /></a>
				<h3>Tennis al mare</h3>
				<p>Questo è un campo da tennis vicino al mare. Si trova nelle immediate vicinanze del mare, in una località turistica dotata di mare cristallino nel quale potersi rilassare dopo una partita di tennis stancante. Non è provvisto di rete protettiva, per ciò il prezzo sarà contenuto.</p>
				</div>
		</div>
		<p>
		<br>
		<br>
		<h1> Inserisci la tua prenotazione </h1>
		</p>
		<div class="module">
			<form class="form" action="tennis.php" method="post" >
				<table>
					<tr>
						<p> Inserisci la data che vuoi prenotare;  &emsp; &emsp;<input type="date" placeholder="Data" name="data" required /></p>
					</tr>
					<tr>
						<td>Inserisci il campo che vuoi prenotare: </td>
						<td>
							<select id = "id_campo" name="id_campo">
								<option value="6">Tennis al coperto</option>
								<option value="7">Tennis all'aperto</option>
								<option value="8">Tennis nel verde</option>
								<option value="9">Tennis al mare</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
						<input type="submit" value="Invia prenotazione" ></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Images for information purposes only | Designed by Davide Isoni </a>.</p>
</div>
</body>
</html>
