<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>insert first costumer</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>

<p>update & delete data</p>
<table class="tbl-qa">
    <thead>
    <tr>
        <th class="table-header" width="10%">id</th>
        <th class="table-header">FirstName</th>
        <th class="table-header">LastName</th>
        <th class="table-header">Email</th>
        <th class="table-header">Adres</th>
        <th class="table-header">Password</th>
    </tr>
    <tr>
        <td>
            <form name="form" action="InsertData.php" method="get">
                <td>
                    <input type="text" name="FirstName" placeholder="Enter Your First Name" minlength="3" maxlength="50">
                </td>
                <td>
                    <input type="text" name="LastName" placeholder="Enter Your Last Name" minlength="3" maxlength="50">

                </td>
                <td>
                    <input type="text" name="Email" placeholder="Enter Your Email " minlength="8">

                </td>
                <td>
                    <input type="text" name="Adres" placeholder="Enter Your Adres Name" minlength="3" maxlength="50">

                </td>
                <td>
                    <input type="password" name="Password" placeholder="Enter Your Password" minlength="8">

                </td>
                <td>
                    <input
                        type="submit"
                        value="insert row">

                </td>
            </form>
        </td>
    </tr>
    </thead>
    <tbody>
</body>
</html>

