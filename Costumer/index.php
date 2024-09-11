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

    $sql = "SELECT * FROM costumer";
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
                <?php
                    foreach ($faq as $k => $v) {
                ?>
                    <tr class="table-row">
                        <td><?php echo $k + 1; ?></td>
                        <td contenteditable="true"
                            onBlur="saveToDatabase(this,'FirstName','<?php echo $faq[$k]["id"]; ?>')"
                            onClick="showEdit(this);"><?php echo $faq[$k]["FirstName"]; ?></td>
                        <td contenteditable="true"
                            onBlur="saveToDatabase(this,'LastName','<?php echo $faq[$k]["id"]; ?>')"
                            onClick="showEdit(this);"><?php echo $faq[$k]["LastName"]; ?></td>
                        <td contenteditable="true"
                            onBlur="saveToDatabase(this,'Email','<?php echo $faq[$k]["id"]; ?>')"
                            onClick="showEdit(this);"><?php echo $faq[$k]["Email"]; ?></td>
                        <td contenteditable="true"
                            onBlur="saveToDatabase(this,'Adres','<?php echo $faq[$k]["id"]; ?>')"
                            onClick="showEdit(this);"><?php echo $faq[$k]["Adres"]; ?></td>
                        <td contenteditable="true"
                            onBlur="saveToDatabase(this,'Password','<?php echo $faq[$k]["id"]; ?>')"
                            onClick="showEdit(this);"><?php echo $faq[$k]["Password"]; ?></td>
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
        <input type="button" value="Go Products" onclick="window.location.href='../Product/index.php'" />
    </form>

    <form>
        <input type="button" value="Go Admin" onclick="window.location.href='../Admin/index.php'" />
    </form>

</html>
