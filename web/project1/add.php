<?php

// get the data from the POST
$playerid = $_POST['playerid'];
$year = $_POST['year'];
$cardtype = $_POST['cardtype'];
$cardnumber = $_POST['cardnumber'];

require("db.php");
$db = get_db();
try
{
	
	$query = 'INSERT INTO cardinfo(playerid, year, cardtype, cardnumber) VALUES(:playerid, :year, :cardtype, :cardnumber)';
	$statement = $db->prepare($query);
	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':playerid', $playerid);
	$statement->bindValue(':year', $year);
	$statement->bindValue(':cardtype', $cardtype);
	$statement->bindValue(':cardnumber', $cardnumber);
	$statement->execute();
	
	
}
catch (Exception $ex)
{
	
	echo "Error with DB. Details: $ex";
	die();
}
// finally, redirect them to a new page to actually show the topics
header("Location: index.php");
die(); 
?>