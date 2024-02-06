<?php
 session_start();
 $errorMessage = isset($_SESSION['error_message']) ? $_SESSION['error_message']: '';
 unset($_SESSION['error_message']);
?>
<?php include 'header.php' ?>
<!-- <style>
    .error_message {
      color: red;
      text-align: center;
      margin-top: 83px;
      position: absolute;
      width: 100%;
    } -->
    </style>
<body>
 <div class="login-body">
            <section class="login">
                <div class="login-box">
                <div class="error_message"><?php echo $errorMessage; ?></div>
                     <form class="login" name="loginForm" onsubmit="return validateFormL()" method="POST" action="loginconnect.php">
                    <div class="login-box-inside">
                        <h2>Log In</h2>
                        <input id="email" type="email" class="field" placeholder="Your Email" name="email">
                        <div class="error-message" id="emailError"></div>
                        <input id="password" type="password"  class="field" placeholder="Password" name="password">
                        <div class="error-message" id="passwordError"></div>
                        <button class="login-button">Log In</button>
                        <a href="signup.php">Don't Have An Account? 
                            <br>
                            Sign Up.</a>


                    </div>
                </div>
                
            </section>
            </div>
            <script>
            let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
            let passwordRegex = /^[a-zA-Z0-9]+$/;

        function validateFormL() {
            let emailInput = document.getElementById('email');
            let emailError = document.getElementById('emailError');

            let passwordInput = document.getElementById('password');
            let passwordError = document.getElementById('passwordError');

            emailError.innerText = '';
            passwordError.innerText = '';

            if (!emailRegex.test(emailInput.value)) {
                emailError.innerText = 'Invalid email';
                return false;
            }
            if (!passwordRegex.test(passwordInput.value)) {
                passwordError.innerText = 'Invalid password';
                return false;
            }
            // alert('Login successful!');
            return true;
        }
        </script>
            
             <?php include 'footer.php' ?>

