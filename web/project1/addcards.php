<?php include './db.php' ?>

<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sports Card Tracker | Add Cards</title>
		<meta name="description" content="Add Cards to your player" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/analytics.js" type="text/javascript"></script>
				
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
		 <?php
                if (isset($message)) {
                 echo $message;
                }
                ?>
			<form>
				<label>First Name:</label>
				<input type="text" name="firstName"><br>
				<label>Last Name:</label>
				<input type="text" name="lastName"><br>
				<input type="Submit" name="submit">
			</form>

		<h2>Add Card</h2>
			<form method="post" action="addcards-model.php">
				<label>Player Id:</label>
				<input type="text" name="playerId" id="playerId" <?php if(isset($playerId)){echo "value='$playerId'";} ?> ><br>
				<label>Year:</label>
				<input type="text" name="year" id="year" <?php if(isset($year)){echo "value='$year'";} ?> ><br>
				<label>Card Type:</label>
				<input type="text" name="cardType" id="cardType" <?php if(isset($cardType)){echo "value='$cardType'";} ?>><br>
				<label>Card Number:</label>
				<input type="text" name="cardNumber" id="cardNumber" <?php if(isset($cardNumber)){echo "value='$cardNumber'";} ?>><br>
				<input type="submit" name="btn" class="button" value="Submit"/>
                <input type="hidden" name="action" value="addcard">
			</form>	

		</div>	

		<footer>
			
			<div class="copyright">&copy 2018 www.sportscardtracker.com, all rights reserved</div>			
				
		</footer>
		
	</body>
</html>