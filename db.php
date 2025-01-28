<?php
$host = "localhost";
$username = "root";
$password = '';
$dbname = "cmimore";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Lidhja me databazën dështoi: " . $conn->connect_error);
}
?>