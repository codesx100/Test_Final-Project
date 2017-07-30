<?php
require_once 'database.php';

$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$eventcode= filter_input(INPUT_POST, 'EventCode', FILTER_VALIDATE_INT);
$word = ('Y'):

if ($product_id != false && $category_id != false) {
 $query ="UPDATE Events 
          SET Done= :word
          WHERE  EventCode = :eventcode";
        
  $statement = $db->prepare($query);
  $statement->bindValue(':eventcode', $eventcode);
  $success = $statement->execute();
  $statement->closeCursor();    
}

// Display the Product List page
include('index.php');