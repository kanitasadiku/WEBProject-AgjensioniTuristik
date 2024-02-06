<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agjension turistik</title>
    <link rel="icon" href="../img/logo.jpg" type="image/icon">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/7be85ed243.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="logo"><a href="index.php"><img src="../img/logo.jpg" alt=""></a></div>
        <ul class="nav-links">
            <li><a href="about-us.php"> About us </a></li>
            <li><a href="trending.php"> Trending </a></li>
            <li><a href="offers.php"> Offers </a></li>
            <li><a href="booking.php"> Booking </a></li>
            <li><a href="review.php"> Review </a></li>
            <li><a href="contact_us.php"> Contact us </a></li>
            <!-- <li><a href="login.php"> <i class="fa-solid fa-user"></i> </a></li> -->
             <?php

                   if (isset($_SESSION['user_authenticated']) && $_SESSION['user_authenticated']) {
                        echo '<li><a href=" dashboard.php">Dashboard</a></li>';
                        echo '<li><a href=" logout.php">Logout</a></li>';
                        echo'<li>';
                       // echo '<img src="Images/PersonLogo" alt="Person Logo" style="width: 25px; height: 25px; margin-bottom: -5px;">';
                        echo '<a href=" edit.php"><i class="fa fa-user"></i>' . $_SESSION['user_email'] . '</a>';
                        echo '</li>';
                    } else {
                        echo '<li>';
                      //  echo '<img src="Images/PersonLogo" alt="Person Logo" style="width: 25px; height: 25px; margin-bottom: -5px;">';
                        echo '<a href="login.php">Log in</a>';
                        echo '</li>';
                    }
               
            ?>
        </ul>
     </nav>