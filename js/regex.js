let nameRegex = /^[A-Z][a-z]{3,8}$/;
let lnameRegex = /^[A-Z][a-z]{3,10}$/;
let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
let passwordRegex = /^[a-zA-Z0-9]+$/;
let phoneRegex = /^\d{6,15}$/;

function valido(){
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

    nameError.innerText = '';
    lnameError.innerText = '';
    emailError.innerText = '';
    passwordError.innerText = '';
    phoneError.innerText = '';
    

    if(!nameRegex.test(nameInput.value)){
        nameError.innerText = 'invalid name';
        return false;
    }
    if(!lnameRegex.test(lnameInput.value)){
        lnameError.innerText = 'invalid last name';
        return false;
    }
    if(!emailRegex.test(emailInput.value)){
        emailError.innerText = 'invalid email';
        return false;
    }
    if(!passwordRegex.test(passwordInput.value)){
        passwordError.innerText = 'invalid password';
        return false;
    }
    if(!phoneRegex.test(phoneInput.value)){
        phoneError.innerText = 'Invalid tel number';
        return false;
    }

    alert('form submitted succesfully!');
}
