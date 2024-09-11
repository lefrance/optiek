<?php
require_once("DatabaseFunctions.php");
$result = executeUpdate("UPDATE lens set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE id=".$_POST["id"]);;
