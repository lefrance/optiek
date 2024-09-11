<?php
    //starting a session
    session_start();

    /* make a connection with the database
     put the connection in a variable called $conn*/
    $conn = @mysqli_connect("localhost", "root", "","optiek") or die("OMG :o something went wrong");

    /*add the connection variable to a globale variable called $_SESSION["conn"]
     because the variable wil be used multiple times*/
    $_SESSION["conn"] = $conn;
?>


