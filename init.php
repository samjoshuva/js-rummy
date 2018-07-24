<?php



	// sql to create table for every game instance  "table name will be postfixed with request that insysness sends to every game"
	$sql = "CREATE TABLE game_request_  (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	player_id VARCHAR(30) NOT NULL,
	player_name VARCHAR(30) NOT NULL,
	winner VARCHAR(20)  DEFAULT '0',
	status VARCHAR(50) DEFAULT 'OnProgress',
	reg_date VARCHAR(100)
	)";

	if ($mysqli->query($sql) === TRUE) {
	    
	} else {
	    echo "Error creating table: " . $mysqli->error;
	}

	// sql to create table for card of game "table name will be postfixed with request that insysness sends to every game"
	$sql1 = "CREATE TABLE card_game_  (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	discard VARCHAR(30) NOT NULL,
	turn VARCHAR(30) NOT NULL
	)";

	if ($mysqli->query($sql1) === TRUE) {
	    
	} else {
	    echo "Error creating table: " . $mysqli->error;
	}



?>