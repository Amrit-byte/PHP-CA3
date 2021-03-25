<!-- the head section -->
<div class="container">
    <?php
    include('includes/header.php');
    ?>

    <h1>Contact us</h1>
    <form method="POST" name="contactform" action="contact-form-handler.php">
        <p>
            <label for='name'>Name:</label> <br>
            <input type="text" name="name" required placeholder="First Name Only (James)">
        </p>

        <p>
            <label for='phone'>Phone Number:</label> <br>
            <input type="numbers" name="phone" required placeholder="+353 Not Required">
        </p>

        <p>
            <label for='address'>Address:</label> <br>
            <textarea name="address" placeholder="32 cream house , db road , newry"></textarea>
        </p>

        <p>
            <label for='pincode'>Pincode:</label> <br>
            <input type="char" name="pincode" placeholder="A91 YH05">
        </p>

        <p>
            <label for='email'>Email Address:</label> <br>
            <input type="text" name="email" required placeholder="Gmail, Yahoo, Hotmail"> <br>
        </p>
        <p>
            <label for='message'>Message:</label> <br>
            <textarea name="message" placeholder="Please Enter Atleast 3 Words"></textarea>
        </p>
        <input type="submit" value="Submit"><br>
    </form>

    <script language="JavaScript">
        var frmvalidator = new Validator("contactform");
        frmvalidator.addValidation("name", "req", "Please provide your name");
        frmvalidator.addValidation("name", "req", "Please provide your phone");
        frmvalidator.addValidation("name", "req", "Please provide your address");
        frmvalidator.addValidation("name", "req", "Please provide your pincode");
        frmvalidator.addValidation("email", "req", "Please provide your email");
        frmvalidator.addValidation("email", "email", "Please enter a valid email address");
    </script>

    <?php
    include('includes/footer.php');
    ?>