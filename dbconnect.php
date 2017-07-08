<?php

/*$servername = "localhost";
$dbname = "mistrobo_bookshelfDB";
$username = "mistrobo_newuser";
$password = "maira.l@123";*/

$servername = "localhost";
$dbname = "bookshelfDB";
$username = "script";
$password = "asdasd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database error: " . $conn->connect_error);
}
//else echo "success";
?>
