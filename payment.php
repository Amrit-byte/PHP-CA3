<!-- the head section -->

<div style="background-image: url('image_uploads/background.jpg');">

    <div class="container">
        <?php
        include('includes/header.php');
        ?>

        <h1 id="pay-heading">Pay Now : <br><i class="fa fa-cc-visa"></i></h1>
        <form method="POST" name="pay" id="pay" action="payment-handler.php">
            <p>
                <label for="cardnumber" id="cardnumber">Card Number:</label><br>
                <input type="numbers" name="cardnumber" id="cardnumber" required placeholder="Your Card Number " class="text-input" size="50">
            </p>

            <p>
                <label for='expirydate' id="expirydate">Expiry Date:</label><br>
                <input type="numbers" name="expirydate" id="expirydate" required placeholder="04-2025" class="text-input" size="50">
            </p>

            <p>
                <label for='name' id="name">Name on Card:</label><br>
                <!-- <textarea name="address" placeholder="32 cream house , db road , newry" size="50"></textarea> -->
                <input type="text" name="name" id="name" placeholder="Name on Card" class="text-input" size="50">
            </p>

            <p>
                <label for='cardcode' id="cardcode">Card Security Code:</label> <br>
                <input type="numbers" name="cardcode" id="cardcode" required placeholder="Last 3 Digits on Back of Card" size="50">
            </p>

            <p>
                <label for='email' id="email">Email Address:</label> <br>
                <input type="text" name="email" id="email" required placeholder="Gmail, Yahoo, Hotmail" class="text-input" size="50" onBlur="email_validation();" /><span id="email_err"></span>
                <br>
            </p>
            <p>
                <label for='message' id="message">Payment Message:</label> <br>
                <!-- <textarea name="message" size="50" placeholder="Please Enter Atleast 2 Words"></textarea> -->
                <input type="text" name="message" id="message" required placeholder="Please Enter Atleast 2 Words" class="text-input" size="50">
            </p>

            <input type="submit" id="paybutton" value="Pay"><br>
        </form>

        <script language="JavaScript">
            var frmvalidator = new Validator("Payment");
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