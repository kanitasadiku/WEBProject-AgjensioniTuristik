<?php include 'header.php' ?>

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
            <a href="trending.php"><button>Shiko ofertat tona!</button> </a>
        </div>
    </section>

    
    <div class="research">
        <img src="../img/team1.jpg" alt="">
    
        <div class="research-text">
            <h1>Ekipi që qëndron pas kërkesave tuaja</h1>
            <p>Ekipi ynë është i motivuar nga kurioziteti për të ju ndihmuar në çdo aspekt të mundshëm që të ju ofrohet më e mira nga ne.</p>
            <a href="contact_us.php">Kontaktoni ekipin tonë &#10095;</a>
        </div>
    </div>
    
    <?php include 'footer.php' ?>