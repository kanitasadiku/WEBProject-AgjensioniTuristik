<?php 
//include_once '../database/databaseConnection.php';
include_once ("packages.php");
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
        try{
        $sql = "INSERT INTO hotelet (emri, pershkrimi, oferta1, oferta2, oferta3, imazhi,addedbyuser) VALUES (?, ?, ?, ?, ?, ?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$emri, $pershkrimi, $oferta1, $oferta2, $oferta3, $imazhi]);

        echo "<script>alert('Hotel has been inserted successfully!');</script>";
    }catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
   
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
    function getHotelsByUserIds($userId) {
        $conn = $this->connection;

        $sql = "SELECT * FROM hotels WHERE addedbyuser = :userId";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) > 0) {
            return $result;
        } else {
            return array();
        }
     
    }

    public function addPackage($emri, $userId, $pershkrimi, $oferta1, $oferta2, $oferta3, $imazhi, $addedbyuser){
        $sql = "INSERT INTO hotels (emri, addedbyuser, pershkrimi, oferta1, oferta2, oferta3, imazhi) VALUES ( ?, ?, ?, ?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $emri, PDO::PARAM_STR);
        $statement->bindParam(2, $userId, PDO::PARAM_INT);
        $statement->bindParam(3, $pershkrimi, PDO::PARAM_STR);
        $statement->bindParam(4, $oferta1, PDO::PARAM_STR);
        $statement->bindParam(5, $oferta2, PDO::PARAM_STR);
        $statement->bindParam(6, $oferta3, PDO::PARAM_STR);
        $statement->bindParam(7,  $imazhi, PDO::PARAM_STR);

        

        if ($statement->execute()) {
            return $this->connection->lastInsertId();
        } else {
            return false;
        }
    }
    function updateHotel($id, $emri, $pershkrimi, $oferta1, $oferta2, $oferta3, $imazhi){
         $conn = $this->connection;

         $sql = "UPDATE hotelet SET emri=?, pershkrimi=?, oferta1=?, oferta2=?, oferta3=?, imazhi=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$emri, $pershkrimi, $oferta1, $oferta2, $oferta3, $imazhi, $id]);

         echo "<script>alert('Update was successful');</script>";
    } 

    function deleteHotel($hotelid){
        // $conn = $this->connection;

        // $sql = "DELETE FROM hotelet WHERE id=?";

        // $statement = $conn->prepare($sql);

        // $statement->execute([$id]);

        // echo "<script>alert('Delete was successful');</script>";
        
        $sql = "DELETE FROM hotels WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id, PDO::PARAM_INT);
    
        if ($statement->execute()) {
            header("Location: Dashboard.php");
            exit();
        } else {
            echo "Error deleting package: " . $statement->errorInfo()[2];
        }
    } 
}

?>
