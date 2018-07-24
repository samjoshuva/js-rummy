<?php
include("dbconnect.php");


	

	$sql = "INSERT INTO game_request_ (player_id, player_name, winner, status, reg_date )
	VALUES ('John', 'Doe', 'john', 'hksd',  ".date('Y-m-d h:i:sa')." );";

	$sql .= "INSERT INTO game_request_ (player_id, player_name, winner, status, reg_date )
	VALUES ('John', 'Doe', 'john', 'ksjd', ".date('Y-m-d h:i:sa').");";

	$sql .= "INSERT INTO game_request_ (player_id, player_name, winner, status, reg_date )
	VALUES ('John', 'Doe', 'john', 'ksjd', ".date('Y-m-d h:i:sa').");";

	$sql .= "INSERT INTO game_request_ (player_id, player_name, winner, status, reg_date )
	VALUES ('John', 'Doe', 'john','da', ".date('Y-m-d h:i:sa').");";

	if ($mysqli->multi_query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $mysqli->error;
	}

?>