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
		<title>Sports Card Tracker</title>
		<meta name="description" content="Track your sports cards!" />
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
		<?php  	
    	$statement = $db->query('SELECT year, cardType, cardNumber FROM cardInfo');
		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
		  echo $row['year'] $row['cardType'] $row['cardNumber'] '<br/>';
		}
		?>

		</div>	

		<footer>
			<div id="bottom-nav">
				
				<div>&copy 2018 www.sportscardtracker.com, all rights reserved</div>
				
			</div>
				
		</footer>
		
	</body>
</html>