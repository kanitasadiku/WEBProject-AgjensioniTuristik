<?php
include_once("../database/databaseConnection.php");

$dbConnection = new DatabaseConnection();

try {
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
    $stmt = $conn->prepare("INSERT INTO booking_d (place, guests, arrival, leaving)
        VALUES (:place, :guests, :arrival, :leaving)");

    // Bind vlerat
    $stmt->bindParam(':place', $place);
    $stmt->bindParam(':guests', $guests);
    $stmt->bindParam(':arrival', $arrival);
    $stmt->bindParam(':leaving', $leaving);

  // Ekzekuto query-në
  $stmt->execute();

  echo "Rezervimi u krye me sukses!";
} catch (PDOException $e) {
  // Kap gabimet PDO nëse ndodh ndonjë
  die("Gabim PDO: " . $e->getMessage());
} finally {
  // Mbyll lidhjen me bazën e dhënave në fund të kodit
  $conn = null;
}
?>
