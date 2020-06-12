<?php
session_start();
$_SESSION['loggedin']=false;
$_SESSION['message'] = '';

$mysqli = new mysqli('localhost', 'root', '', 'centri_sportivi');

if($_SERVER['REQUEST_METHOD']=='POST'){
  // controllo se le password corrispondono
  if ($_POST['password']==$_POST['confirmpassword']){

    $username = $mysqli->real_escape_string($_POST['username']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = md5($_POST['password']); // cripto le password per la sicurezza
    $_SESSION['username'] = $username;

    $sql="INSERT INTO users (username, email, password)"
      . "VALUES ('$username', '$email','$password')";

    $username_query = "SELECT username FROM users WHERE username = '$username'";
    $email_query = "SELECT email FROM users WHERE email = '$email'";

  	$res_username = mysqli_query($mysqli, $username_query);
    $res_email = mysqli_query($mysqli, $email_query);

    // controllo che l'username o la password non siano già stati usati
    if ($res_username->num_rows == 0 && $res_email->num_rows == 0){
    $test=$mysqli->query($sql);

    // se la query funziona si viene reindirizzati
    if ($test===true) {
      $_SESSION['message'] = "Registrazione avvenuta con successo. $username è stato aggiunto al database";
      $_SESSION['loggedin']=true;
      header("location: index.php");
    }

    else {
      $_SESSION['message'] = "L'utente non può essere aggiunto";
    }

  } else{
      $_SESSION['message'] = "L'username o la mail sono già state usati, prova con altri dati.";
    }
  }

  else{
    $_SESSION['message'] = "Le password non corrispondono";
  }
}

?>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Crea un account</h1>
    <br>
    <a href = "login.php">
    <input type="submit" value="Già registrato? Accedi." name="login" class="btn btn-block btn-primary"/> </a>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"> <?= $_SESSION['message']?> </div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="Registrati" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
