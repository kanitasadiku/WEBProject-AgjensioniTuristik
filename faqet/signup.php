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
    <script>
        let nameRegex = /^[A-Z][a-z]{2,8}$/;
        let lnameRegex = /^[A-Z][a-z]{3,10}$/;
        let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
        let passwordRegex = /^[a-zA-Z0-9]+$/;
        let phoneRegex = /^\d{6,15}$/;
        function valido() {
    let nameInput = document.getElementById('name');
    let nameError = document.getElementById('nameError');
    let lnameInput = document.getElementById('lname');
    let lnameError = document.getElementById('lnameError');
    let emailInput = document.getElementById('email');
    let emailError = document.getElementById('emailError');
    let passwordInput = document.getElementById('password');
    let passwordError = document.getElementById('passwordError');
    let phoneInput = document.getElementById('phone');
    let phoneError = document.getElementById('phoneError');
    let formValid = true;

    nameError.innerText = '';
    lnameError.innerText = '';
    emailError.innerText = '';
    passwordError.innerText = '';
    phoneError.innerText = '';

    // Kontrollojmë nëse fushat janë të zbrazëta dhe vendosim mesazhin përkatës
    if (nameInput.value.trim() === '') {
        nameError.innerText = 'Name is required';
        formValid = false;
    }
    if (lnameInput.value.trim() === '') {
        lnameError.innerText = 'Last name is required';
        formValid = false;
    }
    if (emailInput.value.trim() === '') {
        emailError.innerText = 'Email is required';
        formValid = false;
    }
    if (passwordInput.value.trim() === '') {
        passwordError.innerText = 'Password is required';
        formValid = false;
    }
    if (phoneInput.value.trim() === '') {
        phoneError.innerText = 'Phone number is required';
        formValid = false;
    }

    // Kontrollojmë regex dhe vendosim mesazhin përkatës nëse nuk përputhen
    if (!nameRegex.test(nameInput.value.trim())) {
        nameError.innerText = 'Invalid name';
        formValid = false;
    }
    if (!lnameRegex.test(lnameInput.value.trim())) {
        lnameError.innerText = 'Invalid last name';
        formValid = false;
    }
    if (!emailRegex.test(emailInput.value.trim())) {
        emailError.innerText = 'Invalid email';
        formValid = false;
    }
    if (!passwordRegex.test(passwordInput.value.trim())) {
        passwordError.innerText = 'Invalid password';
        formValid = false;
    }
    if (!phoneRegex.test(phoneInput.value.trim())) {
        phoneError.innerText = 'Invalid phone number';
        formValid = false;
    }

    // Nëse forma është e vlefshme, tregoni një mesazh sukses
    if (formValid) {
        alert('Form submitted successfully!');
    }
    return formValid;
}
    </script>
    <?php include 'footer.php' ?>