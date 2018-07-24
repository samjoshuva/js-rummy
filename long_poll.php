<?php

include("dbconnect.php");

$top_card = $_POST['stack_top'];


$sql = "UPDATE card SET stack_top='. $top_card .' WHERE id = 1"


?>