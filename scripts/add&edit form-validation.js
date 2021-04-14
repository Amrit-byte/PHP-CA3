//CountryofOrigin validation starts
function CountryofOrigin_validation() {
    'use strict';
    var CountryofOrigin_name = document.getElementById("CountryofOrigin");
    var CountryofOrigin_value = document.getElementById("CountryofOrigin").value;
    var CountryofOrigin_length = CountryofOrigin_value.length;
    if (CountryofOrigin_length < 4 || CountryofOrigin_length > 122) {
        document.getElementById('CountryofOrigin_err').innerHTML = 'Country name must not be less than 4 characters';
        CountryofOriginid_name.focus();
        document.getElementById('CountryofOrigin_err').style.color = "#FF0000";
    }
    else {
        document.getElementById('CountryofOrigin_err').innerHTML = 'Valid Country Name';
        document.getElementById('CountryofOrigin_err').style.color = "#00AF33";
    }
}
//CountryofOrigin validation ends


//name validation starts
function name_validation() {
    'use strict';
    var name_name = document.getElementById("name");
    var name_value = document.getElementById("name").value;
    var name_length = name_value.length;
    if (name_length < 4 || name_length > 122) {
        document.getElementById('name_err').innerHTML = 'Coffee name must not be less than 3 characters';
        name_name.focus();
        document.getElementById('name_err').style.color = "#FF0000";
    }
    else {
        document.getElementById('name_err').innerHTML = 'Valid Coffee Name';
        document.getElementById('name_err').style.color = "#00AF33";
    }
}
//name validation ends

