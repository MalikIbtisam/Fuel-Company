function validateLogin() {
    var username = document.forms["loginForm"]["username"].value;
    var password = document.forms["loginForm"]["password"].value;
    var errorMessage = document.forms["loginForm"]["error-message"];
    if(username.trim() === '' || password.trim() === '') {
        errorMessage.textContent = 'Please enter both username and password.';
        return true;
    } else {
        errorMessage.textContent = '';
        alert('Login successful!');
        return false;
    }
}

function validateRegister() {
    let errors = [];
    let fullName = document.forms["registrationForm"]["fullName"].value;
    let address1 = document.forms["registrationForm"]["address1"].value;
    let address2 = document.forms["registrationForm"]["address1"].value;
    let city = document.forms["registrationForm"]["city"].value;
    let state = document.forms["registrationForm"]["state"].value;
    let zipCode = document.forms["registrationForm"]["zipCode"].value;

    if (fullName.length < 1 || fullName.length > 50) {
      errors.push("Full Name must be between 1 and 50 characters.");
    }
    if (address1.length > 100) {
      errors.push("Address 1 must be less than 100 characters.");
    }
    if (address2.length > 100) {
      errors.push("Address 2 must be less than 100 characters.");
    }
    if (city.length > 100) {
      errors.push("City must be less than 100 characters.");
    }
    if (state.length < 1) {
      errors.push("State must be selected.");
    }
    if (zipCode.length < 5 || zipCode.length > 9) {
      errors.push("Zip code must be between 5 and 9 characters.");
    }

    if (errors.length > 0) {
      alert(errors.join("\n"));
      return false;
    }
    return true;
}

function updateProfile() {
  return true;
}

