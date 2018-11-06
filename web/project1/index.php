<?php include './db.php' ?>

<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sports Card Tracker</title>
		<meta name="description" content="Track your sports cards!" />
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
		<hr>
		<div id="page">	
		<h3>Players</h3>
		<?php
		$statement = $db->query('SELECT * FROM player');
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
			  echo 'Id#: ' . $row['playerid'] .' '. 'First Name: ' . $row['firstname'] . ' Last Name: ' . $row['lastname'] . '<br/>';
			}
		?>

		<h3>Card Info</h3>
		<?php
	      foreach ($db->query('SELECT cardinfo.year, cardinfo.cardtype, cardinfo.cardnumber FROM cardInfo INNER JOIN player ON player.playerid=cardinfo.playerid') as $row)
	       {
	         echo 'Player Id: ' . $row['playerid'];
	         echo ' Year: ' . $row['year'];
	         echo ' Card Type: ' . $row['cardtype'];
	         echo ' Card Number: ' . $row['cardnumber'];
	         echo '<br/>';
	       }
	       ?>

	       <br><br>

		</div>	

		<footer>
			<div class="copyright">&copy 2018 www.sportscardtracker.com, all rights reserved</div>
		</footer>
		
	</body>
</html>