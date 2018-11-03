<?php include './db.php' ?>

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
					<li><a href="index.php"> Home </a></li>
					<li><a href="addcards.php">Add Cards</a></li>
				</ul>
			</nav>
		</div>	
		<div class="bg"></div>
		<hr>
		<div id="page">	
		<?php
		$statement = $db->query('SELECT * FROM player');
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
			  echo 'Id#: ' . $row['playerId'] . 'First Name: ' . $row['firstName'] . ' lastName: ' . $row['lastName'] . '<br/>';
			}
		?>


		<?php  	
    	foreach ($db->query('SELECT year, cardType, cardNumber FROM cardInfo') as $row)
		{
		  echo 'Year: ' . $row['year'];
		  echo ' Card Type: ' . $row['cardType'];
		  echo ' Card Number: ' . $row['cardNumber'];
		  echo '<br/>';
		}
		?>

		<?php
            $query = 'SELECT * FROM cardInfo';
            	foreach($db->query($query) as $row) { 
        ?>
               <h3> <?php echo $row['year'].' '.$row['cardType'].':'.$row['cardNumber']; ?></h3>
               
        <?php } ?>

		</div>	

		<footer>
			<div class="copyright">&copy 2018 www.sportscardtracker.com, all rights reserved</div>
		</footer>
		
	</body>
</html>