<?php

	

	//since all server events will include this module, set up game-wide globals here
	define('HAND_SIZE', 7); // number of cards that single player holds
	define('DECK_SIZE', 52); // total number of deck size
	$suits = array('Clubs', 'Spades', 'Diamonds', 'Hearts'); // classification of cards in deck
	$numbers = array('Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Jack', 'Queen', 'King', 'Ace'); //different type of cards

	

	//now connect to the MySQL 'games' database
	$user = 'root';
	$pass = '';
	$db = 'rummy';
	$server = 'localhost';
	
	$mysqli = new mysqli($server, $user, $pass, $db); // connect with database
	if($mysqli->connect_errno) {
		fail('Could not connect to database');
	}
	

?>
