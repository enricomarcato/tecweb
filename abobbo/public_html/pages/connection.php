<?php  //Start the Session
    session_start();
    $servername = "localhost";
    $username = "abobbo";
    $password = "Queevee0uewooluB";
    $dbname = "abobbo";
	// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    }


    //3.1.4 if the user is logged in Greets the user with message
//3.2 When the user visits the page first time, simple login form will be displayed.
?>