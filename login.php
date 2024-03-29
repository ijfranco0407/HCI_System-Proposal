<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img src="smcclogo.png" alt="smcclogo" height="105"></a>
    </nav>
<br>
    <div class="container">
        <h2 style="text-align: center;">Welcome</h2>
        <label for="">User Name:</label>
        <input type="text" name="email" id="email" placeholder="Enter your User Name">
        <label for="">Password:</label>
        <input type="text" name="secondPass" id="secondPass" placeholder="Enter your password">
        <br>
        <p style="text-align: center;">Don't have an Account?</p>
        <a style="text-align: center;" href="register.html">Register Now</a>
        <br>
        <button class="loginbutton" onclick="login()">Log-in</button>
        <br>
    </div>

    <script src="main.js"></script>
</body>
</html>