<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rugby_portal";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error){
    die("Connection failed:" . $conn -> connect_error);
}



/* $stmt = $conn->prepare("INSERT INTO players (name, role) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $role);
$stmt->execute();
$stmt->close(); */
?>