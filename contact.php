<!-- the head section -->

<div style="background-image: url('image_uploads/background.jpg');">

    <div class="container">
        <?php
        include('includes/header.php');
        ?>

        <h1>Contact us</h1>
        <form method="POST" name="contactform" action="contact-form-handler.php">
            <p>
                <label for="username">Name:</label><br>
                <input type="text" name="username" id="username" required placeholder="Your Name" class="text-input" size="50" onBlur="username_validation();" /><span id="name_err"></span>
            </p>

            <p>
                <label for='phone'>Phone Number:</label><br>
                <input type="number" name="phone" id="phone" required placeholder="+353 Not Required" class="text-input" size="50" onBlur="phone_validation();" /><span id="phone_err"></span>
            </p>

            <p>
                <label for='address'>Address:</label><br>
                <textarea type="text" name="address" id="address" placeholder="32 cream house , db road , newry" class="text-input" size="50"></textarea>
            </p>

            <p>
                <label for='zip'>ZIP Code:</label><br>
                <input type="number" name="zip" id="zip" required placeholder="603103" class="text-input" size="50" onBlur="zip_validation();" /><span id="zip_err"></span>
            </p>

            <p>
                <label for='email'>Email Address:</label> <br>
                <input type="text" name="email" id="email" required placeholder="Gmail, Yahoo, Hotmail" class="text-input" size="50" onBlur="email_validation();" /><span id="email_err"></span>
                <br>
            </p>
            <p>
                <label for='message'>Message:</label> <br>
                <input type="text" name="message" id="message" size="50" class="text-input" placeholder="Please Enter Atleast 2 Words" />
            </p>
            <input type="submit" id="submitbutton" value="Submit"><br>
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