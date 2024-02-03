<?php include("contactF.php");

    $contactF = new ContactF();

    $contactF->handleFormSubmission();

   include 'header.php' ?>

         <section id="contact" class="contact">
            <div class="contact-box">
                <div class="foto"></div>
                <div class="box">
                    <h2>Na kontaktoni këtu</h2>
                    <form method="POST" action="">
                    <input type="text" name="name" class="contact-field" placeholder="Your Name">
                    <input type="text" name="email" class="contact-field" placeholder="Your Email">
                    <input type="text" name="phone" class="contact-field" placeholder="Phone">
                    <textarea name="message" placeholder="Message" class="contact-field"></textarea>
                    <button type="submit" class="btn">Dërgo</button>
                </form>

                </div>
            </div>
        </section>
        <div class="map">
        <h1>Na gjeni këtu</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.265603977882!2d21.15234305!3d42.37948804999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13547e4f5db48a41%3A0x40b834f14c011152!2sLagjja%20e%20Re%2C%20Ferizaj!5e0!3m2!1sen!2s!4v1702233649184!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <?php include 'footer.php' ?>