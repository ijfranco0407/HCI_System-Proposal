function register() {
    var firstName = document.getElementById('fName').value;
    var lastName = document.getElementById('lName').value;
    var email = document.getElementById('email').value;
    var birthday = document.getElementById('birthday').value;
    var gender = document.querySelector('input[name="gender"]:checked').value;
    var userName = document.getElementById('userName').value;
    var password = document.getElementById('firstPass').value;
    var confirmPassword = document.getElementById('secondPass').value;

    if (!firstName || !lastName || !email || !birthday || !gender || !userName || !password || !confirmPassword) {
        alert("Please fill in all fields.");
        return;
    }

    if (password.length < 8) {
        alert("Password should be at least 8 characters long.");
        return;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return;
    }
    
    console.log("Registration Details:");
    console.log("First Name: " + firstName);
    console.log("Last Name: " + lastName);
    console.log("Email: " + email);
    console.log("Birthday: " + birthday);
    console.log("Gender: " + gender);
    console.log("User Name: " + userName);
    console.log("Password: " + password);

    window.location.href = "login.html";
}

function login() {
    var userName = document.getElementById('email').value;
    var password = document.getElementById('secondPass').value;

    if (!userName || !password) {
        alert("Please enter both username and password.");
        return;
    }

    var validUserName = "exampleUser";
    var validPassword = "examplePassword";

    if (userName !== validUserName || password !== validPassword) {
        alert("Invalid username or password.");
        return;
    }

    window.location.href = "dashboard.html";
}
