<!-- the head section -->

<div style="background-image: url('image_uploads/background.jpg');">

<div class="container">
    <?php
    include('includes/header.php');
    ?>

    <h1 id="contact-heading">Contact us</h1>
    <form method="POST" name="contactform" id="contactform" action="contact-form-handler.php">
        <p>
            <label for="username" id="username">Name:</label><br>
            <input type="text" name="username" id="username" required placeholder="Your Name" class="text-input" size="50" onBlur="username_validation();" /><span id="name_err"></span>
        </p>

        <p>
            <label for='phone' id="phone">Phone Number:</label><br>
            <input type="numbers" name="phone" id="phone" required placeholder="+353 Not Required" class="text-input" size="50">
        </p>

        <p>
            <label for='address' id="address">Address:</label><br>
            <!-- <textarea name="address" placeholder="32 cream house , db road , newry" size="50"></textarea> -->
            <input type="text" name="address" id="address" placeholder="32 cream house , db road , newry" class="text-input" size="50">
        </p>

        <p>
            <label for='zip' id="zip">ZIP Code:</label> <br>
            <input type="numbers" name="zip" id="zip" required placeholder="A91 YH05" size="50">
        </p>


        <p>
            <label for='email' id="email">Email Address:</label> <br>
            <input type="text" name="email" id="email" required placeholder="Gmail, Yahoo, Hotmail" class="text-input" size="50" onBlur="email_validation();" /><span id="email_err"></span>
            <br>
        </p>
        <p>
            <label for='message' id="message">Message:</label> <br>
            <!-- <textarea name="message" size="50" placeholder="Please Enter Atleast 2 Words"></textarea> -->
            <input type="text" name="message" id="message" placeholder="Please Enter Atleast 2 Words" class="text-input" size="50">
        </p>
        <input type="submit" id="submitbutton"value="Submit"><br>
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