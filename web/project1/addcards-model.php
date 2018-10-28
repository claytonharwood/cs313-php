<?php

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