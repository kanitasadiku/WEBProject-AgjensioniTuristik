<?php 
include_once '../database/databaseConnection.php';

class UserRepository {
    private $connection;

    function __construct(){
        $dbConnection = new DatabaseConnection;
        $this->connection = $dbConnection->startConnection();
    }

    function insertHotel($hotel){
        $conn = $this->connection;

        $emri = $hotel->getEmri();
        $pershkrimi = $hotel->getPershkrimi();
        $cmimi = $hotel->getCmimi();
        $imazhi = $hotel->getImazhi();

        $sql = "INSERT INTO hotelet (emri, pershkrimi, cmimi, imazhi) VALUES (?, ?, ?, ?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$emri, $pershkrimi, $cmimi, $imazhi]);

        echo "<script>alert('Hotel has been inserted successfully!');</script>";
    }

    function getAllHotels(){
        $conn = $this->connection;

        $sql = "SELECT * FROM hotelet";

        $statement = $conn->query($sql);
        $hotels = $statement->fetchAll();

        return $hotels;
    }

    function getHotelById($hotel_id){
        $conn = $this->connection;

        $sql = "SELECT * FROM hotelet WHERE hotel_id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$hotel_id]);
        $hotel = $statement->fetch();

        return $hotel;
    }

    function updateHotel($hotel_id, $emri, $pershkrimi, $cmimi, $imazhi){
        $conn = $this->connection;

        $sql = "UPDATE hotelet SET emri=?, pershkrimi=?, cmimi=?, imazhi=? WHERE hotel_id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$emri, $pershkrimi, $cmimi, $imazhi, $hotel_id]);

        echo "<script>alert('Update was successful!');</script>";
    } 

    function deleteHotel($hotel_id){
        $conn = $this->connection;

        $sql = "DELETE FROM hotelet WHERE hotel_id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$hotel_id]);

        echo "<script>alert('Delete was successful!');</script>";
    } 
}
?>
