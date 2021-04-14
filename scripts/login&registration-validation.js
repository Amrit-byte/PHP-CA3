//user name validation starts
function username_validation() {
    'use strict';
    var username_name = document.getElementById("username");
    var username_value = document.getElementById("username").value;
    var username_length = username_value.length;
    var letters = /^[0-9a-zA-Z]+$/;
    if (username_length < 4 || !username_value.match(letters)) {
        document.getElementById('name_err').innerHTML = 'Username must be 4 characters long and alphanumeric characters only.';
        username_name.focus();
        document.getElementById('name_err').style.color = "#FF0000";
    }
    else {
        document.getElementById('name_err').innerHTML = 'Valid username';
        document.getElementById('name_err').style.color = "#00AF33";
    }
}
//user name validation ends

//password validation starts
function password_validation() {
    'use strict';
    var password_name = document.getElementById("password");
    var password_value = document.getElementById("password").value;
    var password_length = password_value.length;
    if (password_length < 6) {
        document.getElementById('password_err').innerHTML = 'Password must be at least 6 characters long';
        password_name.focus();
        document.getElementById('password_err').style.color = "#FF0000";
    }
    else {
        document.getElementById('password_err').innerHTML = 'Valid password';
        document.getElementById('password_err').style.color = "#00AF33";
    }
}
//password validation ends



//email validation starts
function email_validation() {
    'use strict';
    var mailformat = /^\w+([\.\-]?\w+)*@\w+([\.\-]?\w+)*(\.\w{2,3})+$/;
    var email_name = document.getElementById("email");
    var email_value = document.getElementById("email").value;
    var email_length = email_value.length;
    if (!email_value.match(mailformat) || email_length === 0) {
        document.getElementById('email_err').innerHTML = 'This is not a valid email format.';
        email_name.focus();
        document.getElementById('email_err').style.color = "#FF0000";
    }
    else {
        document.getElementById('email_err').innerHTML = 'Valid email format';
        document.getElementById('email_err').style.color = "#00AF33";
    }
}
//email validation ends





























