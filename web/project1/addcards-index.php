<?php

// Create or access a Session
session_start();



$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');
}

switch ($action){
 
case 'addcard':
      // Filter and store the data
      $playerId = filter_input(INPUT_POST, 'playerId', FILTER_SANITIZE_STRING);
      $year = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_STRING);
      $cardType = filter_input(INPUT_POST, 'cardType', FILTER_SANITIZE_STRING);
      $cardNumber = filter_input(INPUT_POST, 'cardNumber', FILTER_SANITIZE_STRING);
            
    // Check for missing data
    if(empty($playerId) || (empty($year) || empty($cardType) || empty($cardNumber)){
      $message = '<p>Please provide information for all empty form fields.</p>';
      include 'addcards.php';
      exit;
    }

    // Send the data to the model
    $prodOutcome = addCard($playerId, $year, $cardType, $cardNumber);

    // Check and report the result
    if($prodOutcome === 1){
      $message = "<p>Thanks for adding your card.</p>";
      include 'addcards.php';
      exit;
    } else {
      $message = "<p>Sorry, card failed to be added, please try again.</p>";
      include 'addcards.php';
      exit;
    }
    break;
    default:
       
      }        
        include 'addcards.php';