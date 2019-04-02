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
			$query = "DELETE FROM commenti WHERE codC=" . $_GET['codC'];
			if ($conn->query($query) === TRUE) {
				echo "Commento eliminato. Verrai reindirizzato alla pagina Articolo tra 5 secondi...";
				$url="refresh:5;url=article.php?codArt=" . $_GET['codArt'];
				header($url);
				echo "Se il tuo browser non supporta il redirect clicca <a href='article.php?codArt=" . $_GET['codArt'] . "'>qui</a>.";
			} 
			else echo "Errore durante l'eliminazione del commento: " . $conn->error;
		?>
	</div>
	
	
	<footer><?php require('../layout/footer.php')?></footer>
</body>

</html> 
