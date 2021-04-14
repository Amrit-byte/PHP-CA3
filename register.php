<?php
//register.php

/**
 * Start the session.
 */
session_start();

/**
 * Include ircmaxell's password_compat library.
 */
require 'library-password/password.php';

/**
 * Include our MySQL connection.
 */
require 'login_connect.php';


//If the POST var "register" exists (our submit button), then we can
//assume that the user has submitted the registration form.
if (isset($_POST['register'])) {

    //Retrieve the field values from our registration form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;

    //TO ADD: Error checking (username characters, password length, etc).
    //Basically, you will need to add your own error checking BEFORE
    //the prepared statement is built and executed.

    //Now, we need to check if the supplied username already exists.

    //Construct the SQL statement and prepare it.
    $sql = "SELECT COUNT(username) AS num FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);

    //Bind the provided username to our prepared statement.
    $stmt->bindValue(':username', $username);

    //Execute.
    $stmt->execute();

    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //If the provided username already exists - display error.
    //TO ADD - Your own method of handling this error. For example purposes,
    //I'm just going to kill the script completely, as error handling is outside
    //the scope of this tutorial.
    if ($row['num'] > 0) {
        die('That username already exists!');
    }

    //Hash the password as we do NOT want to store our passwords in plain text.
    $passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));

    //Prepare our INSERT statement.
    //Remember: We are inserting a new row into our users table.
    $sql = "INSERT INTO users (username, password,email) VALUES (:username, :password,:email)";
    $stmt = $pdo->prepare($sql);

    //Bind our variables.
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $passwordHash);
    $stmt->bindValue(':email', $email);

    //Execute the statement and insert the new account.
    $result = $stmt->execute();

    //If the signup process is successful.
    if ($result) {
        //What you do here is up to you!
        echo 'Thank you for registering with our website.';
    }
}
?>

<div style="background-image: url('image_uploads/background.jpg');">

    <div class="container">
        <?php
        include('includes/header.php');
        ?>
        <h1>Register</h1>
        <form action="register.php" id="add_record_form" method="post">

            <label for="email">Email</label>
            <input type="text" name="email" id="email" required placeholder="emilyforest@gmail.com" class="text-input" onBlur="email_validation();" /><span id="email_err"></span>
            <br>
            <label for="username">User Name:</label>
            <input type="text" name="username" id="username" required placeholder="Emily Forest" class="text-input" onBlur="username_validation();" /><span id="name_err"></span>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required placeholder="Emilyforest123" class="text-input" onBlur="password_validation();" /><span id="password_err"></span>
            <br>
            <input type="submit" name="register" value="Register"></button>
        </form>
        <?php
        include('includes/footer.php');
        ?>