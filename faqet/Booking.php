<?php
include_once ("../database/databaseConnection.php");
?>
<?php include 'header.php'; ?>
<section class="book" id="book">
        <h1 class="heading">
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
            <form id="bookingForm" action="booking_d.php" method="POST">

                <div class="inputBox">
                    <h3>Where to:</h3>
                    <input type="text" name="place" id="place" placeholder="Place name" required>
                </div>
                <div class="inputBox">
                    <h3>How many:</h3>
                    <input type="number" name="guests" id="guests" placeholder="Number of guests" min="1" required>
                </div>
                <div class="inputBox">
                    <h3>Arrivals:</h3>
                    <input type="date" name="arrival" id="arrival" required>
                </div>
                <div class="inputBox">
                    <h3>Leaving:</h3>
                    <input type="date" name="leaving" id="leaving" required>
                </div>
                <input type="submit" class="button" value="Book Now">
            </form>
        </div>
        
    </section>

    <!-- // Kontrollo nëse URL përmban mesazhin e suksesit dhe shfaq atë nëse ka
    // if (isset($_GET['success_message'])) {
    //     $success_message = htmlspecialchars($_GET['success_message']);
    //     echo "<p>$success_message</p>";
    // 
    //  -->
    <?php
    // Kontrollo nëse URL përmban mesazhin e suksesit dhe shfaq atë nëse ka
    if (isset($_GET['success_message'])) {
        $success_message = htmlspecialchars($_GET['success_message']);
        // Display the success message using JavaScript alert
        echo "<script>alert('$success_message');</script>";
    }
?>

<?php include 'footer.php'; ?>

   
        