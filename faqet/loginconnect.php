<?php
require_once '../database/databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);
        try {
            $dbConnection = new DatabaseConnection();
            $conn = $dbConnection->startConnection();

            if (!$conn) {
                die("Connection failed: " . $conn->error);
            }

            // Use 'email' instead of 'username' in your SQL query
            $sql = "SELECT * FROM users WHERE email = :email";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                $hashedPassword = $user['password'];

                if (password_verify($password, $hashedPassword)) {
                    header("Location: ../faqet/index.php");
                    exit();
                } else {
                    echo "<script>alert('Invalid email or password!');</script>";
                    echo "<script>setTimeout(function(){ window.location.href = 'login.php'; }, 1000);</script>";
                }
            } else {
                echo "<script>alert('Invalid email or password!');</script>";
                echo "<script>setTimeout(function(){ window.location.href = 'login.php'; }, 1000);</script>";
            }
        } catch (PDOException $e) {
            echo "Database Error: " . $e->getMessage();
        }
    } else {
        // Handle case where email or password is not set
        echo "Email or password is not set.";
    }



function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
