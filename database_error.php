<!-- the head section -->

<div style="background-image: url('image_uploads/background.jpg');">

<div class="container">
<?php
include('includes/header.php');
?>
        <h1>Database Error</h1>
        <p>There was an error connecting to the database.</p>
        <p>Error message: <?php echo $error_message; ?></p>
        <p>&nbsp;</p>
        <?php
include('includes/footer.php');
?>