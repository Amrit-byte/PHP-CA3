<?php

/**
 * Start the session.
 */
session_start();

require_once('database.php');

// Get category ID
if (!isset($category_id)) {
    $category_id = filter_input(
        INPUT_GET,
        'category_id',
        FILTER_VALIDATE_INT
    );
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
}

// Get name for current category
$queryCategory = "SELECT * FROM categories
WHERE categoryID = :category_id";
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':category_id', $category_id);
$statement1->execute();
$category = $statement1->fetch();
$statement1->closeCursor();
$category_name = $category['categoryName'];

// Get all categories
$queryAllCategories = 'SELECT * FROM categories
ORDER BY categoryID';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$categories = $statement2->fetchAll();
$statement2->closeCursor();

// Get records for selected category
$queryRecords = "SELECT * FROM records
WHERE categoryID = :category_id
ORDER BY recordID";
$statement3 = $db->prepare($queryRecords);
$statement3->bindValue(':category_id', $category_id);
$statement3->execute();
$records = $statement3->fetchAll();
$statement3->closeCursor();
?>


<div style="background-image: url('image_uploads/background.jpg');">

    <div class="container">
        <?php
        include('includes/header.php');
        ?>
        <!-- <h1>Coffee List</h1> -->

        <aside>
            <!-- display a list of categories -->
            <h2>COFFEES<br><i class="fa fa-coffee"></i></h2>
            <nav>
                <ul>
                    <?php foreach ($categories as $category) : ?>
                        <li><a href="manage-coffee.php?category_id=<?php echo $category['categoryID']; ?>">
                                <?php echo $category['categoryName']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </aside>

        <section>
            <!-- display a table of records -->
            <h2><?php echo $category_name; ?></h2>

            <div class="loginmessage">
                <?php
                if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 37 || !isset($_SESSION['logged_in'])) {
                    //User not logged in. Redirect them back to the login.php page.
                    header('Location: login.php');
                    echo 'Sorry No Access unless Admin';
                    exit;
                } else {
                    echo 'Hello Admin  !   ';
                }


                /**
                 * Print out something that only logged in users can see.
                 */

                echo ' Congratulations ! You are logged in !   ';
                ?>

            </div>


            <table id="table">
                <tr>
                    <th>Image <br><i class="fa fa-camera-retro"></i></th>
                    <th>Country <i class="fa fa-globe"></i></th>
                    <th>Name <br><i class="fa fa-coffee"></i></th>
                    <th>Description <br><i class="fa fa-edit"></i></th>
                    <th>Price <br><i class="fa fa-euro"></i></th>
                    <th>Add <br><i class="fa fa-plus-square"></i></th>
                    <th>Edit <br><i class="fa fa-edit"></i></th>
                    <th>Delete<br><i class="fa fa-recycle"></i></th>

                </tr>
                <?php foreach ($records as $record) : ?>
                    <tr>
                        <td><img src="image_uploads/<?php echo $record['image']; ?>" width="100px" height="100px" /></td>
                        <td><?php echo $record['CountryofOrigin']; ?></td>
                        <td><?php echo $record['name']; ?></td>
                        <td><?php echo $record['Description']; ?></td>
                        <td><?php echo $record['price']; ?></td>
                        <td>
                            <form action="add_record_form.php" method="post" id="delete_record_form">
                                <input type="hidden" name="record_id" value="<?php echo $record['recordID']; ?>">
                                <input type="hidden" name="category_id" value="<?php echo $record['categoryID']; ?>">
                                <input type="submit" value="Add">
                            </form>
                        </td>
                        <td>
                            <form action="edit_record_form.php" method="post" id="delete_record_form">
                                <input type="hidden" name="record_id" value="<?php echo $record['recordID']; ?>">
                                <input type="hidden" name="category_id" value="<?php echo $record['categoryID']; ?>">
                                <input type="submit" value="Edit">
                            </form>
                        </td>
                        <td>
                            <form action="delete_record.php" method="post" id="delete_record_form">
                                <input type="hidden" name="record_id" value="<?php echo $record['recordID']; ?>">
                                <input type="hidden" name="category_id" value="<?php echo $record['categoryID']; ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
        <?php
        include('includes/footer.php');
        ?>