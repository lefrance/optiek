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
        <th class="table-header">prijs</th>
        <th class="table-header">materiaal</th>
        <th class="table-header">watergehaalte</th>
    </tr>
    <tr>
        <td>
            <form name="form" action="InsertData.php" method="get">
                <td>
                    <input type="text" name="prijs" placeholder="prijs" minlength="3" maxlength="50">
                </td>
                <td>
                    <input type="text" name="naam" placeholder="naam" minlength="3" maxlength="50">

                </td>
                <td>
                    <input type="text" name="watergehaalte" placeholder="watergehaalte " minlength="8">

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

