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

/* 
 *  Add Cards Model
 */

// Insert product into database
function addCard($playerId, $year, $cardType, $cardNumber ){
// The SQL statement
$sql = 'INSERT INTO cardInfo (playerId, year, cardType, cardNumber) VALUES (:playerId, :year, :cardType, :cardNumber)';
// Create the prepared statement using the acme connection
$stmt = $db->prepare($sql);
// The next four lines replace the placeholders in the SQL
// statement with the actual values in the variables
// and tells the database the type of data it is
$stmt->bindValue(':playerId', $playerId, PDO::PARAM_STR);
$stmt->bindValue(':year', $year, PDO::PARAM_STR);
$stmt->bindValue(':cardType', $cardType, PDO::PARAM_STR);
$stmt->bindValue(':cardNumber', $cardNumber, PDO::PARAM_STR);
// Insert the data
$stmt->execute();
// Ask how many rows changed as a result of our insert
$rowsChanged = $stmt->rowCount();
// Close the database interaction
$stmt->closeCursor();
// Return the indication of success (rows changed)
return $rowsChanged;
}