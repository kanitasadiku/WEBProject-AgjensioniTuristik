<?php include 'header.php' ?>
<body class="signup-body">
    <section class="signup">
      <form class="signup" name="signupForm" onsubmit="return valido()" method="POST" action="registerpc.php">
        <div class="signup-box">
            <div class="signup-box-inside">
                <h2>Sign Up</h2>
                <input id="name" type="text" class="field" placeholder="First Name" name="name">
                <div class="error-message" id="nameError"></div>
                <input id="lname" type="text" class="field" placeholder="Last Name" name="lname">
                <div class="error-message" id="lnameError"></div>
                <input id="phone" type="var" class="field" placeholder="Your Phone Number" name="phone">
                <div class="error-message" id="phoneError"></div>
                <input id="email" type="email" class="field" placeholder="Your Email" name="email">
                <div class="error-message" id="emailError"></div>
                <input id="password" type="password" maxlength="15" class="field" placeholder="Password" name="password">
                <div class="error-message" id="passwordError"></div>
                <button class="signup-button">Sign Up</button>
                <a href="login.php">Log In.</a> 
            </div>
        </div>
    </form>
    </section>
    <?php include 'footer.php' ?>