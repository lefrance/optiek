<?php
require_once("DatabaseFunctions.php");


$my_var = <<<EOD
<a href="Form.html">add some admins mate</a>
EOD;

$sql = "SELECT * FROM admin";
$faq = @runQuery($sql) or die ( $my_var);



?>


<html>
<head>
    <title>update delet</title>
    <link rel="stylesheet" href="Styles.css">
    <script src="jquery-1.10.2.js"></script>
    <script type="text/javascript" src="JavaScriptFunctions.js"></script>
</head>
<body>
<p>update & delete data</p>
<table class="tbl-qa">
    <thead>
    <tr>
        <th class="table-header" width="10%">id</th>
        <th class="table-header">Costumer</th>
        <th class="table-header">Password</th>
    </tr>
    <tr>
        <td>
            <form name="form" action="InsertData.php" method="get">
                <td>
                    <input
                        placeholder="Name"
                        type="text"
                        name="Name">
                </td>
                <td>
                    <input
                        placeholder="Password"
                        type="text"
                        name="Password">
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
    <?php
    foreach ($faq as $k => $v) {
        ?>
        <tr class="table-row">
            <td><?php echo $k + 1; ?></td>
            <td contenteditable="true"
                onBlur="saveToDatabase(this,'AdminName','<?php echo $faq[$k]["id"]; ?>')"
                onClick="showEdit(this);"><?php echo $faq[$k]["AdminName"]; ?></td>
            <td contenteditable="true"
                onBlur="saveToDatabase(this,'AdminPassword','<?php echo $faq[$k]["id"]; ?>')"
                onClick="showEdit(this);"><?php echo $faq[$k]["AdminPassword"]; ?></td>
            <td onclick="Deleterow(this,'<?php echo $faq[$k]["id"]; ?>') ;">
                <button id="press"
                        type="button">delete
                </button>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
<form>
    <input type="button" value="Go to costumer" onclick="window.location.href='../Costumer/index.php'" />
</form>
<form>
    <input type="button" value="Go Products" onclick="window.location.href='../Product/index.php'" />
</form>
<form>
    <input type="button" value="Go Orders" onclick="window.location.href='../Orders/index.php'" />
</form>
</body>
</html>
