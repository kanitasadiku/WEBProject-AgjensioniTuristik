<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="icon" href="../img/icon.png" type="image/icon">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/7be85ed243.js"></script>
<body>
 <div class="login-body">
            <section class="login">
                <div class="login-box">
                    <form action="" method="get" onsubmit="return valido()">
                    <div class="login-box-inside">
                        <h2>Log In</h2>
                        <input type="email" class="field" id="email" placeholder="Your email">
                        <div class="error-message" id="emailError"></div>

                        <input type="password" class="field" id="password" placeholder="Your Password">
                        <div class="error-message" id="passwordError"></div>

                        <button class="login-button">Log In</button>
                    
                        <a href="signup.html">Don't Have An Account? Sign Up.</a>
                       <p>  <a href="index.html">Back on main page!</a>
                       </p>

                    </div>
                </div>
                
            </section>
            </div>
    <script src="../js/regex.js"></script>
</body>
</html>
