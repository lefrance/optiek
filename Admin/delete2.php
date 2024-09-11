<?php
require_once("DatabaseFunctions.php");
$result = DeleteThisRows("DELETE FROM admin WHERE id=".$_POST["id"]);;
