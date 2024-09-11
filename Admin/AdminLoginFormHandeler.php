<?php
// start session because variables will be passed on to the session
session_start();

// the connection to the data base code is the DatabaseFunctions.php file
// so therefore we are including it in this file
include('DatabaseConnection.php');


//getting the information from the AdminLoginForm.php
$name = $_GET['Name'];
$password = $_GET['Password'];


//select the rows from which you want to retreive data
//$sql = "SELECT AdminNameID, AdminName, AdminPassword FROM admin";
$sql = "SELECT id FROM admin WHERE UserName = '$name' and AdminPassword = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

// If result matched $name and $password, table row must be 1 row

if($count == 1) {
    $_SESSION["name"] = $name;
    header('Location: index.php');

}else {
    $sql = "SELECT id FROM costumer WHERE UserName = '$name' and Password = '$password'";
    header('Location: index.php');
    if ($count == 1) {
        $_SESSION["name"] = $name;
        header('Location: index.php');
    }
}





