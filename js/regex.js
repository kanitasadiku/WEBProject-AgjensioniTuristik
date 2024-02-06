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
 
// --------------------
// let nameRegex = /^[A-Z][a-z]{3,8}$/;
// let lnameRegex = /^[A-Z][a-z]{3,10}$/;
// let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
// let passwordRegex = /^[a-zA-Z0-9]+$/;
// let phoneRegex = /^\d{6,15}$/;

// function valido(){
//     let nameInput = document.getElementById('name');
//     let nameError = document.getElementById('nameError');
//     let lnameInput = document.getElementById('lname');
//     let lnameError = document.getElementById('lnameError');
//     let emailInput = document.getElementById('email');
//     let emailError = document.getElementById('emailError');
//     let passwordInput = document.getElementById('password');
//     let passwordError = document.getElementById('passwordError');
//     let phoneInput = document.getElementById('phone');
//     let phoneError = document.getElementById('phoneError');

//     nameError.innerText = '';
//     lnameError.innerText = '';
//     emailError.innerText = '';
//     passwordError.innerText = '';
//     phoneError.innerText = '';
    

//     if(!nameRegex.test(nameInput.value)){
//         nameError.innerText = 'invalid name';
//         return false;
//     }
//     if(!lnameRegex.test(lnameInput.value)){
//         lnameError.innerText = 'invalid last name';
//         return false;
//     }
//     if(!emailRegex.test(emailInput.value)){
//         emailError.innerText = 'invalid email';
//         return false;
//     }
//     if(!passwordRegex.test(passwordInput.value)){
//         passwordError.innerText = 'invalid password';
//         return false;
//     }
//     if(!phoneRegex.test(phoneInput.value)){
//         phoneError.innerText = 'Invalid tel number';
//         return false;
//     }

//     alert('form submitted succesfully!');
// }

// let nameRegex = /^[A-Z][a-z]{3,8}$/;
// let lnameRegex = /^[A-Z][a-z]{3,10}$/;
// let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
// let passwordRegex = /^[A-Z][a-aZ-A0-9!@#$%^&*()_+[\]{}|;:',.<>?]{7,}$/;
// let phoneRegex = /^\d{6,15}$/;

// function valido(){
//     let nameInput = document.getElementById('name');
//     let nameError = document.getElementById('nameError');
//     let lnameInput = document.getElementById('lname');
//     let lnameError = document.getElementById('lnameError');
//     let emailInput = document.getElementById('email');
//     let emailError = document.getElementById('emailError');
//     let passwordInput = document.getElementById('password');
//     let passwordError = document.getElementById('passwordError');
//     let phoneInput = document.getElementById('phone');
//     let phoneError = document.getElementById('phoneError');

//     nameError.innerText = '';
//     lnameError.innerText = '';
//     emailError.innerText = '';
//     passwordError.innerText = '';
//     phoneError.innerText = '';

//     if (nameInput.value.trim() === '') {
//         nameError.innerText = 'Name is empty';
//         return false;
//     }
//     if (lnameInput.value.trim() === '') {
//         lnameError.innerText = 'Last name is empty';
//         return false;
//     }
//     if (emailInput.value.trim() === '') {
//         emailError.innerText = 'Email is empty';
//         return false;
//     }
//     if (passwordInput.value.trim() === '') {
//         passwordError.innerText = 'Password is empty';
//         return false;
//     }
//     if (phoneInput.value.trim() === '') {
//         phoneError.innerText = 'Phone number is empty';
//         return false;
//     }

//     if (!nameRegex.test(nameInput.value)) {
//         nameError.innerText = 'Invalid name';
//         return false;
//     }
//     if (!lnameRegex.test(lnameInput.value)) {
//         lnameError.innerText = 'Invalid last name';
//         return false;
//     }
//     if (!emailRegex.test(emailInput.value)) {
//         emailError.innerText = 'Invalid email';
//         return false;
//     }
//     if (!passwordRegex.test(passwordInput.value)) {
//         passwordError.innerText = 'Invalid password';
//         return false;
//     }
//     if (!phoneRegex.test(phoneInput.value)) {
//         phoneError.innerText = 'Invalid tel number';
//         return false;
//     }

//     alert('Form submitted succesfully!');
// }