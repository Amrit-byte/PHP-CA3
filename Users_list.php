<?php
session_start();
/*
 * Check if the user is logged in.
 */
if (!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])) {
    //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
    exit;
}
/*
 * Print out something that only logged in users can see.
 */
echo 'Congratulations! You are logged in!';
require_once('database.php');
?>


<?php
// Get all users
$query = 'SELECT * FROM users
              ORDER BY id';
$statement = $db->prepare($query);
$statement->execute();
$user = $statement->fetchAll();
$statement->closeCursor();
?>
<!-- the head section -->

<div style="background-image: url('image_uploads/background.jpg');">

<div class="container">
    <?php
    include('includes/header.php');
    ?>
    <h1 id="userlist-heading">Users List</h1>
    <table id="table">
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($user as $user) : ?>
            <tr>
                <td><?php echo $user['username']; ?></td>
                <td>
                    <form action="delete_user.php" method="post" id="delete_product_form">
                        <input type="hidden" name="user_id" value="<?php echo $category['id']; ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <?php
    include('includes/footer.php');
    ?>