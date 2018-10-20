<?php
    // Connect to database
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>

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
					<li><a href=""> Home </a></li>
					<li><a href="addcards.php">Add Cards</a></li>
				</ul>
			</nav>
		</div>	
		<div class="bg"></div>
		<div id="page">
		<h2>Add Player</h2>	
			<form>
				<label>First Name:</label>
				<input type="text" name="firstName"><br>
				<label>Last Name:</label>
				<input type="text" name="lastName"><br>
				<input type="button" name="Submit">
			</form>

		<h2>Add Card</h2>
			<form>
				<label>Year:</label>
				<input type="text" name="year"><br>
				<label>Card Type:</label>
				<input type="text" name="cardType"><br>
				<label>Card Number:</label>
				<input type="text" name="cardNumber"><br>
				<input type="button" name="Submit">
			</form>	

		</div>	

		<footer>
			<div id="bottom-nav">
				
				<div>&copy 2018 www.sportscardtracker.com, all rights reserved</div>
				
			</div>
				
		</footer>
		
	</body>
</html>