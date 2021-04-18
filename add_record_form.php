<?php

/**
 * Start the session.
 */
session_start();

/**
 * Check if the user is admin logged in.
 */
// if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != 37) {
//     //User not logged in. Redirect them back to the login.php page.
//     header('Location: login.php');
//     exit;

// }
    if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 37 || !isset($_SESSION['logged_in'])) {
        //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
        echo 'Sorry No Access unless Admin';
        exit;
    } else {
        echo 'Hello Admin !';
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

<div style="background-image: url('image_uploads/background.jpg');">


<div class="container">
    <?php
    include('includes/header.php');
    ?>
    <h1>Add New Coffee<br><i class="fa fa-plus-square"></i></h1>
    <form action="add_record.php" method="post" enctype="multipart/form-data" id="add_record_form">

        <label>CoffeeID:</label>
        <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>

        <label>Origin:</label>
        <input type="input" name="CountryofOrigin" id="CountryofOrigin" placeholder="Name of Country"  size="50" onBlur="CountryofOrigin_validation();" /><span id="CountryofOrigin_err"></span>
        <br>

        <label>Name:</label>
        <input type="input" name="name" id="name" required placeholder="English Name (coffee)"  size="50" onBlur="name_validation();" /><span id="name_err"></span>
        <br>

        <label>Description:</label>
        <input type="input" name="Description" id="Description" placeholder="Min 2 words required" size="50" >
        <br>

        <label>Price:</label>
        <input type="input" name="price" id="price" required placeholder="Decimals with 2 places" size="50" >
        <br>

        <label>Image:</label>
        <input type="file" id="price" name="image" accept="image/*" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" id="addbutton" value="Add Record">
        <br>
    </form>
    <p><a href="index.php">View Homepage</a></p>
    <?php
    include('includes/footer.php');
    ?>