<?php 
include_once '../database/databaseConnection.php';

class HotelRepository {
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertHotel($hotel){
        $conn = $this->connection;

        $emri = $hotel->getEmri();
        $pershkrimi = $hotel->getPershkrimi();
        $oferta1 = $hotel->getOferta1();
        $oferta2 = $hotel->getOferta2();
        $oferta3 = $hotel->getOferta3();
        $imazhi = $hotel->getImazhi();

        $sql = "INSERT INTO hotelet (emri, pershkrimi, oferta1, oferta2, oferta3, imazhi) VALUES (?, ?, ?, ?, ?, ?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$emri, $pershkrimi, $oferta1, $oferta2, $oferta3, $imazhi]);

        echo "<script>alert('Hotel has been inserted successfully!');</script>";
    }

    function getAllHotels(){
        $conn = $this->connection;

        $sql = "SELECT * FROM hotelet";

        $statement = $conn->query($sql);
        $hotels = $statement->fetchAll();

        return $hotels;
    }

    function getHotelById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM hotelet WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $hotel = $statement->fetch();

        return $hotel;
    }

    function updateHotel($id, $emri, $pershkrimi, $oferta1, $oferta2, $oferta3, $imazhi){
         $conn = $this->connection;

         $sql = "UPDATE hotelet SET emri=?, pershkrimi=?, oferta1=?, oferta2=?, oferta3=?, imazhi=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$emri, $pershkrimi, $oferta1, $oferta2, $oferta3, $imazhi, $id]);

         echo "<script>alert('Update was successful');</script>";
    } 

    function deleteHotel($id){
        $conn = $this->connection;

        $sql = "DELETE FROM hotelet WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('Delete was successful');</script>";
   } 
}

?>
