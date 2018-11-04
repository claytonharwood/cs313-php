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


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');
}

switch ($action){
 
case 'addcard':
      // Filter and store the data
      $playerid = filter_input(INPUT_POST, 'playerid', FILTER_SANITIZE_STRING);
      $year = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_STRING);
      $cardtype = filter_input(INPUT_POST, 'cardtype', FILTER_SANITIZE_STRING);
      $cardnumber = filter_input(INPUT_POST, 'cardnumber', FILTER_SANITIZE_STRING);
            
    // Check for missing data
    if(empty($playerid) || (empty($year) || empty($cardtype) || empty($cardnumber)){
      $message = '<p>Please provide information for all empty form fields.</p>';
      include 'addcards.php';
      exit;
    }

    // Send the data to the model
    $prodOutcome = addCard($playerid, $year, $cardtype, $cardnumber);

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