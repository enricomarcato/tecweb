<!DOCTYPE html>
<html lang="it">
<head >
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
        <div class="mapsite col-m-11 col-d-11 col-l-11">
        <a href="../pages/home.php">Home:</a> 
        <p>Vetrina principale del sito, contenente l'ultima news e un riassunto dei partecipanti al festival</p>
        </div>
        <div class="mapsite col-m-11 col-d-11 col-l-11">
        <a href="../pages/news.php">News:</a>
        <p>Tutte le novita'del festival</p>
        </div>
        <div class="mapsite col-m-11 col-d-11 col-l-11">
        <a href="../pages/lineup.php">LineUp:</a>
        <p>Tutti gli artisti presenti al festival</p>
        </div>
        <div class="mapsite col-m-11 col-d-11 col-l-11">
        <a href="../pages/biglietti.php">Biglietti:</a>
        <p>Tipologie di biglietti disponibili</p>
        </div>
        <div class="mapsite col-m-11 col-d-11 col-l-11">  
        <a href="../pages/map.php">Come arrivare:</a>
        <p>Suggerimenti su come raggiungere il luogo del festival</p>
        </div>
        <div class="mapsite col-m-11 col-d-11 col-l-11">
        <a href="../pages/orari.php">Orari:</a>
        <p>Gli orari di quando si esibiranno gli artisti</p>    
        </div>
        <div class="mapsite col-m-11 col-d-11 col-l-11">
        <a href="../pages/login.php">Login:</a>
        <p>Accedere al sito avendo la possibilita'di commentare gli articoli</p>    
        </div>
        <div class="mapsite col-m-11 col-d-11 col-l-11">
        <a href="../pages/register.php">Registrati:</a>
        <p>Registrazione al sito</p>
        </div>    

	<div class="top">
        <noscript>
		  <a  href="#top"><img  src="../images/buttonup.png" alt="Torna Su"/></a>
        </noscript>
        <img src="../images/buttonup.png" onClick=topFunction() id="goTop">  
		</div>
	</div>
	<footer class="footer"><?php require('../layout/footer.php')?></footer>
      
</body>


</html> 
