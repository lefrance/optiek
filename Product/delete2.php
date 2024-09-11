<?php
require_once("DatabaseFunctions.php");
$result = DeleteThisRows("DELETE FROM lens WHERE id=".$_POST["id"]);;
