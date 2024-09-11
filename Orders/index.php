<?php
    require_once("DatabaseFunctions.php");


$my_var = <<<EOD
<html>
<head>
<meta http-equiv="refresh" content="0.00000000001 ;url= Form.php" />
<title>insert new costumer</title>
</head>
<body>
</body>
</html>

EOD;

    $sql = "SELECT * FROM `order`";
    $faq = @runQuery($sql) or die ( $my_var);



?>

<html>
    <head>
        <title>orders</title>
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
            <th class="table-header">costumer</th>
            <th class="table-header">product</th>
            <th class="table-header">prijs</th>
        </tr>
        <tr>
            <td>
                <form name="form" action="InsertData.php" method="get">
                    <td>
                        <input type="text" name="costumer" placeholder="costumer"  maxlength="50">
                    </td>
                    <td>
                        <input type="text" name="product" placeholder="product"  maxlength="50">

                    </td>
                    <td>
                        <input type="text" name="prijs" placeholder="prijs " >

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
                            onBlur="saveToDatabase(this,'costumer','<?php echo $faq[$k]["id"]; ?>')"
                            onClick="showEdit(this);"><?php echo $faq[$k]["costumer"]; ?></td>
                        <td contenteditable="true"
                            onBlur="saveToDatabase(this,'product','<?php echo $faq[$k]["id"]; ?>')"
                            onClick="showEdit(this);"><?php echo $faq[$k]["product"]; ?></td>
                        <td contenteditable="true"
                            onBlur="saveToDatabase(this,'prijs','<?php echo $faq[$k]["id"]; ?>')"
                            onClick="showEdit(this);"><?php echo $faq[$k]["prijs"]; ?></td>
                        <td onclick="Deleterow(this,'<?php echo $faq[$k]["id"]; ?>') ;">

                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    <form>
        <input type="button" value="Go Products" onclick="window.location.href='../Product/index.php'" />
    </form>

    <form>
        <input type="button" value="Go Costumer" onclick="window.location.href='../Costumer/index.php'" />
    </form>
    <form>
        <input type="button" value="Go Admin" onclick="window.location.href='../Admin/index.php'" />
    </form>
    </body>
</html>
