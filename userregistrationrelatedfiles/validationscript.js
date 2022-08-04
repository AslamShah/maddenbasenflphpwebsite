function validateForm() {
  var x = document.forms["signupform"]["username"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
 var y = document.forms["signupform"]["email"].value;
 if (y == "") {
    alert("Email must be filled out and valid email");
    return false;
  }
var z = document.forms["signupform"]["password"].value;
 if (z == "") {
    alert("Password must be filled out and a Strong Password");
    return false;
  }
}