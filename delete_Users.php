<?php
// Get ID
$user = filter_input(INPUT_POST, 'username', FILTER_VALIDATE_INT);

// Validate inputs
if ($user == null || $user == false) {
    $error = "Invalid User ID.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'DELETE FROM users 
              WHERE id = :user';
    $statement = $db->prepare($query);
    $statement->bindValue(':user', $user);
    $statement->execute();
    $statement->closeCursor();

    // Display the Category List page
    include('Users_list.php');
}
