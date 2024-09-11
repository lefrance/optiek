<?php

    // we in include the database
    // connection php file because
    // we need the $_SESSION["conn"] variable
    include('DatabaseConnection.php');

    
    //this function will run the
    // sql query and put the result
    // is a associative array
    function runQuery($query)
    {
        $result = mysqli_query($_SESSION["conn"], $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if (!empty($resultset))
            return $resultset;
    }


    //this function is used to execute
    // a Update
    function executeUpdate($query)
    {
        $result = mysqli_query($_SESSION["conn"], $query);
        return $result;

    }

    //this function is used to execute
    // a insertation
    function insert($query)
    {
        $result = mysqli_query($_SESSION["conn"], $query);
        return $result;
    }

    //this function is used to delete
    // rows
    function DeleteThisRows($query)
    {
        $result = mysqli_query($_SESSION["conn"], $query);
        return $result;
    }

?>