<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
	<link href="../css/print.css" type="text/css" rel="stylesheet" media="print" />
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfm-RhOmI4g3IPn78LUWe2XCInoao4S4c&callback=initMap"></script>
    <script src="../js/Script.js"></script>
    <title lang="en">Home Festival</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<a id="top"></a>
	<header><?php require('../layout/header.html')?></header>
    <nav><?php require('../layout/nav.php')?></nav>
    <div class="content col-m-11 col-d-11 col-l-11">
	<h2>Come arrivare</h2>
	<p>Viale della Serenissima, 31100 Treviso – Italia.<p>
    <div class="comearrivare col-m-11 col-d-11 col-l-11" id="map" title="Mappa che indica la posizione dell'evento" style="height:20em;max-width:100%;"></div>
	<div class="comearrivare col-m-11 col-d-11 col-l-11" id="auto" title="Indicazioni su come raggiungere il festival in auto">
		<h1>Come raggiungerci in auto</h1>
		<h3>Dall’uscita A27 Treviso Sud</h3>
		<p>Alla rotonda prendi la 3° uscita in direzione Treviso. Procedi su SR89 “Strada Treviso Mare” e successivamente su SR53 “Tangenziale di Treviso”.
		Prendi l’uscita verso Padova/Aeroporto. Alla rotonda prendi la 2° uscita e prendi Viale della Serenissima.</p>
		<h3>Dall’uscita A27 Treviso Nord</h3>
		<p>Alla rotonda procedi dritto su via delle Grave. Segui le indicazioni per Treviso. Prendi SS13 (Viale Fellissent, poi Viale della Repubblica). 
		Superato il supermercato Panorama, alla rotonda prendi l’uscita per Aeroporto/Tangenziale/Padova. Segui le indicazioni per Home Festival.</p>
		<h3>Dall’uscita A4 Meolo – Roncade</h3>
		<p>All’uscita segui le indicazioni in direzione di Treviso. Prosegui dritto per circa 13 km. 
		Entra in SR53 “tangenziale di Treviso”. Prendi l’uscita verso Padova/Aeroporto. Alla rotonda prendi la 2° uscita e prendi Viale della Serenissima.</p>
		<h3>Dall’uscita A4 Preganziol</h3>
		<p>Prendi via Zermanese, poi via Schiavonia, poi SP107. Continua in direzione Madonna delle Grazie. Prosegui su SS13 “Strada Terraglio”.
		Alla rotonda prendi la 3° uscita e prendi lo svincolo SR53 per Noale/Conegliano/Padova/Castelfranco/Feltre. Entra in SR53 “tangenziale di Treviso”. 
		Prendi l’uscita verso Padova/Aeroporto. Alla rotonda prendi la 2° uscita e prendi Viale della Serenissima.</p>
    </div>
	<div class="comearrivare col-m-11 col-d-11 col-l-11" id="autobus" title="Indicazioni su come raggiungere il festival in autobus">
	<h1>Come raggiungerci in autobus</h1>
	<h3>Da Treviso</h3>
	<p>Home Festival è collegato alla città di Treviso dall’autobus di linea 6. 
	La fermata più vicina è “Dogana”. Dalla fermata percorri a piedi Viale della Serenissima, ti aspettiamo a “casa”!</p>
	<h3>Da Padova</h3>
	<p>Prendi la linea 101 Padova – Treviso. Superato l’Aeroporto di Treviso, scendi alla fermata “S. Giuseppe”.
	La fermata dista 10-15 minuti a piedi dal Festival.</p>
	<h3>Da Venezia/Mestre FF.SS</h3>
	<p>Potete raggiungere il Festival con le navette di Atvo o Barzi che effettuano corse verso l’aeroporto di Treviso.
	<p>La soluzione più conveniente che ti consigliamo è il treno. 
	Raggiungi la Stazione FF.SS. di Treviso e da lì prendi l’autobus di linea 6 in direzione “Quinto-Aeroporto”.</p>
	<h3>Da Aeroporto di Venezia</h3>
	<p>Prendi la navetta ATVO che collega l’Aeroporto alla Stazione FF.SS. di Treviso in 35’.
	Da Treviso prendi l’autobus di linea 6 in direzione Quinto-Aeroporto e scendi alla fermata “Dogana”.</p>
	<h3>Da Jesolo</h3>
	<p>Puoi prendere un bus dall’autostazione del Lido di Jesolo in direzione Treviso.
	Da Treviso prendi l’autobus di linea n. 6 in direzione Quinto-Aeroporto e scendi alla fermata “Dogana”.</p>
	<h3>Da Cavallino</h3>
	<p>Puoi prendere la navetta ATVO che collega Cavallino all’Aeroporto di Treviso distante solo 15 minuti a piedi dal Festival.</p>
    </div>
	<div class="comearrivare col-m-11 col-d-11 col-l-11" id="treno" title="Indicazioni su come raggiungere il festival in treno">
	<h1>Come raggiungerci in treno</h1>
	<p>Dalla Stazione FS di Treviso raggiungerci è facilissimo, prendi l’autobus 6 in direzione Quinto-Aeroporto e scendi alla fermata “Dogana”. 
	Una volta arrivato, percorri Viale della Serenissima, ti aspettiamo a “casa”!
	</p>
    </div>
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
