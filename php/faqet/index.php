<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agjension turistik</title>
    <link rel="icon" href="../img/logo.jpg" type="image/icon">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/7be85ed243.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="logo"><a href="index.php"><img src="../img/logo.jpg" alt=""></a></div>
        <ul class="nav-links">
            <li><a href="about-us.html"> About us </a></li>
            <li><a href="trending.html"> Trending </a></li>
            <li><a href="offers.html"> Offers </a></li>
            <li><a href="booking.html"> Booking </a></li>
            <li><a href="review.html"> Review </a></li>
            <li><a href="contact_us.html"> Contact us </a></li>
            <li><a href="login.html"> <i class="fa-solid fa-user"></i> </a></li>
        </ul>
     </nav>

     <main class="background-slider">
        <div class="background1 slider">
            <div class="background-text">
                <h1>Udhëtoni me ne!</h1>
                <p>Kur udhëtoni me ne ju do të përjetoni komoditet që nuk e keni përjetuar asnjëherë më parë!</p>
                <P>Komoditeti e rehatia juaj është suksesi jonë!</P>
                <h2>Zgjidh më të mirin!</h2>
                <button>Rezervo tani!</button>
            </div>
        </div>
        <div class="background2 slider">
            <div class="background-text background-text2">
                <h1>Ofroni vetes siguri dhe momente të paharruara me ne!</h1>
                <p>Nganjëherë, udhëtimi më i bukur është rruga e padefinuar,
                     ku cdo hap i panjohur sjell një emocion të re, dhe cdo peizazh i papritur reflekton bukurinë e një aventure të sigurtë dhe të paeksploruar</p>

                <h2>Siguria ka një emër: SPEEX!</h2>
                <button>Rezervo tani!</button>
            </div>
        </div>
    </main>
    <div class="arrows">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <div class="dots" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
      </div>

      <section class="main-foto-text">
        <img src="../img/2.jpg" alt="">
        <div class="main-foto-text-text">
            <h3>A po mendon të bësh një pushim?</h3>
            <h1>Bashkohuni me ne. Shijojeni pushimin tuaj!</h1>
            <p>Çdo minutë që shpenzoni është i vlefshëm, shpenzoni atë në mënyrën më të mirë!</p>
            <button>Shiko ofertat tona!</button>
        </div>
    </section>

    
    <div class="research">
        <img src="../img/team1.jpg" alt="">
    
        <div class="research-text">
            <h1>Ekipi që qëndron pas kërkesave tuaja</h1>
            <p>Ekipi ynë është i motivuar nga kurioziteti për të ju ndihmuar në çdo aspekt të mundshëm që të ju ofrohet më e mira nga ne.</p>
            <a href="#">Kontaktoni ekipin tonë &#10095;</a>
        </div>
    </div>
    
    <footer class="footer">
        <div class="first">
        <h1>Rrjetet Sociale</h1>
        <div class="social-media">
        <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.twitter.com"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
        </div>
        </div>
       <div class="second">
        <h1>Na gjeni këtu</h1>
        <p>Rruga Lagjia e re, Nr.22, Ferizaj,70000</p>
        <p>Numri kontaktues: 044-123-321</p>
           
       </div>
    </footer>
    <div class="copyright">
        <p>© 2023 All Rights Reserved.</p>
    </div>


      <!--JS-->
<script src="../js/script.js"></script>

 </body>
</html>