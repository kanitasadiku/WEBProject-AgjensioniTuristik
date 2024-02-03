<?php
session_start(); 

require_once '../database/databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);

    try {
        $dbConnection = new DatabaseConnection();
        $conn = $dbConnection->startConnection();

        if ($conn) {
            $sql = "SELECT * FROM users WHERE email = :email";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $userData = $stmt->fetch(PDO::FETCH_ASSOC);
                // Verify hashed password
                if (password_verify($password, $userData['password'])) {
                    // Fillimi i sesionit dhe vendosja e të dhënave të përdoruesit në sesion
                    $_SESSION['user_id'] = $userData['id'];
                    $_SESSION['user_email'] = $userData['email'];
                    $_SESSION['user_authenticated'] = true;
                    $_SESSION['user_role'] = $userData['role'];
                    
                    // Përcakto destinacionin bazuar në rolin e përdoruesit
                    $redirect_location = ($userData['role'] == 'admin') ? "dashboard.php" : "index.php";
                    header("Location: $redirect_location");
                    exit();
                } else {
                    $_SESSION['error_message'] = "Invalid password!";
                    header("Location: login.php");
                    exit();
                }
            } else {
                $_SESSION['error_message'] = "Invalid email!";
                header("Location: login.php");
                exit();
            }
        } else {
            $_SESSION['error_message'] = "Database connection error!";
            header("Location: login.php");
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['error_message'] = "Database Error: " . $e->getMessage();
        header("Location: login.php");
        exit();
    }
} else {
    // Handle case where email or password is not set
    $_SESSION['error_message'] = "Email or password is not set!";
    header("Location: login.php");
    exit();
}

// Sanitize user input function
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
