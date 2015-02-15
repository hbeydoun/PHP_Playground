<?php
$servername = "172.17.62.207" ;
$username = "hbeydoun";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*echo "Connected successfully";*/

?> 