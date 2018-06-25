<?php{
$servername = "localhost";
$username = "id6274026_bikes";
$password = "royalbrothers";
$dbname = "id6274026_bikes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
?>