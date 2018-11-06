<?php

// get the data from the POST
$book = $_POST['txtBook'];
$chapter = $_POST['txtChapter'];
$verse = $_POST['txtVerse'];
$content = $_POST['txtContent'];
$topicIds = $_POST['chkTopics'];

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