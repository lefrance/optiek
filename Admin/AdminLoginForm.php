<?php
    // start the session
    session_start();

    // test if is the first attempt to login
    // if not set the "LoginCounter" to counter to 0
    if (!isset($_SESSION["LoginCounter"])) {
        $_SESSION["LoginCounter"] = 0;
    }
?>

<html>
    <head>
        <title> </title>
    </head>
    <body>
        <p>Admin Login</p>
        <!--        dynamic part of the web page it will show nothin or login failed-->
        <?php
            // this wil add to the "LoginCounter" everytime a login fails
            $_SESSION["LoginCounter"]  ++;

            //this loop will check if the "LoginCounter" is more than on
            //if so login failed will be displayed
            if ( $_SESSION["LoginCounter"] > 1 ){
              echo "Login Failed";
            }
        ?>


        <!-- the information of this form will be send to AdminLoginFormHandeler.php-->
        <form action="AdminLoginFormHandeler.php" method="GET">
            <input type="text" name="name" placeholder="Enter Your First Name" minlength="3" maxlength="50"><br>
            <input type="password" name="password" placeholder="Enter Your Last Name" minlength="8"><br>
            <input type="submit" value="log in">
        </form>

    </body>
</html>