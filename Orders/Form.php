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
        <th class="table-header">costumer</th>
        <th class="table-header">product</th>
        <th class="table-header">prijs</th>
    </tr>
    <tr>
        <td>
            <form name="form" action="InsertData.php" method="get">
                <td>
                    <input type="text" name="costumer" placeholder="Enter Your First Name" minlength="3" maxlength="50">
                </td>
                <td>
                    <input type="text" name="product" placeholder="Enter Your Last Name" minlength="3" maxlength="50">

                </td>
                <td>
                    <input type="text" name="prijs" placeholder="Enter Your Email " minlength="2">

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

