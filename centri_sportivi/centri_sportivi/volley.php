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
			<h2>Prenota un campo da volley</h2>
		</div>
		<p>Benvenuto nella pagina di prenotazione dei campi da volley.</p>
		<p>In questa pagina ti sarà consentito di scegliere uno tra i nostri <strong>campi da volley</strong>, da prenotare per le tue giornate di svago o di allenamento.   </p>
		<p>Qui di sotto ti elenchiamo i nostri campi, in fondo alla pagina potrai inviare la tua prenotazione completando i campi richiesti.</p>
	</div>
</div>
<div id="wrapper">
	<div id="portfolio" class="container">
		<div class="column1">
			<div class="box"> <img src="images/volley_chiuso.jpg" alt="" class="image image-full" /></a>
				<h3> Volley al coperto</h3>
				<p>Questo è il classico campo da volley al coperto. <br> Qui sarai riparato da eventuali interperie per assicurarti di praticare il tuo sport preferito senza essere condizionato dalle condizioni atmosferiche, il tutto in un campo all'avanguardia e ben curato.</p>
				</div>
		</div>
		<div class="column2">
			<div class="box"> <img src="images/volley_aperto.jpg" alt="" class="image image-full" /></a>
				<h3>Volley all'aperto</h3>
				<p>Questo è il classico campo da volley all'aperto. <br> Qui potrai praticare il tuo sport preferito all'aperto, stando a contatto con la natura, in un ambiente circondato dal verde. Il campo è provvisto di rete esterna per rendere facilmente recuperabile il pallone.</p>
				</div>
		</div>
		<div class="column3">
			<div class="box"> <img src="images/volley_legno.jpg" alt="" class="image image-full" /></a>
				<h3>Volley "di classe"</h3>
				<p>Questo è un campo da volley "di classe". È realizzato con una pavimentazione in legno laccato proveniente dall'Italia. Nonostante la pavimentazione in legno, è garantita una solida aderenza del suolo alle scarpe, rendendo così l'esperienza di gioco divertente e sicura.</p>
				</div>
		</div>
		<div class="column4">
			<div class="box"> <img src="images/volley_spiaggia.jpg" alt="" class="image image-full" /></a>
				<h3>Beach Volley</h3>
				<p>Questo è un campo da volley in spiaggia. Qui potrai giocare in assoluta comodità, in un campo con sabbia fine e controllata giornalmente pur di garantirne la perfezione al fine del gioco comodo e sicuro anche a piedi nudi senza scarpe o ciabatte, il tutto stando vicino al mare.</p>
				</div>
		</div>
		<p>
		<br>
		<br>
		<h1> Inserisci la tua prenotazione </h1>
		</p>
		<div class="module">
			<form class="form" action="volley.php" method="post" >
				<table>
					<tr>
						<p> Inserisci la data che vuoi prenotare;  &emsp; &emsp;<input type="date" placeholder="Data" name="data" required /></p>
					</tr>
					<tr>
						<td>Inserisci il campo che vuoi prenotare: </td>
						<td>
							<select id = "id_campo" name="id_campo">
								<option value="10">Volley al coperto</option>
								<option value="11">Volley all'aperto</option>
								<option value="12">Volley "di classe"</option>
								<option value="13">Beach volley</option>
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
