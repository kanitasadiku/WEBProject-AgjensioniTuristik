<?php 
include_once '../database/databaseConnection.php';

// Klasa për të manipuluar të dhënat e destinacioneve të trendit
class TrendingRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function getAllTrending() {
        $conn = $this->connection;

        $sql = "SELECT * FROM trending";

        $statement = $conn->query($sql);
        $trendings = $statement->fetchAll();

        return $trendings;
    }
}

$trendingRepository = new TrendingRepository;
$trendings = $trendingRepository->getAllTrending();
?>

<?php include 'header.php'; ?>

<section id="courses" class="bg-light">
    <div class="container">
        <div class="title">
            <h2>Start Your Trip</h2>
            <p>The most visited places this month</p>
        </div>

        <div class="courses">
            <?php foreach ($trendings as $trending): ?>
                <div class="card">
                    <img src="<?php echo $trending['image']; ?>">
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <span><?php echo $trending['location']; ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<!--  

         <section id="courses" class="bg-light">
            <div class="container">
                <div class="title">
                    <h2>Start Your Trip</h2>
                    <p>The most visited places this month</p>
                </div>
        
                <div class="courses">
                    <div class="card">
                        <img src="../img/u.jpg">
                        <div class="location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Ulqin, Mal të Zi</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../img/sarand.jpg">
                        <div class="location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Sarandë, Shqipëri</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../img/ksamil.jpg">
                        <div class="location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Ksamil, Shqipëri</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../img/vlore gjipe.jpg">
                        <div class="location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Vlorë, Shqipëri</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../img/dhermi.jpg">
                        <div class="location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Dhërmi, Shqipëri</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../img/shengjin.jpg">
                        <div class="location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Shëngjin, Shqipëri</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         ?> -->