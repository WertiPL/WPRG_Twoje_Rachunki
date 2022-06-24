<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moneybilans";

$conn = new PDO('mysql:host=localhost;dbname='.$dbname, $username, $password);
if (!$conn) {
    die("Fatal Error: Connection Failed!");
}