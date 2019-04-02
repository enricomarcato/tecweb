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
	<a id="top"></a>
	<header><?php require('../layout/header.html')?></header>
    <nav><?php require('../layout/nav.php')?></nav>
	<div class="content col-m-11 col-d-11 col-l-11">  
		<?php
			echo "Ti sei loggato come " . $_SESSION['user'] . " ... Tra 5 secondo verrai reindirizzato alla home. ";
			header("refresh:5;url=home.php");
			echo "Se il tuo browser non supporta il redirect clicca <a href='home.php'>qui</a>.";
		?>
	</div>
	
	
	<footer><?php require('../layout/footer.php')?></footer>
</body>

</html> 