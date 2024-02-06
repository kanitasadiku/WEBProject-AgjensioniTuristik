<?php 
include_once '../database/databaseConnection.php';

class TrendingRespository {
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertTrending($trending){
        try{
        $conn = $this->connection;

        $location = $trending->getLocation();
        $image = $trending->getImage();

        $sql = "INSERT INTO trending (location, image, addedbyuser, dateofaddition) VALUES (?, ?, ?, ?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$location, $image]);

        echo "<script>alert('Trending destination has been inserted successfully!');</script>";
    }catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} 

    function getAllTrending(){
        $conn = $this->connection;

        $sql = "SELECT * FROM trending";

        $statement = $conn->query($sql);
        $trendings = $statement->fetchAll();

        return $trendings;
    }

    function getTrendingById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM trending WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $trending = $statement->fetch();

        return $trending;
    }
   
    public function getTrendingByUserIds($userId) {
        $sql = "SELECT * FROM trending WHERE addedbyuser = :userId";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
        $statement->execute();
    
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        if (!empty($result)) {
            return $result;
        } else {
            return array();
        }
    }
    
    function addTrending($image, $userId, $location){
        $sql = "INSERT INTO trending (image, addedbyuser, location ) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $image, PDO::PARAM_STR);
        $statement->bindParam(2, $userId, PDO::PARAM_INT);
        $statement->bindParam(3, $location, PDO::PARAM_STR);


        if ($statement->execute()) {
            return $this->connection->lastInsertId();
        } else {
            return false;
        }
    }
    function updateTrending($id, $image, $location){
        $sql = "UPDATE trending SET image = ?, location=? WHERE id=?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $image, PDO::PARAM_STR);
        $statement->bindParam(2, $location, PDO::PARAM_STR);

        return $statement->execute();
    }

    

    function deleteTrending($trendingid){
        $sql = "DELETE FROM trending WHERE id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $id, PDO::PARAM_INT);

    if ($statement->execute()) {
        header("Location: Dashboard.php");
        exit();
    } else {
        echo "Error deleting product: " . $statement->errorInfo()[2];
    }
}
}
?>
