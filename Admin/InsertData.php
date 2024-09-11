<?php
/**
 * Created by PhpStorm.
 * User: raoul
 * Date: 11/28/2017
 * Time: 7:16 PM
 */
include('DatabaseConnection.php');

//getting the information from the form
$name = $_GET['Name'];
$password = $_GET['Password'];


//inserting the data in the database
$sql = "INSERT INTO admin( AdminName, AdminPassword )
        VALUES ('$name','$password')";


//checking if the data was insert
if ($_SESSION["conn"]->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error while inserting the data"; }

$_SESSION["conn"]->close();

?>