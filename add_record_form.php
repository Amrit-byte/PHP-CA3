<?php

/**
 * Start the session.
 */
session_start();

/**
 * Check if the user is logged in.
 */
if (!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])) {
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

<div style="background-image: url('image_uploads/background.jpg');">


<div class="container">
    <?php
    include('includes/header.php');
    ?>
    <h1 id="addrecord-heading">Add New Coffee</h1>
    <form action="add_record.php" method="post" enctype="multipart/form-data" id="add_record_form">

        <label id="CountryofOriginid">CoffeeID:</label>
        <select id="CountryofOriginid" name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>

        <label id="CountryofOriginid">Origin:</label>
        <input type="input" name="CountryofOrigin" placeholder="Name of Country" id="CountryofOriginid" size="50" onBlur="CountryofOrigin_validation();" /><span id="CountryofOriginid_err"></span>
        <br>

        <label id="name">Name:</label>
        <input type="input" name="name" required placeholder="English Name (coffee)" id="name" size="50" onBlur="name_validation();" /><span id="name_err"></span>
        <br>

        <label id="Description">Description:</label>
        <input type="input" name="Description" id="Description" size="50" placeholder="Min 2 words required">
        <br>

        <label id="price">Price:</label>
        <input type="input" name="price" id="price" size="50" required placeholder="Decimals with 2 places">
        <br>

        <label id="price">Image:</label>
        <input type="file" id="price" name="image" accept="image/*" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" id="addbutton"value="Add Record">
        <br>
    </form>

    <?php
    include('includes/footer.php');
    ?>