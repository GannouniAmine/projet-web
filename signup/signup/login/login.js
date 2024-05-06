function myfunction() {
    let x = document.getElementById("x1");
    x.value = x.value.toUpperCase();
}
function verifier(){
    var username = document.getElementById("x1").value;
    var password = document.getElementById("x2").value;
    if (username==""|| password=="") {
        alert("Please enter both username and password.");
        return;
    }
    return;
}

function myFunction1() {
    alert("You selected some text!");
}
