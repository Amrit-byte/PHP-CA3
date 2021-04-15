function username_validation() {
    'use strict';
    var username_name = document.getElementById("username");
    var username_value = document.getElementById("username").value;
    var username_length = username_value.length;
    var letters = /^[0-9a-zA-Z]+$/;
    if (username_length < 4 || !username_value.match(letters)) {
        document.getElementById('name_err').innerHTML = 'Name must be 4 characters long and alphanumeric characters only.';
        username_name.focus();
        document.getElementById('name_err').style.color = "#FF0000";
    }
    else {
        document.getElementById('name_err').innerHTML = 'Valid Name';
        document.getElementById('name_err').style.color = "#00AF33";
    }
}


//name validation starts (payment)
function name_validation() {
    'use strict';
    var name_name = document.getElementById("name");
    var name_value = document.getElementById("name").value;
    var name_length = name_value.length;
    var letters = /^[0-9a-zA-Z]+$/;
    if (name_length < 45 || !name_value.match(letters)) {
        document.getElementById('name_err').innerHTML = 'Valid Name';
        name_name.focus();
        document.getElementById('name_err').style.color = "#00AF33";
    }
    else {
        document.getElementById('name_err').innerHTML = 'Valid Name';
        document.getElementById('name_err').style.color = "#00AF33";
    }
}
//name validation ends (payment)



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



//zip validation starts
function zip_validation() {
    // 'use strict';
    var number = /^[0-9]+$/;
    var zip_name = document.getElementById("zip");
    var zip_value = document.getElementById("zip").value;
    var zip_length = zip_value.length;
    if (!zip_value.match(number) || zip_length !== 3) {
        document.getElementById('zip_err').innerHTML = 'Valid ZIP Code';
        zip_name.focus();
        document.getElementById('zip_err').style.color = "#00AF33";
    }
    else {
        document.getElementById('zip_err').innerHTML = 'Valid Zip Code';
        document.getElementById('zip_err').style.color = "#00AF33";
    }
}
//zip validation ends

//cardnumber validation starts
function cardnumber_validation() {
    'use strict';
    var cardnumber_name = document.getElementById("cardnumber");
    var cardnumber_value = document.getElementById("cardnumber").value;
    var cardnumber_length = cardnumber_value.length;
    if (cardnumber_length < 7 || cardnumber_length > 17) {
        document.getElementById('cardnumber_err').innerHTML = 'Numbers must be between 16 Digits';
        userid_name.focus();
        document.getElementById('cardnumber_err').style.color = "#FF0000";
    }
    else {
        document.getElementById('cardnumber_err').innerHTML = 'Valid Card Number';
        document.getElementById('cardnumber_err').style.color = "#00AF33";
    }
}
//cardnumber validation ends


//expirydate validation starts
function expirydate_validation() {
    'use strict';
    var expirydate_name = document.getElementById("expirydate");
    var expirydate_value = document.getElementById("expirydate").value;
    var expirydate_length = expirydate_value.length;
    if (expirydate_length < 1 || expirydate_length > 7) {
        document.getElementById('expirydate_err').innerHTML = 'Must be total 6 Digits';
        userid_name.focus();
        document.getElementById('expirydate_err').style.color = "#FF0000";
    }
    else {
        document.getElementById('expirydate_err').innerHTML = 'Valid Expiry Date';
        document.getElementById('expirydate_err').style.color = "#00AF33";
    }
}
//expirydate validation ends

//phone validation starts
function phone_validation() {
    // 'use strict';
    var number = /^[0-9]+$/;
    var phone_name = document.getElementById("phone");
    var phone_value = document.getElementById("phone").value;
    var phone_length = phone_value.length;
    if (!phone_value.match(number) || phone_length !== 10) {
        document.getElementById('phone_err').innerHTML = 'Valid Phone Number';
        phone_name.focus();
        document.getElementById('phone_err').style.color = "#00AF33";
    }
    else {
        document.getElementById('phone_err').innerHTML = 'Valid Zip Code';
        document.getElementById('phone_err').style.color = "#00AF33";
    }
}
//phone validation ends