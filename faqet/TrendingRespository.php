<?php 
include_once '../database/databaseConnection.php';

class TrendingRepository {
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertTrending($trending){
        $conn = $this->connection;

        $location = $trending->getLocation();
        $image = $trending->getImage();

        $sql = "INSERT INTO trending (location, image) VALUES (?, ?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$location, $image]);

        echo "<script>alert('Trending destination has been inserted successfully!');</script>";
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

    function updateTrending($id, $location, $image){
         $conn = $this->connection;

         $sql = "UPDATE trending SET location=?, image=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$location, $image, $id]);

         echo "<script>alert('Update was successful');</script>";
    } 

    function deleteTrending($id){
        $conn = $this->connection;

        $sql = "DELETE FROM trending WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('Delete was successful');</script>";
   } 
}

?>
