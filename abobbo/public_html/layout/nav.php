<div id="logo">
    <a href="../pages/home.php" tabindex="9">
        <img src="../images/logo.png"  alt="Logo del festival"> </a> 
</div>
    <label for="show-menu" class="show-menu">&#9776;</label>
    <input type="checkbox" id="show-menu" role="button"/>
    <ul id="menu">
        <li><a class="home <?php if($_SERVER["REQUEST_URI"] == "/abobbo/pages/home.php") echo "active"; ?>" href="../pages/home.php" lang="en" alt="Home" accesskey="h" >Home</a></li>
        <li><a class="page <?php if(strtok($_SERVER["REQUEST_URI"],"?") == "/abobbo/pages/news.php" || strtok($_SERVER["REQUEST_URI"],"?") == "/abobbo/pages/article.php") echo "active"; ?>" href="../pages/news.php" lang="en" alt="News" accesskey="n">News</a></li>
        <li><a class="page <?php if($_SERVER["REQUEST_URI"] == "/abobbo/pages/lineup.php") echo "active"; ?>" href="../pages/lineup.php" lang="en" alt="Lineup" accesskey="l">LineUp</a></li>
        <li><a class="page <?php if($_SERVER["REQUEST_URI"] == "/abobbo/pages/biglietti.php") echo "active"; ?>" href="../pages/biglietti.php" lang="it" alt="Biglietti" accesskey="b">Biglietti</a></li>
        <li><a class="page <?php if($_SERVER["REQUEST_URI"] == "/abobbo/pages/map.php") echo "active"; ?>" href="../pages/map.php" lang="it" alt="Come Arrivare" accesskey="c">Come Arrivare</a></li>
        <li><a class="page <?php if($_SERVER["REQUEST_URI"] == "/abobbo/pages/orari.php") echo "active"; ?>" href="../pages/orari.php" lang="it" alt="Orari" accesskey="o">Orari</a></li>
    </ul>
<div class="social"> 
    <form id="search" method="get" action="../pages/search.php">
    <input onkeyup="validateSearch()" id="ricerca" name="search" type="text" placeholder="Cerca">
    </form>
    <button form="search" id="cerca" type="submit" disabled><i class="fa fa-search"></i></button>
	<ul id="social">
	<?php 
	require('../pages/connection.php');
	if (isset($_SESSION['user'])){
		echo "<li><p>Benvenuto " . $_SESSION['user'] . "</p></li>";
		echo "<li><a href='logout.php'>Logout</a></li>";
	}
	else{?>
		<li><a class="<?php if($_SERVER["REQUEST_URI"] == "/abobbo/pages/login.php") echo "active"; ?> " href='../pages/login.php' lang='en' alt='Login' accesskey='l'>Login</a></li>
		<li><a class="<?php if($_SERVER["REQUEST_URI"] == "/abobbo/pages/register.php") echo "active";?> " href='../pages/register.php' lang='it' alt='Registrati' accesskey='r'>Registrati</a>
        </li>
    <?php
    }
	?>
    </ul>
</div>
