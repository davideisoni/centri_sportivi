<?php
session_start();
$_SESSION['loggedin']=false;
$_SESSION['message'] = '';

$mysqli = new mysqli('localhost', 'root', '', 'centri_sportivi');

if (isset($_POST['username'])) {
  $username = mysqli_real_escape_string($mysqli, $_POST['username']);
  $password = mysqli_real_escape_string($mysqli, $_POST['password']);

	$password = md5($password);
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $results = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($results) == 1) {
  	 $_SESSION['username'] = $username;
  	 $_SESSION['success'] = "You are now logged in";
     $_SESSION['loggedin']=true;
	   header('location: index.php');
	}else {
	   $_SESSION['message'] = "Le credenziali inserite sono errate, riprova";;
	}
}

?>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Accedi al tuo account</h1>
    <br>
    <a href = "form.php">
    <input type="submit" value="Non sei registrato? Registrati." name="register" class="btn btn-block btn-primary"/> </a>
    <form class="form" action="login.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"> <?= $_SESSION['message']?> </div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="submit" value="Accedi" name="login" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
