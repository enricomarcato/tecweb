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
	<h2> LineUp</h2>
            <?php
                $query = "SELECT * FROM artisti";
                $result = $conn->query($query);
                $path= "../images/GroupsPic/";
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
						echo "<div class='gruppi col-m-6 col-d-4 col-l-3'>";
                        echo "<a lang='en' tabindex='1'  href='artista.php?codArtista=" . $row['codArtista']."'><img class='artisti' alt='Immagine " . $row['nome'] ."' src='" . $path.$row['immagine'] . "'/></a>";
						echo "<p><a  href='artista.php?codArtista=" . $row['codArtista']."'>" . $row['nome'] . "</a></p>";
						echo "</div>";
                    }
                } else {
                    echo "0 resultati";
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
