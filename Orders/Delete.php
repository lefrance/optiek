<?php
$servername = "localhost";
$username = "Raoul";
$password = "R@ou5lR@ou5l";
$database = "optiek";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
$row = $_GET['row'];

$sql = "DELETE FROM order WHERE id=$row";



if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();






