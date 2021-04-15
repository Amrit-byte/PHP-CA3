<!-- <?php
        // session_start();
        // if( isset($_SESSION['user_id']) && $_SESSION['user_id']==37 )
        // {
        //     echo'Hello ! Admin';
        // }
        // else
        // {
        //     echo'No Access !';
        // }
        ?> -->


<div style="background-image: url('image_uploads/background.jpg');">
    <div class="container">
        <?php
        include('includes/header.php');
        ?>

        <div class="adminaccess">
            <a href="manage-coffee.php"><i class="fa fa-reorder"></i> Manage Coffee </a><br>
            <a href="category_list.php"><i class="fa fa-file-text"></i> Manage Categories </a><br>
            <a href="Users_list.php"><i class="fa fa-male"></i> Manage Users </a><br>
        </div>


        <?php
        include('includes/footer.php');
        ?>