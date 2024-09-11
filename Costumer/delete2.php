<?php
require_once("DatabaseFunctions.php");
$result = DeleteThisRows("DELETE FROM costumer WHERE id=".$_POST["id"]);;
