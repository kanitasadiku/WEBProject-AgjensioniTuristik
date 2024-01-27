<?php include 'header.php' ?>
         <section class="book" id="book">
            <h1 class="heading ">
               <span>B</span>
               <span>o</span>
               <span>o</span>
               <span>k</span>
               <span class="space"></span>
               <span>N</span>
               <span>o</span>
               <span>w</span>

            </h1>
            <div class="row">
               <div class="image">
                   <img src="../img/tickets-icon.png" alt="photo">
            </div>
            <form action="box"> 
               <div class="inputBox">
                   <h3>Where to:</h3>
                   <input type="text" placeholder="Place name">
            </div>
            <div class="inputBox">
               <h3>How many:</h3>
               <input type="number" placeholder="Number of guests" min="1" required>
        </div>
        <div class="inputBox">
           <h3>Arrivals:</h3>
           <input type="date" >
       </div>
       <div class="inputBox">
           <h3>Leaving:</h3>
           <input type="date" >
       </div>
       <input type="submit" class="button" value="Book Now">
            </form>
            </div>
          
          </section>
   
          <?php include 'footer.php' ?>