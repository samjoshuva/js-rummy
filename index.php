<?php
	include("dbconnect.php");
	include("init.php");

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Rummy</title>
		<link type="text/css" rel="stylesheet" href="main.css"></link>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script type="text/javascript" src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
		<script type="text/javascript" src="game.js"></script>
		<script type="text/javascript" src="test.js" ></script>
	</head>
	<body>
		<div id="game_panel">
			<div id="card_panel"> <!--boundary of where the cards can move-->
				<!--centered divs are for showing messages/boxes on top of everything else-->
				<div class="centered_outer">
					<div class="centered_inner" id="win_message"></div>
				</div>
				<div class="centered_outer">
					<div class="centered_inner" id="rules_message">
					<p>Click the Deal button or click the deck to deal.</p>
					<p>You must arrange your cards into groups/runs of at least 3 cards.</p>
					<p>Left-clicking a card in your hand puts it into a separate pile, your 'set', that you can use as a visual aid for building 
					out a group or run.  You can drag cards between your hand and set, or you can drag them within either pile to sort them.</p>
					<p>Right-clicking a card from your hand discards it and deals you a new card.</p>
					<p>Once the cards in the hand/set are sorted into one or more groups/runs, you win!</p>
					</div>
				</div>
				<!--set, stack, discard, and hand are just to provide boundaries for each card pile
					the cards are placed inside the .inner divs-->
				<div id="stack" class="pile"><div class="inner"></div></div>
				<div id="discard" class="pile"><div class="inner"></div></div>
				<div id="set" class="pile"><div class="inner"></div></div>
				<div id="hand" class="pile"><div class="inner"></div></div>
			</div>
			<div id="control_panel">
				<button id="start_button" type="button"></button>
				<button id="rules_button" type="button">Rules</button>
				<!--<br/><input type="text" id="debug_text" size="100"></input>
				<button id="debug_button" type="button">Debug Line</button>-->
				
			</div>
		</div>


	</body>
</html>
