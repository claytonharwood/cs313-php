<?php include './db.php' ?>

<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sports Card Tracker | Add Cards</title>
		<meta name="description" content="Add Cards to your player" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
						
	</head>
	<body>
		<div class="top">
			<div class="logo"></div>
			<div id="phone-num"></div>
			<nav>
				<ul>
					<li><a href="index.php"> Home </a></li>
					<li><a href="addcards.php">Add Cards</a></li>
				</ul>
			</nav>
		</div>	
		<div class="bg"></div>
		<div id="page">
		<h2>Add Player</h2>	
		 
			<form method="post" action="addplayer.php">
				<label>Player Id:</label>
				<input type="text" name="playerid"><br>
				<label>First Name:</label>
				<input type="text" name="firstname"><br>
				<label>Last Name:</label>
				<input type="text" name="lastname"><br>
				<input type="submit" name="btn" class="button" value="Submit"/>
			</form>

		<h2>Add Card</h2>
			<form method="post" action="add.php">
				<label>Player Id:</label>
				<input type="text" name="playerid" id="playerid"><br>
				<label>Year:</label>
				<input type="text" name="year" id="year"><br>
				<label>Card Type:</label>
				<input type="text" name="cardtype" id="cardtype"><br>
				<label>Card Number:</label>
				<input type="text" name="cardnumber" id="cardnumber"><br>
				<input type="submit" name="btn" class="button" value="Submit"/>
                
			</form>	

		</div>	

		<footer>
			
			<div class="copyright">&copy 2018 www.sportscardtracker.com, all rights reserved</div>			
				
		</footer>
		
	</body>
</html>