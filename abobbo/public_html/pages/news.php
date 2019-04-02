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
	<h2> News</h2>
		<?php
			if(isset($_POST['titolo']) && isset($_POST['testo']) ){
				$titolo = trim($_POST['titolo']);
				$testo = trim($_POST['testo']);
				if(!$titolo || !$testo) echo "Compila tutti i campi per inserire un articolo.";
				else{
					$query = "INSERT INTO articoli (codArt, titolo, dataOra, testo, emailAdmin) VALUES (NULL, '" . $titolo . "', CURRENT_TIMESTAMP, '" . $testo . "', '" . $_SESSION['email'] . "')";
					$conn->query($query);
					
				}
			}

			$artPerPag=5;
			if(!isset($_GET['nPag'])){
				$nPag=1;
			}
			else $nPag=$_GET['nPag'];
			$queryContaArt = "SELECT COUNT(codArt) AS numero FROM articoli";
			$tabContaArt = $conn->query($queryContaArt);
			$row = $tabContaArt->fetch_assoc();
			$nArt = $row['numero'];
			$query = "SELECT codArt, titolo, testo FROM articoli ORDER BY dataOra DESC LIMIT " . strval(($nPag-1)*$artPerPag) . "," . strval($artPerPag);
			$result = $conn->query($query);
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					echo " <div class='articoli col-m-11 col-d-11 col-l-11'> <h1 class='col-m-11 col-d-11 col-l-11'><a href='article.php?codArt=" . $row['codArt'] . "'>" . $row['titolo']  . "</a></h1> ";
					echo "<p class='col-m-11 col-d-11 col-l-11'><a href='article.php?codArt=" . $row['codArt'] . "'>" . substr($row['testo'],0,300) . "...</a></p> </div> ";
				}
			}


			echo"<div class='pagination'>";
			if($nPag>1) echo"<a href='news.php?nPag=" . strval($nPag-1) . "'>&laquo;</a> ";

			for($i=0;$i<$nArt/$artPerPag;$i++){?>
                <a
                class= "
                <?php if(isset($_GET['nPag'])){
                            if($_GET['nPag']==($i+1)) {
                                echo "pageactive" ;
                            }
                        } 
                    else {
                        if($i==0){
                            echo "pageactive";
                        }
                    } 
                ?>"
                href = '<?php echo "news.php?nPag=" . strval($i+1) ?>'
                >
                <?php echo strval($i+1); ?>
                </a>

        <?php
			}
			if($nPag<$nArt/$artPerPag) echo"<a href='news.php?nPag=" . strval($nPag+1) . "'>&raquo;</a>";
			echo "</div>";
			if(isset($_SESSION['email']) && $_SESSION['admin']==1){
		?>
		<fieldset class="content col-m-11 col-d-11 col-l-11">
			<legend><h3>Inserisci articolo</h3></legend>
			<form action="news.php" method="post" id="inserimentoArt">
			<label for="titolo">Titolo:</label>
			<input onkeyup="validateTitolo()" type="text" id="titolo" name="titolo">
            <h5 id="resulttitolo">&nbsp;</h5>
			<label for="testo">Testo articolo:</label>
			<textarea onkeyup="validateTesto()" rows="8" cols="50" id="testo" name="testo" form="inserimentoArt"></textarea>
            <h5 id="resulttesto">&nbsp;</h5>
			<input id="invia" type="submit" disabled>
			</form>
		</fieldset>
		<?php } ?>
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
