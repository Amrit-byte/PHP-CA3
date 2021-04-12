<?php

//login.php

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


//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if (isset($_POST['login'])) {

    //Retrieve the field values from our login form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;

    //Retrieve the user account information for the given username.
    $sql = "SELECT id, username, password,email FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);

    //Bind value.
    $stmt->bindValue(':username', $username);

    //Execute.
    $stmt->execute();

    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //If $row is FALSE.
    if ($user === false) {
        //Could not find a user with that username!
        //PS: You might want to handle this error in a more user-friendly manner!
        die('Incorrect username / password combination!');
    } else {
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.

        //Compare the passwords.
        $validPassword = password_verify($passwordAttempt, $user['password']);

        //If $validPassword is TRUE, the login has been successful.
        if ($validPassword) {

            //Provide the user with a login session.
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = time();

            //Redirect to our protected page, which we called home.php
            header('Location: index.php');
            exit;
        } else {
            //$validPassword was FALSE. Passwords do not match.
            die('Incorrect username / password combination!');
        }
    }
}

?>

<div style="background-image: url('image_uploads/background.jpg');">

<div class="container">
    <?php
    include('includes/header.php');
    ?>
    <h1 id="login-heading">Login</h1>
    <form action="login.php" id="form"method="post">

        <label for="email" id="email">Email: </label>
        <input type="text" id="email" name="email" required placeholder="simonclarke@gmail.com" class="text-input" size="22" onBlur="email_validation();" /><span id="email_err"></span>
        <br>

        <label for="username" id="username">Username: </label>
        <input type="text" id="username" name="username" required placeholder="Simon Clarke" size="20" onBlur="username_validation();" /><span id="name_err"></span>
        <br>

        <label for="password" id="password">Password: </label>
        <input type="text" id="password" name="password" required placeholder="Simonclarke123" size="20" onBlur="password_validation();" /><span id="password_err"></span>
        <br>

        <input type="submit" name="login" id="loginbutton" value="Login">
    </form>
    <?php
    //include('includes/footer.php');
    ?>