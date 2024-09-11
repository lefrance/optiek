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

    $sql = "SELECT * FROM lens";
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
            <th class="table-header">prijs</th>
            <th class="table-header">naam</th>
            <th class="table-header">watergehaalte</th>
        </tr>
        <tr>
            <td>
                <form name="form" action="InsertData.php" method="get">
                    <td>
                        <input type="text" name="prijs" placeholder="prijs" minlength="3" maxlength="50">
                    </td>
                    <td>
                        <input type="text" name="naam" placeholder="naaam" minlength="3" maxlength="50">

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
                <?php
                    foreach ($faq as $k => $v) {
                ?>
                        <tr class="table-row">
                            <td><?php echo $k + 1; ?></td>
                            <td contenteditable="true"
                                onBlur="saveToDatabase(this,'prijs','<?php echo $faq[$k]["id"]; ?>')"
                                onClick="showEdit(this);"><?php echo $faq[$k]["prijs"]; ?></td>
                            <td contenteditable="true"
                                onBlur="saveToDatabase(this,'naam','<?php echo $faq[$k]["id"]; ?>')"
                                onClick="showEdit(this);"><?php echo $faq[$k]["naam"]; ?></td>
                            <td contenteditable="true"
                                onBlur="saveToDatabase(this,'watergehaalte','<?php echo $faq[$k]["id"]; ?>')"
                                onClick="showEdit(this);"><?php echo $faq[$k]["watergehaalte"]; ?></td>
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
        <input type="button" value="Go Costumer" onclick="window.location.href='../Costumer/index.php'" />
    </form>
    <form>
        <input type="button" value="Go Admin" onclick="window.location.href='../Admin/index.php'" />
    </form>
    </body>
</html>
