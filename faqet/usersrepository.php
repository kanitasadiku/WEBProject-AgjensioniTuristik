<?php
class UsersRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    // public function getUserByEmail($email) {
    //     $sql = "SELECT * FROM users WHERE email = ?";
    //     $statement = $this->connection->prepare($sql);
    //     $statement->execute([$email]);
    //     return $statement->fetch(PDO::FETCH_ASSOC);
    // }

    public function insertUser($name, $lname, $phone, $email, $password, $role) {
        $conn = $this->connection;

        $checkQuery = "SELECT * FROM users WHERE email = :email OR phone = :phone";
        $checkStatement = $conn->prepare($checkQuery);
        $checkStatement->bindParam(':email', $email);
        $checkStatement->bindParam(':phone', $phone);
        $checkStatement->execute();

        if ($checkStatement->rowCount() > 0) {
            echo "<script>alert('Email or phone already exists!');</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'signup.php'; }, 2000);</script>";
            exit();
        } else {
            $insertQuery = "INSERT INTO users (name, lname, phone, email, password, role) VALUES (:name, :lname, :phone, :email,  :password, :role)";
            $insertStatement = $conn->prepare($insertQuery);
            $insertStatement->bindParam(':name', $name);
            $insertStatement->bindParam(':lname', $lname);
            $insertStatement->bindParam(':phone', $phone);
            $insertStatement->bindParam(':email', $email);
            $insertStatement->bindParam(':password', $password);
            $insertStatement->bindParam(':role', $role);

            if ($insertStatement->execute()) {
                echo "<script>alert('User has been registered successfully!');</script>";
                echo "<script>setTimeout(function(){ window.location.href = 'login.php'; }, 2000);</script>";
            } else {
                echo "<script>alert('Error!');</script>";
                echo "<script>setTimeout(function(){ window.location.href = 'signup.php'; }, 2000);</script>";
                exit();
            }
        }
    }

    function getAllUsers(){
        $conn = $this->connection;
        $sql = "SELECT * FROM users";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();
        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;
        $sql = "SELECT * FROM users WHERE id='$id'";
        $statement = $conn->query($sql);
        $user = $statement->fetch();
        return $user;
    }
    public function logout(){
        $_SESSION = array();
        session_destroy();
    }
    // function updateUser($id, $name, $lname, $email, $phone, $password){
    //      $conn = $this->connection;
    //      $sql = "UPDATE users SET name=?, lname=?, email=?, phone=?, password=? WHERE id=?";
    //      $statement = $conn->prepare($sql);
    //      $statement->execute([$name, $lname, $phone,  $password, $id]);
    //      echo "<script>alert('Update was successful');</script>";
    // } 
    public function updateUser($userid, $name, $lname, $email, $phone, $password = null){
        $conn = $this->connection;

        
        $sql = "UPDATE users SET email = :email WHERE id = :userId";
        $statement = $conn->prepare($sql);
        $statement->bindParam(':email', $username, PDO::PARAM_STR);
        $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
        $result = $statement->execute();

        
        if($password !== null){
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sqlPassword = "UPDATE users SET password = :hashedPassword WHERE id = :userId";
            $statementPassword = $conn->prepare($sqlPassword);
            $statementPassword->bindParam(':hashedPassword', $hashedPassword, PDO::PARAM_STR);
            $statementPassword->bindParam(':userId', $userId, PDO::PARAM_INT);
            $resultPassword = $statementPassword->execute();
        }
        else{
            $resultPassword = true;
        }

    return $result && (!$password || $resultPassword);
    }
    // public function updateUser($id, $name, $lname, $email, $phone, $password): bool {
    //     $conn = $this->connection;
    //     $sql = "UPDATE users SET name=?, lname=?, email=?, phone=?, password=? WHERE id=?";
    //     $statement = $conn->prepare($sql);
    //     $success = $statement->execute([$name, $lname, $email, $phone, $password, $id]);
    //     if ($success) {
    //         echo "<script>alert('Update was successful');</script>";
    //     } else {
    //         echo "<script>alert('Update failed');</script>";
    //     }
    //     return $success;
    // }
    
    function deleteUser($id){
        $conn = $this->connection;
        $sql = "DELETE FROM users WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script>alert('Delete was successful');</script>";
   } 
}


