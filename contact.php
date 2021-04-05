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























<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<link rel="stylesheet" href="mystyle.css">
<title>JavaScript Form Validation</title>
<meta name="keywords" content="example, JavaScript Form Validation" />
<meta name="description" content="This document is an example of JavaScript Form Validation." />
</head>
<body>
<h1>Registration Form</h1>
<form name='registration'>
<ul>
<li><label for="userid">User id:</label></li>
<li><input type="text" name="userid" id="userid" size="12" onBlur="userid_validation();"/><span id="uid_err"></span></li>
<li><label for="passid">Password:</label></li>
<li><input type="password" name="passid" id="passid" size="12" onBlur="passwd_validation();"/><span id="passwd_err"></span></li>
<li><label for="username">Name:</label></li>
<li><input type="text" name="username" id="username" size="50" onBlur="username_validation();" /><span id="name_err"></span></li>
<li><label for="address">Address:</label></li>
<li><input type="text" name="address" id="address" size="50" /><span id="add_err"></span></li>
<li><label for="country">Country:</label></li>
<li><select id="country" name="country" onBlur="country_validation();">
<option selected="" value="Default">(Please select a country)</option>
<option value="--">none</option>
<option value="AF">Australia</option>
<option value="AL">Canada</option>
<option value="DZ">India</option>
<option value="AS">Russia</option>
<option value="AD">USA</option>
</select><span id="country_err"></span></li>
<li><label for="zip">ZIP Code:</label></li>
<li><input type="text" name="zip" id="zip" onBlur="zip_validation();" /><span id="zip_err"></span></li>
<li><label for="email">Email:</label></li>
<li><input type="text" name="email" id="email" size="50" onBlur="email_validation();"/><span id="email_err"></span></li>
<li><label id="gender">Sex:</label></li>
<li><input type="radio" name="msex" id="msex" value="Male" onBlur="gender_validation();" /><span>Male</span></li>
<li><input type="radio" name="fsex" id="fsex" value="Female" /><span>Female</span><span id="gender_err"></span></li>
<li><label>Language:</label></li>
<li><input type="checkbox" name="en" value="en" checked /><span>English</span></li>
<li><input type="checkbox" name="nonen" value="noen" /><span>Non English</span></li>
<li><label for="desc">About:</label></li>
<li><textarea name="desc" id="desc"></textarea></li>
<li><input type="submit" name="submit" value="Submit" /></li>
</ul>
</form>
</body>
<script src="validation.js"></script>
</html>
