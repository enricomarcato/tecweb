<!DOCTYPE html>
<html lang="it">
<head >
    <meta charset="UTF-8"> 
    <meta name="keywords" content="home festival, music festival, music, home festival treviso, festival treviso">
    <meta name="description" content="">
    <meta name="author" content="Alberto Bobbo, Michele Bortone, Enrico Marcato">
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
		<div class="content col-m-11 col-d-11 col-l-11"> <h2 lang="en">There is no place like home. Il festival più grande d'Italia con gruppi da tutto il mondo.</h2></div>
		<div class="newsletter col-m-11 col-d-11 col-l-11">
		<fieldset id="newsfield">
			<legend id="nomepagina" lang="it">Iscriviti alla Newsletter</legend>
			<form id="news" action="home.php"  method="post">
			<label for="email">Email:</label><br/>
		    <input type="text" onkeyup="validateMail()" name="email" id="email"/>
            <input id="invia" type="submit" value="Invia" disabled/>
            </form>
            <h5 id="resultemail">&nbsp; </h5>
        </fieldset>
        <div id ="error" class="error"></div>
		</div>
		<?php
			if(isset($_POST['email'])){
				$email = $_POST['email'];
				echo "<div class='content col-m-11 col-d-11 col-l-11'> ";
				if(!$email) echo "Compila il Campo!</div>";
				else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) echo "Indirizzo email non corretto</div>";
				else{
					$query = "INSERT INTO newsletter (email) VALUES ('" . $_POST['email'] . "')";
					$conn->query($query);
					echo "Iscrizione avvenuta!</div>";
				}

			}  
		?>	
	<div class="sx col-m-11 col-d-7 col-l-7"> 
	<div class="newsletter col-m-11 col-d-11 col-l-11">
	<h3> Articolo più recente: </h3>
	<?php
			$query = "SELECT codArt, titolo, dataOra, testo FROM articoli ORDER BY codArt DESC LIMIT 1";
				$result = $conn->query($query);
				if ($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
					echo " <div> <h1 class='col-m-11 col-d-11 col-l-11'><a href='article.php?codArt=" . $row['codArt'] . "'>". $row['titolo'] . "</a></h1> ";
					echo "Data: " . $row['dataOra'] . "<br/>";
					echo "<p class='testo col-m-11 col-d-11 col-l-11'><a href='article.php?codArt=" . $row['codArt'] . "'>". $row['testo'] . "</a></p></div>";
					}
				}
		?>
		</div>
		
	</div>
	<a href="lineup.php"><img alt="artisti presenti" src="../images/LineUp.jpg" class="lineup col-m-11 col-d-5 col-l-5"></a>
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
