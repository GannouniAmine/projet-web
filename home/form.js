function validateForm() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;
    var errorMessage = "";

    var emailRegex = /^\S+@\S+\.\S+$/;
    var phoneRegex = /^\d{10}$/;

    if (name === "") {
        errorMessage += "Please enter your name.<br>";
    }
    if (phone === "") {
        errorMessage += "Please enter your phone number.<br>";
    } else if (!phoneRegex.test(phone)) {
        errorMessage += "Please enter a valid 8-digit phone number.<br>";
    }
    if (email === "") {
        errorMessage += "Please enter your email address.<br>";
    } else if (!emailRegex.test(email)) {
        errorMessage += "Please enter a valid email address.<br>";
    }
    if (subject === "") {
        errorMessage += "Please enter the subject.<br>";
    }
    if (message === "") {
        errorMessage += "Please enter your message.<br>";
    }

    var errorDiv = document.getElementById("error-messages");
    if (errorMessage !== "") {
        errorDiv.innerHTML = errorMessage;
        errorDiv.style.display = "block";
    } else {
        errorDiv.style.display = "none";
        document.getElementById("myForm").submit();
    }
}


function myfunction() {
    let x = document.getElementById("name");
    x.value = x.value.toUpperCase();
}

function myFunction1() {
    alert("You selected some text!");
  }
