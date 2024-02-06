<?php include("contactF.php");

    $contactF = new ContactF();

    $contactF->handleFormSubmission();

   include 'header.php' ?>

         <section id="contact" class="contact">
            <div class="contact-box">
                <div class="foto"></div>
                <div class="box">
                    <h2>Na kontaktoni këtu</h2>
                    <form method="POST" action="" onsubmit="return validateForm()">
                    <input type="text" id="name" name="name" class="contact-field" placeholder="Your Name">
                    <span id="nameError" class="error"></span>
                    <br>
                    <input type="text" id="email" name="email" class="contact-field" placeholder="Your Email">
                    <span id="emailError" class="error"></span>
                    <br>
                    <input type="text" id="phone" name="phone" class="contact-field" placeholder="Phone">
                    <span id="phoneError" class="error"></span>
                    <br>
                    <textarea id="message" name="message" placeholder="Message" class="contact-field"></textarea>
                    <span id="messageError" class="error"></span>
                    <br>
                    <button type="submit" class="btn">Dërgo</button>
                   </form>


                </div>
            </div>
        </section>
        <div class="map">
        <h1>Na gjeni këtu</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.265603977882!2d21.15234305!3d42.37948804999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13547e4f5db48a41%3A0x40b834f14c011152!2sLagjja%20e%20Re%2C%20Ferizaj!5e0!3m2!1sen!2s!4v1702233649184!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <script>
       
    let nameRegex = /^[A-Z][a-z]{3,8}$/;
    let emailRegex = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let phoneRegex = /^\+(?:[0-9] ?){6,14}[0-9]$/
    let messageRegex = /^[a-zA-Z ]{5,}$/;

    function validateForm() {
    let nameInput = document.getElementById('name');
    let nameError = document.getElementById('nameError');

    let emailInput = document.getElementById('email');
    let emailError = document.getElementById('emailError');

    let phoneInput = document.getElementById('phone');
    let phoneError = document.getElementById('phoneError');

    let messageInput = document.getElementById('message');
    let messageError = document.getElementById('messageError');

    nameError.innerText = '';
    emailError.innerText = '';
    phoneError.innerText = '';
    messageError.innerText = '';

    if (!nameRegex.test(nameInput.value)) {
        nameError.innerText = 'Invalid name';
        return false;
    }
    if (!emailRegex.test(emailInput.value)) {
        emailError.innerText = 'Invalid email';
        return false;
    }
    if (!phoneRegex.test(phoneInput.value)) {
        phoneError.innerText = 'Invalid phone';
        return false;
    }
    if (!messageRegex.test(messageInput.value)) {
        messageError.innerText = 'Invalid message';
        return false;
    }
    alert('Form submitted successfully!');
    return true;
}

    </script>
        
        <?php include 'footer.php' ?>
       