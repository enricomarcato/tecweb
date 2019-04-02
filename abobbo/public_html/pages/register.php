<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
	<link href="../css/print.css" type="text/css" rel="stylesheet" media="print" />
    <script src="../js/Script.js"></script>
    <title lang="en">Home Festival</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<header><?php require('../layout/header.html')?></header>
    <nav><?php require('../layout/nav.php')?></nav>
    <div class="content col-m-11 col-d-11 col-l-11">
	<?php 
		if (isset($_POST['email']) && isset($_POST['user']) && isset($_POST['password']) && isset($_POST['nome'])){
			echo "<div class='logreg'>";
			$email=$_POST['email'];
			$nome=$_POST['nome'];
			$user=$_POST['user'];
			$password=$_POST['password'];
			if(!$email) echo "Compila il campo Email";
			else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) echo "Indirizzo email non corretto.";
			else if(!$nome) echo "Compila il campo Nome e Cognome.";
			else if (!preg_match('/\S\s\S/',$nome)) echo 'Scrivi Nome e Cognome separati da uno spazio.'; 
			else if(!$user) echo "Compila il campo Username";
			else if (!preg_match('/.{4,}/',$user)) echo 'username inferiore a 4 caratteri.'; 
			else if(!$password) echo "Compila il campo Password";
			else if (!preg_match('/.{4,}/',$password)) echo 'Password inferiore a 4 caratteri'; 
			else{
				require('connection.php');
				$sql = "INSERT INTO utenti (email, username, password, nome) VALUES ('".$email."', '".$user."', '".$password."', '".$nome."')";
				if ($conn->query($sql)){
					if(isset($_POST['newsletter'])){
						$news = "INSERT INTO newsletter (email) VALUES ('".$email."')";
						$conn->query($news);
					}
					header('Location: checkRegistration.php');
				} 
				else{
					echo "Email già utilizzata.";
				}
			}
			echo "</div>";
		}
	?>
		<div class="logreg col-m-11 col-d-6 col-l-6" >
		<fieldset>
		<legend><h1 id="nomepagina">Registrazione</h1></legend>
		<h3>Completa i campi e procedi con la registrazione</h3>
        <form id="registration" action="register.php" onsubmit="return validateRegistration()" method="post">
        <label for="email">Email:</label>
        <input type="text" onkeyup="validateMail()" name="email" id="email"/> <h5 id="resultemail">&nbsp;</h5>
        <div id="email_error"></div>
        <label for="nome e cognome">Nome e Cognome:</label>
        <input type="text" onkeyup="validateNome()" name="nome" id="nome"/><h5 id="resultnome">&nbsp;</h5>
        <div id="name_error"></div>
        <label for="user">Username:</label>
        <input type="text" onkeyup="validateUsername()" name="user" id="user"/><h5 id="resultusername">&nbsp;</h5>
        <div id="username_error"></div>
        <label for="pass">Password:</label>
        <input type="password" onkeyup="validatePassword()" name="password" id="password"/> <h5 id="resultpassword">&nbsp;</h5>
		<div id="password_error"></div>
        <label for="newsletter">Ricevi newsletter</label>
		<input type="checkbox" name="newsletter" checked="1"/>
        <input id="invia" type="submit" value="Registrati" disabled/>
        </form> 
		</fieldset>
		</div>
    </div>
    <div class="top">
        <noscript>
            <a  href="#top"><img  src="../images/buttonup.png" alt="Torna Su"/></a>
        </noscript>
    </div>
    <img src="../images/buttonup.png" onClick=topFunction() id="goTop">  
	<footer><?php require('../layout/footer.php')?></footer>
</body>

</html> 