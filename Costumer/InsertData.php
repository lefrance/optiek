<?php
/**
 * Created by PhpStorm.
 * User: raoul
 * Date: 11/28/2017
 * Time: 7:16 PM
 */
include('DatabaseConnection.php');

//getting the information from the form
$FirstName = $_GET['FirstName'];
$LastName = $_GET['LastName'];
$Email= $_GET['Email'];
$Adres = $_GET['Adres'];
$Password= $_GET['Password'];

//inserting the data in the database
$sql = "INSERT INTO costumer( FirstName,LastName,Email,Adres,Password )
        VALUES ('$FirstName','$LastName','$Email','$Adres','$Password')";


//checking if the data was insert
if ($_SESSION["conn"]->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error while inserting the data"; }

$_SESSION["conn"]->close();

?>