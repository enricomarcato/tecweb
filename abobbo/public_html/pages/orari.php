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
	<h2> Orari</h2>
    <?php
        $dayone = "SELECT * FROM artisti WHERE dataOra BETWEEN '2018-09-01 00:00:00' AND '2018-09-01 23:59:59' 
        ORDER BY dataOra";
        $daytwo = "SELECT * FROM artisti WHERE dataOra BETWEEN '2018-09-02 00:00:00' AND '2018-09-02 23:59:59' 
        ORDER BY dataOra";
        $daythree = "SELECT * FROM artisti WHERE dataOra BETWEEN '2018-09-03 00:00:00' AND '2018-09-03 23:59:59' 
        ORDER BY dataOra";
        $uno = $conn->query($dayone);
        $due = $conn->query($daytwo);
        $tre = $conn->query($daythree);
        echo "<div class='orari col-m-11 col-d-11 col-l-11'>
		<h1 class='col-m-10 col-d-10 col-l-10'>Giorno 1</h1>";
        if ($uno->num_rows > 0) {
			echo "<p class='col-m-10 col-d-10 col-l-10'>";
            while($row = $uno->fetch_assoc()) {
                echo "<b>".$row['nome']."</b>  ";
                 echo "<em>".$row['dataOra']."</em><br/>";
            }
			echo "</p> </div>";
        } 
        else {
            echo "1 results";
        }
        echo "<div class='orari col-m-11 col-d-11 col-l-11'>
		<h1 class='col-m-10 col-d-10 col-l-10'>Giorno 2</h1>";
        if ($due->num_rows > 0) {
            echo "<p class='col-m-10 col-d-10 col-l-10'>";
            while($row = $due->fetch_assoc()) {
                echo "<b>".$row['nome']."</b>  ";
                 echo "<em>".$row['dataOra']."</em><br/>";
            }
			echo "</p> </div>";
        } 
        else {
            echo "2 results";
        }
        echo "<div class='orari col-m-11 col-d-11 col-l-11'>
		<h1 class='col-m-10 col-d-10 col-l-10'>Giorno 3</h1>";
        if ($tre->num_rows > 0) {
            echo "<p class='col-m-10 col-d-10 col-l-10'>";
            while($row = $tre->fetch_assoc()) {
                echo "<b>".$row['nome']."</b>  ";
                 echo "<em>".$row['dataOra']."</em><br/>";
            }
			echo "</p> </div>";
        } 
        else {
            echo "3 results";
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
