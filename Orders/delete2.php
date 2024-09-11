<?php
require_once("DatabaseFunctions.php");
$result = DeleteThisRows("DELETE FROM order WHERE id=".$_POST["id"]);;
