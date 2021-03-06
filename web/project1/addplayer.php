<?php

include './db.php';

// get the data from the POST
$playerid = $_POST['playerid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

try
{
	
	$query = 'INSERT INTO player(playerid, firstname, lastname) VALUES(:playerid, :firstname, :lastname)';
	$statement = $db->prepare($query);
	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':playerid', $playerid);
	$statement->bindValue(':firstname', $firstname);
	$statement->bindValue(':lastname', $lastname);
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