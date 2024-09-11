<?php
/**
 * Created by PhpStorm.
 * User: raoul
 * Date: 11/28/2017
 * Time: 7:16 PM
 */
include('DatabaseConnection.php');

//getting the information from the form
$costumer = $_GET['costumer'];
$product = $_GET['product'];
$prijs= $_GET['prijs'];


//inserting the data in the database
$sql = "INSERT INTO `order`( costumer,product,prijs )
        VALUES ('$costumer','$product','$prijs')";


//checking if the data was insert
if ($_SESSION["conn"]->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error while inserting the data"; }

$_SESSION["conn"]->close();

?>