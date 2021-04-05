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
function passwd_validation() {
    'use strict';
    var passid_name = document.getElementById("password");
    var passid_value = document.getElementById("password").value;
    var passid_length = passid_value.length;
    if (passid_length < 6) {
        document.getElementById('passwd_err').innerHTML = 'Password must be at least 6 characters long';
        passid_name.focus();
        document.getElementById('passwd_err').style.color = "#FF0000";
    }
    else {
        document.getElementById('passwd_err').innerHTML = 'Valid password';
        document.getElementById('passwd_err').style.color = "#00AF33";
    }
}
//password validation ends





