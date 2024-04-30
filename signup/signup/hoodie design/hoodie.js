function validateForm() {
    var usernameInput = document.getElementById("username");
    var emailInput = document.getElementById("email");
    var descriptionTextArea = document.getElementById("yamine");
    var avatarInput = document.getElementById("avatar");

    if (usernameInput.value == "") {
        alert("Please enter your username.");
        return false;
    }

    if (emailInput.value =="") {
        alert("Please enter your email address.");
        return false;
    }
    if (descriptionTextArea.value == "") {
        alert("Please enter the hoodie description.");
        return false;
    }

    if (avatarInput.value =="") {
        alert("Please select a hoodie photo.");
        return false;
    }

    alert("Form submitted successfully!");
    return false;
}
