document.getElementById("subscriptionForm").addEventListener("submit", function(event) {
    const email = document.getElementById("email").value;
    const pass = document.getElementById("pass").value;
    const emailError = document.getElementById("emailError");
    const passError = document.getElementById("passError");

    let hasError = false;

    if (email === "") {
        emailError.textContent = "Email is required.";
        hasError = true;
    } else {
        emailError.textContent = "";
    }

    if (pass === "") {
        passError.textContent = "Password is required.";
        hasError = true;
    } else {
        passError.textContent = "";
    }

    if (hasError) {
        event.preventDefault();
    }
});
