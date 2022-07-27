<?php
$servername = "localhost";
$username = "Here Goes The Username";
$password = "Here Goes The Password";
$dbname = "Mere Goes The Database Name";

//Create connection with the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
