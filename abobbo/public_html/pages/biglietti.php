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
	<h2>Biglietti</h2>
	<div class="biglietti col-m-11 col-d-11 col-l-11">
		<?php
			$query = "SELECT nome, descrizione FROM biglietti";
			$result = $conn->query($query);
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					echo " <div class='biglietto col-m-11 col-d-5 col-l-5'> <h1>" . $row['nome'] . "</h1> ";
					echo "<img class='col-m-12 col-d-12 col-l-12' src='../images/biglietto.jpg' alt='Immagine biglietto'/>";
					echo "<p>" . $row['descrizione'] . "</p> </div> ";
				}
			}
		?>
        <div class="top">
        <noscript>
		<a  href="#top"><img  src="../images/buttonup.png" alt="Torna Su"/></a>
        </noscript>
		</div>
        <img src="../images/buttonup.png" onClick=topFunction() id="goTop">  
    </div>
	</div>
	<footer><?php require('../layout/footer.php')?></footer>
</body>

</html> 
