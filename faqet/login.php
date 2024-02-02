<?php include 'header.php' ?>
<body>
 <div class="login-body">
            <section class="login">
                <div class="login-box">
                     <form class="login" name="loginForm" onsubmit="return valido()" method="POST" action="loginconnect.php">
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
             <?php include 'footer.php' ?>

