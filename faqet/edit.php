<?php
session_start();


include_once("../database/databaseConnection.php");
include_once('usersrepository.php');
include_once('TrendingRespository.php');
include_once('HotelRepository.php');

$dbConnection = DatabaseConnection::getInstance();
$conn = $dbConnection->startConnection();
$user = new UsersRepository($conn);
$trending = new TrendingRespository();
$packages = new HotelRepository();


if (isset($_SESSION['user_authenticated']) && $_SESSION['user_authenticated']) {
//if ($_SESSION['user_authenticated']){

    $userId = $_SESSION['user_id'];

    if (isset($_GET['user_id'])){
        $userId = $_GET['user_id'];
    }

    $userEdit = $user->getUserById($userId);

    if (!$userEdit){
        echo "<p>User not found!</p>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <!-- <link rel="stylesheet" href="Edit.css"> -->

    <style>
        /* Your CSS code here */
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.format {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 50px;
}

/* Styles for the Edit Profile Section */
.forma1,
.forms,
.br {
    width: 30%; /* Set width to approximately 30% for each column */
    margin-bottom: 20px;
}

.editP,
.titulli {
    text-align: center;
    margin-bottom: 20px;
}

.form,
.form1,
.forma {
    text-align: left;
}

.labels {
    display: block;
    margin-bottom: 5px;
}

.inputi {
    width: calc(100% - 16px); /* Considering 8px padding on both sides */
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.submit {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.submit:hover {
    background-color: #45a049;
}

/* Styles for File Input */
.labels[type="file"] {
    display: inline-block;
    margin-bottom: 10px;
}

/* Arrange columns in a row */
@media (max-width: 768px) {
    .forma1,
    .forms,
    .br {
        width: 100%; /* Change width to 100% on smaller screens for stacked layout */
    }
    .format {
        flex-direction: column; /* Change flex direction to column on smaller screens */
    }
}

        </style>
</head>
<body>
    <div class="format">
        <div class="forma1">
        <h1 class="editP">Edit Profile</h1>
       
        <form method="post" action="?action=update&user_id=<?= $userId ?>" class="form">
        <label for="new_name" class="labels">New Name:</label>
        <input type="text" class="inputi" name="new_name" value="<?= isset($userToEdit["name"]) ? $userToEdit["name"] : '' ?>">
        <label for="new_lname" class="labels">New Lastname:</label>
        <input type="text" class="inputi" name="new_lname" value="<?= isset($userToEdit["lname"]) ? $userToEdit["lname"] : '' ?>">
        <label for="new_phone" class="labels">New Phone:</label>
        <input type="text" class="inputi" name="new_phone" value="<?= isset($userToEdit["phone"]) ? $userToEdit["phone"] : '' ?>">
        <label for="new_email" class="labels">New Email:</label>
        <input type="email" class="inputi" name="new_email" value="<?= isset($userToEdit["email"]) ? $userToEdit["email"] : '' ?>">
        <label for="new_role" class="labels">New Role:</label>
        <input type="text" class="inputi" name="new_role" value="<?= isset($userToEdit["role"]) ? $userToEdit["role"] : '' ?>">
        <input type="submit" class="submit" name="update_user" value="Update User">
    </form>
    </div>
    <br>
    </body>
    <body>
    <br>
    <?php

    
    if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'){
    ?>
    <div class="forms">
        <div class="form1">
            <h1 class="titulli">Add A Package</h1>
                <form method="post" class="forma" action="?action=add_hotel&user_id=<?= $userId ?>" enctype="multipart/form-data">
                        <label class="labels" for="name">emri</label>
                        <input class="inputi" type="varchar" name="emri" required>
                        <label class="labels" for="pershkrimi">pershkrimi:</label>
                        <input class="inputi" type="text" name="pershkrimi" required>
                        <label class="labels" for="oferta1">Oferta e pare:</label>
                        <input class="inputi" type="text" name="oferta1" required>
                        <label class="labels" for="oferta2">Oferta e dyte:</label>
                        <input class="inputi" type="text" name="oferta2" required>
                        <label class="labels" for="oferta3">Oferta e trete:</label>
                        <input class="inputi" type="text" name="oferta3" required>
                        <label class="labels" for="imazhi">Image:</label>
                        <input class="labels" type="file" name="fileToUpload" id="fileToUpload" required>
                        <input class="submit" type="submit" name="add_hotels" value="Add Hotel">
                    </form>
        </div>
   </div>
   <?php
}
?> 
   <br>
</body>

<body>
    <br>

   <div class="forms">
        <div class="form1">
            <h1 class="titulli">Add Trending Places</h1>
                <form method="post" class="forma" action="?action=add_trending&user_id=<?= $userId ?>" enctype="multipart/form-data">
                    <label class="labels" for="location">Location Name:</label>
                    <input class="inputi" type="text" location="location name" required>
                        <!-- <select class="kategoria "name="location" required>
                            <option value="Ulqin,Mal te Zi">Ulqin,Mal te Zi</option>
                            <option value="Sarande,Shqiperi">Sarande,Shqiperi</option>
                            <option value="Ksamil,Shqiperi">Ksamil,Shqiperi</option>
                            <option value="Vlore, Shqiperi">Vlore, Shqiperi</option>
                            <option value="Dhermi, Shqiperi">Dhermi, Shqiperi</option>
                            <option value="Shengjin, Shqiperi">Shengjin, Shqiperi</option>
                        </select> -->
                    <label class="labels" for="image">Image:</label>
                    <input class="labels" type="file" name="fileToUpload" id="fileToUpload" required>
                    <input class="submit" type="submit" name="add_trending" value="Add Trending Places">
                </form>
        </div>
   </div>

<br>
</body>
</html>

<?php 

if(isset($_POST['add_trending'])){

    //per mos me pas undefined index notices, perdorim isset
    $location = isset($_POST['location']) ? $_POST['location'] : '';
  


    if(isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === 0) {
        $image = $_FILES['fileToUpload']['name'];

       $destination = '../img/' . $image;

        if(file_exists($destination)){
            echo "<script>alert('File already exists. Choose a different file or name.');</script>";
        } 
        else{
            if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $destination)){
                try {
                    $image = 'img/' . $image;

                    if($trending->addTrending($image, $userId, $location)) {
                        echo "<script>alert('Therapist added sucessfully!');</script>";
                    }else{
                        echo "<script>alert('There was a problem adding your therapist!');</script>";
                    }
                }catch(Exception $e){
                    echo "An error occurred: " . $e->getMessage();
                }
            }
            else{
                echo "<script>alert('File upload failed.');</script>";
            }
        }
    } 
}

if(isset($_POST['add_package'])){

    //per mos me pas undefined index notices, perdorim isset
     $emri = isset($_POST['emri']) ? $_POST['emri'] : '';
     $pershkrimi = isset($_POST['pershkrimi']) ? $_POST['pershkrimi'] : '';
     $oferta1 = isset($_POST['oferta1']) ? $_POST['oferta1'] : '';
     $oferta2 = isset($_POST['oferta2']) ? $_POST['oferta2'] : '';
     $oferta3 = isset($_POST['oferta3']) ? $_POST['oferta3'] : '';


    if(isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === 0) {
        $image = $_FILES['fileToUpload']['name'];
        
       $destination = '../img/' . $image;

        if(file_exists($destination)){
            echo "<script>alert('File already exists. Choose a different file or name.');</script>";
        } 
        else{
            if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $destination)){
                try {
                    $image = 'img/' . $image;

                    if($packages->addPackage($emri, $userId, $pershkrimi, $oferta1, $oferta2, $oferta3, $imazhi)) {
                        echo "<script>alert('Therapist added sucessfully!');</script>";
                    }else{
                        echo "<script>alert('There was a problem adding your therapist!');</script>";
                    }
                }catch(Exception $e){
                    echo "An error occurred: " . $e->getMessage();
                }
            }
            else{
                echo "<script>alert('File upload failed.');</script>";
            }
        }
    } 
}



if (isset($_POST['update_user'])) {
    $newEmail = isset($_POST['new_email']) ? $_POST['new_email'] : '';

    if (!empty($newEmail)) {
        $result = $user->updateUser($userId, $newEmail);

        if($result){
            echo "<p>Email updated successfully.</p>";
        }
        else{
            echo "<p>Failed to update email.</p>";
        }
    }
    else{
        echo "<p>You are not logged in.</p>";
    }
}


?>


       