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
			  echo 'Id#: ' . $row['playerId'] . 'First Name: ' . $row['firstName'] . ' lastName: ' . $row['lastName'] . '<br/>';
			}
		?>

		<h3>Card Info</h3>
		<?php
	      foreach ($db->query(‘SELECT year, cardtype, cardnumber FROM cardInfo’) as $row)
	       {
	         echo ‘Year: ’ . $row[‘year’];
	         echo ' Card Type: ' . $row[‘cardtype’];
	         echo ' Card Number: ' . $row[‘cardnumber’];
	         echo ‘<br/>’;
	       }
	       ?>

		<?php
		$statement = $db->prepare("SELECT playerid, year, cardtype, cardnumber FROM cardInfo");
		$statement->execute();
		// Go through each result
		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			// The variable "row" now holds the complete record for that
			// row, and we can access the different values based on their
			// name
			echo '<p>';
			echo '<strong>' . $row['playerid'] . ' ' . $row['year'] . ':';
			echo $row['cardtype'] . '</strong>' . ' - ' . $row['cardnumber'];
			echo '</p>';
		}
		?>

		</div>	

		<footer>
			<div class="copyright">&copy 2018 www.sportscardtracker.com, all rights reserved</div>
		</footer>
		
	</body>
</html>