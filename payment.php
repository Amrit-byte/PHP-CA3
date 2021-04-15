<!-- the head section -->

<div style="background-image: url('image_uploads/background.jpg');">

    <div class="container">
        <?php
        include('includes/header.php');
        ?>

        <h1>Pay Now : <br><i class="fa fa-cc-visa"></i></h1>
        <form method="POST" name="pay" action="payment-handler.php">
            <p>
                <label for="cardnumber">Card Number:</label><br>
                <input type="numbers" name="cardnumber" id="cardnumber" required placeholder="Your 16 Digit Card Number " class="text-input" size="50" onBlur="cardnumber_validation();" /><span id="cardnumber_err"></span>
            </p>

            <p>
                <label for='expirydate'>Expiry Date:</label><br>
                <input type="numbers" name="expirydate" id="expirydate" required placeholder="04-2025" class="text-input" size="50" onBlur="expirydate_validation();" /><span id="expirydate_err"></span>
            </p>

            <p>
                <label for='name'>Name on Card:</label><br>
                <input type="text" name="name" id="name" placeholder="Name on Card" class="text-input" size="50" onBlur="name_validation();" /><span id="name_err"></span>
            </p>

            <p>
                <label for='cardcode'>Card Security Code:</label> <br>
                <input type="numbers" name="cardcode" id="cardcode" required placeholder="Last 3 Digits on Back of Card" size="50">
            </p>

            <p>
                <label for='email'>Email Address:</label> <br>
                <input type="text" name="email" id="email" required placeholder="Gmail, Yahoo, Hotmail" class="text-input" size="50" onBlur="email_validation();" /><span id="email_err"></span>
                <br>
            </p>
            <p>
                <label for='message'>Payment Message:</label> <br>
                <textarea type="text" name="message" id="message" size="50" class="text-input" placeholder="Please Enter Atleast 2 Words"></textarea>
            </p>

            <input type="submit" value="Pay"><br>
        </form>

        <script language="JavaScript">
            var frmvalidator = new Validator("pay");
            frmvalidator.addValidation("cardnumber", "req", "Please provide your cardnumber");
            frmvalidator.addValidation("expirydate", "req", "Please provide your expirydate");
            frmvalidator.addValidation("name", "req", "Please provide your name");
            frmvalidator.addValidation("cardcode", "req", "Please provide your cardcode");
            frmvalidator.addValidation("email", "req", "Please provide your email");
            frmvalidator.addValidation("email", "email", "Please enter a valid email address");
        </script>

        <?php
        include('includes/footer.php');
        ?>