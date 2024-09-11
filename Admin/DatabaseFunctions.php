<?php
    include('DatabaseConnection.php');

    function runQuery($query)
    {
        $result = mysqli_query($_SESSION["conn"], $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if (!empty($resultset))
            return $resultset;
    }


    function executeUpdate($query)
    {
        $result = mysqli_query($_SESSION["conn"], $query);
        return $result;

    }

    function insert($query)
    {
        $result = mysqli_query($_SESSION["conn"], $query);
        return $result;
    }

    function numRows($query)
    {

        $result = mysqli_query($_SESSION["conn"], $query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    function DeleteThisRows($query)
    {
        $result = mysqli_query($_SESSION["conn"], $query);
        return $result;
    }

?>