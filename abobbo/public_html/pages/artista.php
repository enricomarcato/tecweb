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
			$path= "../images/GroupsPic/";
			$query = "SELECT * FROM artisti WHERE codArtista = " . $_GET['codArtista'];
			$result = $conn->query($query);
			if ($result->num_rows > 0){
				$row = $result->fetch_assoc();
				echo " <div class='artista col-m-11 col-d-11 col-l-11'> <h1>" . $row['nome'] . "</h1> ";
				echo "Inizio spettacolo: " . $row['dataOra'] . "<br/>";
				echo " <img src=" . $path . $row['immagine' ] . " alt='immagine artista'>";
				echo "<p>" . $row['descrizione'] . "</p> </div> ";
			}
		?>
	<div class="top">
        <noscript>
		  <a  href="#top"><img  src="../images/buttonup.png" alt="Torna Su"/></a>
        </noscript>
        </div>
        <img src="../images/buttonup.png" onClick=topFunction() id="goTop">  
    </div>
	<footer><?php require('../layout/footer.php')?></footer>
</body>

</html> 
