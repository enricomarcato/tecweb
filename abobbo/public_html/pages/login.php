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
	<?php
	
	if (isset($_POST['email']) && isset($_POST['password'])){
		$user = $_POST['email'];
		$pass = $_POST['password'];
		if(!$user) echo "Compila il campo email";
		else if (!filter_var($user, FILTER_VALIDATE_EMAIL)) echo "Indirizzo email non corretto";
		else if(!$pass) echo "Compila il campo password";
		elseif (!preg_match('/.{4,}/',$pass)) echo 'Password inferiore a 4 caratteri';    
		else{
			//Verifica se i valori sono presenti nel database
			$query = "SELECT username, email, admin, password FROM utenti WHERE email='". $_POST["email"]."' AND password='" . $_POST['password'] . "'";
			$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
			$count = mysqli_num_rows($result);
			$row = mysqli_fetch_assoc($result);
			//Se i valori sono presenti nel database viene creata una sessione
			if ($count == 1){
				$_SESSION['email'] = $row['email'];
				$_SESSION['user'] = $row['username'];
				$_SESSION['admin'] = $row['admin'];
				header('Location: checkLogin.php');
			}
			else echo "Credenziali errate";
		}
	}
	?>
    <div class="content col-m-11 col-d-11 col-l-11">
	<div class="logreg col-m-11 col-d-6 col-l-6">
		<noscript>
        <?php
		if (isset($_POST['email']) && isset($_POST['password'])){
			echo "<h3>Login errato</h3>";
		}
		?>
        </noscript>
		<fieldset>
		<legend><h1 id="nomepagina" lang="it">Accedi</h1></legend>
        <form id="login" action="login.php" onsubmit="return validateLogin()" method="post">
        <label for="email" lang="en">Email:</label>
        <input type="text" onkeyup="validateMail()" name="email" id="email"/> <h5 id="resultemail">&nbsp;</h5>
		<label for="password" lang="en">Password:</label>
        <input type="password" onkeyup="validatePassword()"name="password" id="password"/> <h5 id="resultpassword">&nbsp;</h5>
        <input id="invia" type="submit" value="Accedi" lang="it" disabled/>
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
