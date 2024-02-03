<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       
body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 0 auto;
}

/* Header Styles */
.titulli {
    text-align: center;
}

/* User Dashboard Styles */
.permbajtja-dashboard {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.emri {
    font-size: 24px;
    margin-bottom: 5px;
}

.mbiemri {
    font-size: 18px;
    margin-bottom: 10px;
}

.permbajtja {
    margin-bottom: 10px;
}

.buttons {
    display: flex;
    justify-content: space-between;
}

.buttons a {
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.buttons a:hover {
    background-color: #f0f0f0;
}

/* Hotel Box Styles */
.hotel-box {
    display: flex;
    margin-bottom: 20px;
}

.hotel-box img {
    width: 200px;
    height: auto;
    margin-right: 20px;
}

.hotel-info {
    flex-grow: 1;
}

.hotel-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 5px;
}

.hotel-description {
    margin-bottom: 10px;
}

.offers-descrition {
    font-weight: bold;
    margin-bottom: 5px;
}

/* Trending Places Styles */
.card {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.location {
    margin-top: 10px;
    display: flex;
    align-items: center;
}

.location i {
    margin-right: 5px;
}

/* Footer Styles */
.footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

.footer p {
    margin: 0;
}

    </style>
</head>
<body>
<?php
session_start();
include_once('usersrepository.php');
include_once('TrendingRespository.php');
include_once('HotelRepository.php');
?>
<?php
$user = new UsersRepository();
$trending = new TrendingRespository();
$packages = new HotelRepository();

$userId = $_SESSION['user_id'];
$user_trendings = $trending->getTrendingByUserIds($userId);

if (isset($_GET['action']) && $_GET['action'] === 'delete_trending' && isset($_GET['trending_id'])) {
    $trendingId = $_GET['trending_id'];
    $trending->deleteTrending($trendingId);
}
if (isset($_GET['action']) && $_GET['action'] === 'delete_packages' && isset($_GET['packages_id'])) {
    $hotelId = $_GET['hotel_id'];
    $packages->deleteHotel($HotelId);
}

if ($_SESSION['user_role'] === 'admin') {
    if (isset($_GET['action']) && isset($_GET['user_id'])) {
        $action = $_GET['action'];
        $userId = $_GET['user_id'];

        if ($action === 'edit') {
            $userToEdit = $user->getUserById($userId);
            ?>
            <h1 class="titulli">Edit User</h1>
            <form method="post" action="?action=update&user_id=<?= $userId ?>" class="form">
                <label for="new_name">New Name:</label>
                <input type="name" name="new_name" value="<?= $userToEdit["name"] ?>">
                <label for="new_lname">New Lastname:</label>
                <input type="lname" name="new_lname" value="<?= $userToEdit["lname"] ?>">
                <label for="new_phone">New Phone:</label>
                <input type="phone" name="new_phone" value="<?= $userToEdit["phone"] ?>">
                <label for="new_email">New Email:</label>
                <input type="email" name="new_email" value="<?= $userToEdit["email"] ?>">
                <input type="text" name="new_role" value="<?= $userToEdit["role"] ?>">
                <input type="submit" name="update_user" value="Update User">
            </form>
            <?php
        } else if ($action === 'delete') {
            $user->deleteUser($userId);
        }
    }

    if (isset($_POST['update_user'])) {
        $newName = $_POST['new_name'];
        $newLname = $_POST['new_lname'];
        $newEmail = $_POST['new_email'];
        $newRole = $_POST['new_role'];
        $user->updateUser($userId, $newName, $newLname, $newEmail, $newRole);
    }

    $allUsers = $user->getAllUsers();

    echo '<h1 class="titulli">User Dashboard</h1>';
    foreach ($allUsers as $currentUser): 
        ?>
        <div class="permbajtja-dashboard">
            <h1 class="emri">
                <?= $currentUser["name"] ?>
            </h1>
            <h1 class="mbiemri">
                <?= $currentUser["lname"] ?>
            </h1>
            <p class="permbajtja">
                <?= $currentUser["email"] ?>
            </p>
            <a href="?action=edit&user_id=<?= $currentUser['id'] ?>">Edit</a>
            <a href="?action=delete&user_id=<?= $currentUser['id'] ?>">Delete</a>
        </div>
        <hr class="hr" />
        <?php
    endforeach;
}

?>
        <h1 class="titulli">My Packages</h1>
    <div class="items">
        <?php if (!empty($hotels)): ?>
            <?php foreach ($hotels as $hotel): ?>
        <div class="hotel-box">
            <img src="<?php echo $hotel['imazhi']; ?>" alt="<?php echo $hotel['emri']; ?>">
            <div class="hotel-info">
                <div class="hotel-title"><?php echo $hotel['emri']; ?></div>
                <div class="hotel-description"><?php echo $hotel['pershkrimi']; ?></div>
                <div class="offers-descrition">- Ofertat -</div>
                <p><?php echo $hotel['oferta1']; ?></p>
                <p><?php echo $hotel['oferta2']; ?></p>
                <p><?php echo $hotel['oferta3']; ?></p>
                        </div>
                </div>
               

                <div class="buttons">
                    <a href="?action=delete_product&hotels_id=<?= $hotels['id'] ?>" class="fshirja" style="color: red; margin-right: 10px">
                        Delete
                    </a>
                    <a href="Edit.php?hotels_id=<?= $hotels['id'] ?>" class="editimi">
                        Edit
                    </a>
                    <a href="offers.php?hotels_id=<?= $hotels['id'] ?>" class="shiko">
                        View
                    </a>
                </div>
                <p>Added on:
                    <?= $hotels['dateofaddition'] ?>
                </p>
                <p>Added by:
                    <?= $user->getUserById($hotels['addedbyuser'])['email'] ?>
                </p>
                </div>
            <?php endforeach; ?>
            <?php else: ?>
            <p>No products added. <a href="Edit.php">Add one</a>.</p>
        <?php endif; ?>

        <?php if ($_SESSION['user_role'] === 'admin'):?>        
        <h1 class="titulli">Trending places</h1>
    <div class="items">
        <?php if (!empty($trendings)): ?>
        <div class="courses">
            <?php foreach ($trendings as $trending): ?>
                <div class="card">
                    <img src="<?php echo $trending['image']; ?>">
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <span><?php echo $trending['location']; ?></span>
                    </div>
                </div>
                <div class="buttons">
                    <a href="?action=delete_trending&trendinf_id=<?= $trending['id'] ?>" class="fshirja" style="color: red; margin-right: 10px">
                        Delete
                    </a>
                    <a href="Edit.php?trending_id=<?= $trending['id'] ?>" class="editimi">
                        Edit
                    </a>
                    <a href="trending.php?trending_id=<?= $trending['id'] ?>" class="shiko">
                        View
                    </a>
                </div>
                <p>Added on:
                    <?= $ticket['dateofaddition'] ?>
                </p>
                <p>Added by:
                    <?= $user->getUserById($trending['addedbyuser'])['email'] ?>
                </p>
                </div>
            <?php endforeach; ?>
            <?php else: ?>
            <p>No trending place added. <a href="Edit.php">Add one</a>.</p>
        <?php endif; ?>
        </div>
    <?php endif; ?>
</body>
</html>