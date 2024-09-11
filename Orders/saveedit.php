<?php
require_once("DatabaseFunctions.php");
$result = executeUpdate("UPDATE `order` set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE id=".$_POST["id"]);;
