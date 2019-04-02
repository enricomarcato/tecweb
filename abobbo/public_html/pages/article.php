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
    <div class=" articolo content col-m-11 col-d-11 col-l-11">
		<?php
			if(isset($_POST['comment'])){
				$comment=trim($_POST['comment']);
				if (!$comment) echo( "Campo Commento vuoto");
				else{
					$query = "INSERT INTO commenti (codC, testo, dataOra, emailUt, articolo) VALUES (NULL, '" . $comment . "', CURRENT_TIMESTAMP, '" . $_SESSION['email'] . "'," . $_GET['codArt'] . ")";
					$conn->query($query);
				}
			}
			
			$query = "SELECT titolo, testo, dataOra FROM articoli
						WHERE codArt=" . $_GET['codArt'];
			$result = $conn->query($query);
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					echo " <div id='articolo'> <h1 class='col-m-11 col-d-11 col-l-11'>" . $row['titolo'] . "</h1> ";
					echo "<p class='testo col-m-11 col-d-11 col-l-11'>". $row['dataOra'] ."</p>";
					echo "<p class='testo col-m-11 col-d-11 col-l-11'>" . $row['testo'] . "</p></div>";
				}
			}
			if(isset($_SESSION['email']) && $_SESSION['admin']==1){
				echo"<a href='eliminaArt.php?codArt=" . $_GET['codArt'] . "'>Elimina articolo</a>";
			}
			$query = "SELECT codC, emailUt, testo, dataOra, username FROM commenti,utenti WHERE emailUt = email AND articolo = " . strval($_GET['codArt']) . " ORDER BY dataOra DESC";
			$result = $conn->query($query);
			if ($result->num_rows > 0){
				echo "<h2 class='col-m-11 col-d-11 col-l-11'>Commenti:</h2>";
				while($row = $result->fetch_assoc()){
					echo "<div class='commento col-m-10 col-d-10 col-l-10'><p>" . $row['testo'] . " inviato da: " . $row['username'] . "   " . $row['dataOra'];
					if(isset($_SESSION['email'])){
						if($_SESSION['admin']==1){
							echo"<a href='eliminaCom.php?codC=" . $row['codC'] . "&codArt=" . $_GET['codArt'] . "'>Elimina commento</a>";
						}
						else if($_SESSION['admin']==0){
							if($_SESSION['email']==$row['emailUt']) echo"<a href='eliminaCom.php?codC=" . $row['codC'] . "&codArt=" . $_GET['codArt'] . "'>Elimina commento</a>";
						}
							
					}
					echo "</p> </div>";
				}
			}
			if(isset($_SESSION['email'])){
				?>
				<fieldset>
				<legend><h3 class="nomepagina">Inserisci commento</h3></legend>
				<form action="article.php?codArt=<?php echo $_GET['codArt']; ?>" method="post" id="comment">
				<textarea onkeyup="validateComment()" id="commento" rows="3" cols="50" name="comment" form="comment"></textarea>
				<input id="invia" type="submit" disabled>
                <h5 id="resultcomment">&nbsp;</h5>
				</form>
				</fieldset>
				<?php
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
