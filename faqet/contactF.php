<?php
include("../database/databaseConnection.php");

class ContactF{
    private $db;

    function __construct() {
        $databaseConnection = new DatabaseConnection();
        $this->db = $databaseConnection->startConnection();
    }

    public function handleFormSubmission()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $message = $_POST["message"];

            $this->insertIntoDatabase($name, $email, $phone, $message);
        }
    }

    private function insertIntoDatabase($name, $email, $phone, $message)
    {
        try {
            $sql = "INSERT INTO contactf (name, email, phone, message, created_at) VALUES (:name, :email, :phone, :message, CURRENT_TIMESTAMP)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':message', $message);

            if ($stmt->execute()) {
                echo "<script>alert('Form submitted successfully!');</script>";
            } else {
                echo "<script>alert('Error submitting form. Please try again later.');</script>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $stmt->closeCursor();
    }

    public function getAllContacts()
    {
        try {
            $sql = "SELECT * FROM contactf";
            $stmt = $this->db->query($sql);

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($result) {
                return $result;
            } else {
                return array();
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return array();
        }
    }

    public function deleteContact($contactId)
    {
        try {
            $sql = "DELETE FROM contactf WHERE id = :contactId";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':contactId', $contactId);

            if ($stmt->execute()) {
                header("Location: dashboard.php");
            } else {
                echo "Error deleting contact. Please try again later.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $stmt->closeCursor();
    }
}
?>
