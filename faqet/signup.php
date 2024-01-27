<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" href="../img/icon.png" type="image/icon">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/7be85ed243.js"></script>
</head>
<body class="signup-body">
    <section class="signup">
        <form action="" method="get" onsubmit="return valido()">
        <div class="signup-box">
            <div class="signup-box-inside">
                <h2>Sign Up</h2>
                <input id="name" type="text" class="field" placeholder="First Name" >
                <div class="error-message" id="nameError"></div>
                <input id="lname" type="text" class="field" placeholder="Last Name">
                <div class="error-message" id="lnameError"></div>
                <input id="phone" type="var" class="field" placeholder="Your Phone Number">
                <div class="error-message" id="phoneError"></div>
                <input id="email" type="email" class="field" placeholder="Your Email">
                <div class="error-message" id="emailError"></div>
                <input id="password" type="password" maxlength="15" class="field" placeholder="Password">
                <div class="error-message" id="passwordError"></div>
                <button class="signup-button">Sign Up</button>
                <a href="login.php">Log In.</a>
            </div>
        </div>
    </form>
    </section>
    <script src="../js/regex.js"></script>
</body>
</html>