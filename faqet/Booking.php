<?php 
    include_once("../database/databaseConnection.php");

    // Nëse është dërguar forma
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            // Krijo një instancë të klases për lidhjen me bazën e të dhënave
            $dbConnection = new DatabaseConnection();

            // Merr lidhjen me bazën e të dhënave
            $conn = $dbConnection->startConnection();

            // Kontrollo lidhjen
            if ($conn === null) {
                die("Lidhja me bazën e të dhënave dështoi.");
            }

            // Merr vlerat e dërguara nga forma
            $place = isset($_POST["place"]) ? $_POST["place"] : "";
            $guests = isset($_POST["guests"]) ? $_POST["guests"] : "";
            $arrival = isset($_POST["arrival"]) ? $_POST["arrival"] : "";
            $leaving = isset($_POST["leaving"]) ? $_POST["leaving"] : "";

            // Përgatiti dhe ekzekuton query-në SQL duke përdorur prepared statement
            $stmt = $conn->prepare("INSERT INTO booking (place, guests, arrival, leaving)
                VALUES (:place, :guests, :arrival, :leaving)");

            // Bind vlerat
            $stmt->bindParam(':place', $place);
            $stmt->bindParam(':guests', $guests);
            $stmt->bindParam(':arrival', $arrival);
            $stmt->bindParam(':leaving', $leaving);

            // Ekzekuto query-në
            $stmt->execute();

            $success_message = "Rezervimi u krye me sukses!";
        } catch (PDOException $e) {
            // Kap gabimet PDO nëse ndodh ndonjë
            die("Gabim PDO: " . $e->getMessage());
        } finally {
            // Mbyll lidhjen me bazën e dhënave në fund të kodit
            $conn = null;
        }
    }
?>
<?php include 'header.php'; ?>
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
        <form action="booking.php" method="post">
            <div class="inputBox">
                <h3>Where to:</h3>
                <input type="text" name="place" placeholder="Place name">
            </div>
            <div class="inputBox">
                <h3>How many:</h3>
                <input type="number" name="guests" placeholder="Number of guests" min="1" required>
            </div>
            <div class="inputBox">
                <h3>Arrivals:</h3>
                <input type="date" name="arrival">
            </div>
            <div class="inputBox">
                <h3>Leaving:</h3>
                <input type="date" name="leaving">
            </div>
            <input type="submit" class="button" value="Book Now">
            <?php if (isset($success_message)) { echo "<p>$success_message</p>"; } ?>
        </form>
    </div>
</section>
<?php include 'footer.php'; ?>
