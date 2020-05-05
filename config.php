<?php
$servername = "localhost";
$username = "user";
$password = "@1Levzamen!";
$dbname = "menu";

//Create connection with the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>