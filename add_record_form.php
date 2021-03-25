<?php

/**
 * Start the session.
 */
session_start();

/**
 * Check if the user is logged in.
 */
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
    exit;
}


/**
 * Print out something that only logged in users can see.
 */

echo 'Congratulations! You are logged in!';

require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!-- the head section -->
<div class="container">
    <?php
    include('includes/header.php');
    ?>
    <h1>Add New Coffee</h1>
    <form action="add_record.php" method="post" enctype="multipart/form-data" id="add_record_form">

        <label>Coffee</label>
        <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>

        <label>Origin:</label>
        <input type="input" name="CountryofOrigin" placeholder="Name of Country">
        <br>

        <label>Name:</label>
        <input type="input" name="name" required placeholder="English Name (coffee)">
        <br>

        <label>Description:</label>
        <input type="input" name="Description" placeholder="Min 3 words required">
        <br>

        <label>List Price:</label>
        <input type="input" name="price" required placeholder="Decimals with 2 places">
        <br>

        <label>Image:</label>
        <input type="file" name="image" accept="image/*" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Record">
        <br>
    </form>
    <p><a href="index.php">Back to Homepage <----- </a>
    </p>
    <?php
    include('includes/footer.php');
    ?>