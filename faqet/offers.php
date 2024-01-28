<?php 
include_once '../database/databaseConnection.php';

// Klasa për të manipuluar të dhënat e hoteleve
class HotelRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function getAllHotels(){
        $conn = $this->connection;

        $sql = "SELECT * FROM hotelet";

        $statement = $conn->query($sql);
        $hotels = $statement->fetchAll();

        return $hotels;
    }
}


$hotelRepository = new HotelRepository;

$hotels = $hotelRepository->getAllHotels();
?>

<?php include 'header.php' ?>

<div class="shkrim">
    <h1>Ofertat eksluzive!</h1>
</div>

<section id="oferetatt">
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
                <a href="booking.html" target="_blank">
                    <button class="book-now-button">Book Now</button>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<?php include 'footer.php' ?>

     <!-- <div class="shkrim">
      <h1>Ofertat eksluzive!</h1>
     </div>
  <section id="oferetatt">
    <div class="hotel-box">
      <img src="../img/1.jpg" alt="Hotel 1">
      <div class="hotel-info">
        <div class="hotel-title">Luxury Resort</div>
        <div class="hotel-description">A breathtaking resort with stunning views.Is set in How, 41 km from Brougham Castle, 47 km from Whinfell Forest.</div>
        <div class="offers-descrition">- Ofertat -</div>
        <p>- Qift: 6netë-7ditë me mëngjes dhe darkë:400€</p>
        <p>- Për person me mëngjes dhe darkë : 70€</p>
        <p>- Fëmijet nën moshën 5 vjeqare ofrojmë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p>
        <a href="booking.html" target="_blank">
          <button class="book-now-button">Book Now</button>
        </a>
      </div>
    </div>

    <div class="hotel-box">
      <img src="../img/22.jpg" alt="Hotel 2">
      <div class="hotel-info">
        <div class="hotel-title">City Boutique Hotel</div>
        <div class="hotel-description">Explore the city from the heart of downtown.Situated in Carlisle, 41 km from Askham Hall,offers you accommodation with free private parking, a restaurant and a bar with a pool.</div>
        <div class="offers-descrition">- Ofertat -</div>
        <p>- Qift: 4netë-5ditë  mëngjes darkë dhe qasje në pishinë:700€</p>
        <p>- Person me mëngjes : 90€</p>
        <p>- Fëmijet nën moshën 4 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p>
        <a href="booking.html" target="_blank">
          <button class="book-now-button">Book Now</button>
        </a>

      </div>
    </div>

    <div class="hotel-box">
        <img src="../img/3.jpg" alt="Hotel 3">
        <div class="hotel-info">
          <div class="hotel-title">The Bothey</div>
          <div class="hotel-description">Boasting garden views, The Bothey offers accommodation with a garden and a patio, around 46 km from Askham Hall. This apartment features free private parking, a 24-hour front desk and free WiFi.</div>
          <div class="offers-descrition">- Ofertat -</div>
          <p>- Qëndrim ditor për një familje:100€</p>
          <p>- Qëndrim një  javor 5-6 persona:850€ </p>
          <p>- Grup shokësh 2netë-3ditë:150$</p>
          <a href="booking.html" target="_blank">
            <button class="book-now-button">Book Now</button>
          </a>
         </div>
         </div>

          </section>

          <section id="oferetatt">
            <div class="hotel-box">
              <img src="../img/4.jpg" alt="Hotel 4">
              <div class="hotel-info">
                <div class="hotel-title">Plaza Hotel&Spa</div>
                <div class="hotel-description">Situated in Ulcinj, a few steps from Mala Ulcinjska Beach, Plaza Hotel&SPA features accommodation with a fitness centre, free private parking, a shared lounge and a terrace.</div>
                <div class="offers-descrition">- Ofertat -</div>
                <p>- Qift: 2netë-3ditë dhe qasje ne fitnes:500€</p>
                <p>- Përson me mëngjes dhe darkë(nata),pije falas :95€</p>
                <p>- Fëmijët nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p>
                <a href="booking.html" target="_blank">
                  <button class="book-now-button">Book Now</button>
                </a>
              </div>
            </div>
            <div class="hotel-box">
              <img src="../img/5.jpg" alt="Hotel 5">
              <div class="hotel-info">
                <div class="hotel-title">Padam Hotel&Spa</div>
                <div class="hotel-description">Situated in Ulcinj, 1.3 km from Mala Ulcinjska Beach, Padam Hotel & SPA features accommodation with a seasonal outdoor swimming pool, free private parking, a fitness centre and a garden.</div>
                <div class="offers-descrition">- Ofertat -</div>
                <p>- Qift 4netë-5ditë  mëngjes dhe qasje në pishinë:480€</p>
                <p>- Për person me mëngjes : 45€</p>
                <p>- Fëmijët nën moshën 2 vjeqare pa pagesë</p>
                <p>- Akomodim për një familje (4-5 persona)</p>
                <a href="booking.html" target="_blank">
                  <button class="book-now-button">Book Now</button>
                </a>
              </div>
            </div>
            <div class="hotel-box">
              <img src="../img/6.jpg" alt="Hotel 6">
              <div class="hotel-info">
                <div class="hotel-title">Dulamerovic Hotel</div>
                <div class="hotel-description">Located in Ulcinj, 30 km from Port of Bar, Dulamerovic Hotel offers accommodation with a terrace, private parking and a restaurant.</div>
                <div class="offers-descrition">-Ofertat-</div>
                <p>- Qëndrim ditor për një familje:130€</p>
                <p>- Qëndrim një javor 5-6 persona:550€ </p>
                <p>- Grup personash ( 7-8 persona ) me parking dhe qasje ne bufe:890$ </p>
                <a href="booking.html" target="_blank">
                  <button class="book-now-button">Book Now</button>
                </a>
           </section>


            
      <section id="oferetatt">
        <div class="hotel-box">
          <img src="../img/7.jpg" alt="Hotel 7">
          <div class="hotel-info">
            <div class="hotel-title">Demi Hotel</div>
            <div class="hotel-description">Offering a restaurant and a private beach area, Demi Hotel is located in Sarandë. Free WiFi access is available.</div>
            <div class="offers-descrition">- Ofertat -</div>
            <p>- Qift 6netë-5ditë me mëngjes:740€</p>
            <p>- Person me mëngjes dhe darkë(nata),qasje në plazh privat :75€</p>
            <p>- Fëmijët nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p>
            <a href="booking.html" target="_blank">
              <button class="book-now-button">Book Now</button>
            </a>
          </div>
        </div>

        <div class="hotel-box">
            <img src="../img/8.jpg" alt="Hotel 8">
            <div class="hotel-info">
              <div class="hotel-title">Hotel Vila Kalcuni</div>
              <div class="hotel-description">Enjoying a beachfront location, Hotel Vila Kalcuni Sarande is set in Sarandë, offering elegantly furnished and air-conditioned rooms.</div>
              <div class="offers-descrition">- Ofertat -</div>
              <p>- Qift nata me mëngjes:300€</p>
              <p>- Person me mëngjes dhe darkë(nata) :30€</p>
              <p>- Fëmijët nën mosheën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p>
              <a href="booking.html" target="_blank">
                <button class="book-now-button">Book Now</button>
              </a>
            </div>
          </div>

          <div class="hotel-box">
            <img src="../img/9.jpg" alt="Hotel 9">
            <div class="hotel-info">
              <div class="hotel-title">Hotel Emblem</div>
              <div class="hotel-description">Set in Sarandë, a few steps from Mango Beach, Hotel Emblem offers accommodation with a seasonal outdoor swimming pool, free private parking, a garden and a terrace.</div>
              <div class="offers-descrition">- Ofertat -</div>
              <p>- Qift 2netë-3ditë me mëngjes dhe qasje në pishinë:630€</p>
              <p>- Per person me mengjes dhe darke(nata),qasje ne fitnes :50€</p>
              <p>- Fëmijët nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p>
              <a href="booking.html" target="_blank">
                <button class="book-now-button">Book Now</button>
              </a>
            </div>
          </div>
    </section>

    <section id="oferetatt">
      <div class="hotel-box">
        <img src="../img/10.jpg" alt="Hotel 10">
        <div class="hotel-info">
          <div class="hotel-title">Heksamil Hotel</div>
          <div class="hotel-description">Heksamil Hotel is located in Ksamil and offers free WiFi throughout. Guests can enjoy a balcony with sea views in their rooms.</div>
          <div class="offers-descrition">- Ofertat -</div>
          <p>- Qift 3netë-4ditë :250€</p>
          <p>- Për person me mëngjes(nata) :45€</p>
          <p>- Fëmijët nën moshën 2 vjeqare pa pagesë</p>
          <a href="booking.html" target="_blank">
            <button class="book-now-button">Book Now</button>
          </a>
        </div>
      </div>

      <div class="hotel-box">
          <img src="../img/11.jpg" alt="Hotel 11">
          <div class="hotel-info">
            <div class="hotel-title">Olive Hotel</div>
            <div class="hotel-description">Situated in Ksamil, 200 metres from Lori Beach, Hotel Olive Ksamil features accommodation with a garden, free private parking, a shared lounge and a terrace.</div>
            <div class="offers-descrition">- Ofertat -</div>
            <p>- Qift 4netë-5ditë :600€</p>
            <p>- Për person me mëngjes dhe darkë(nata) :55€</p>
            <p>Fëmijët nën mosheën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p>
            <a href="booking.html" target="_blank">
              <button class="book-now-button">Book Now</button>
            </a>
          </div>
        </div>

        <div class="hotel-box">
          <img src="../img/12.jpg" alt="Hotel 12">
          <div class="hotel-info">
            <div class="hotel-title">ILLYRIAN Hotel</div>
            <div class="hotel-description">ILLYRIAN hotel is set on the beachfront in Ksamil, 300 metres from Lori Beach and 300 metres from Paradise Beach.</div>
            <div class="offers-descrition">- Ofertat -</div>
            <p>- Qift 2netë-3ditë me mëngjes:400€</p>
            <p>- Për person me mëngjes dhe darkë(nata):60€</p>
            <p>Fëmijët nën mosheën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p>
            <a href="booking.html" target="_blank">
              <button class="book-now-button">Book Now</button>
            </a>
          </div>
        </div>
      </section>

      
      <section id="oferetatt">
        <div class="hotel-box">
            <img src="../img/13.jpg" alt="Hotel 13">
            <div class="hotel-info">
              <div class="hotel-title">Hotel Vlora International</div>
              <div class="hotel-description">Hotel Vlora International is set only 10 metres from Vlora Bay. The property offers comfortable and modern rooms and suites. An indoor pool and a hot tub are offered on site.</div>
              <div class="offers-descrition">- Ofertat -</div>
              <p>- Qift 4netë-5ditë me mëngjes dhe qasje ne hot tub:650€</p>
              <p>- Per person me qasje ne hot tub :72€</p>
              <p>- Fëmijët nën moshën 3 vjeqare nuk lejohen të hyjnë në hot tub pa praninë e prindit.</p>
              <a href="booking.html" target="_blank">
              <button class="book-now-button">Book Now</button>
            </a>
            </div>
          </div>

          <div class="hotel-box">
            <img src="../img/14.jpg" alt="Hotel 14">
            <div class="hotel-info">
              <div class="hotel-title">Belvedere Hotel</div>
              <div class="hotel-description">Situated in Vlorë, 500 metres from Beach at Government Villas, Belvedere Hotel features accommodation with a terrace, free private parking and a bar.</div>
              <div class="offers-descrition">- Ofertat -</div>
              <p>- Qift 2netë-3ditë me mëngjes:250€</p>
              <p>- Person me mëngjes dhe darkë(nata):90€</p>
              <p>- Fëmijët nën moshën 2 vjeqare pa pagesë</p>
              <a href="booking.html" target="_blank">
              <button class="book-now-button">Book Now</button>
            </a>
            </div>
          </div>

          
          <div class="hotel-box">
            <img src="../img/15.jpg" alt="Hotel 15">
            <div class="hotel-info">
              <div class="hotel-title">Viroi Hotel</div>
              <div class="hotel-description">Located in Vlorë, a few steps from Radhimë Beach, Hotel Viroi provides accommodation with a terrace, free private parking, a restaurant and a bar.</div>
              <div class="offers-descrition">- Ofertat -</div>
              <p>- Qift 3netë-4ditë me mëngjes:170€</p>
              <p>- Person me mëngjes dhe darkë(nata)me parking privat:60€</p>
              <p>- Fëmijët nën mosheën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p> 
              <a href="booking.html" target="_blank">
              <button class="book-now-button">Book Now</button>
            </a>
            </div>
          </div>

        </section>

        <section id="oferetatt">
            <div class="hotel-box">
                <img src="../img/16.jpg" alt="Hotel 16">
                <div class="hotel-info">
                  <div class="hotel-title">Imperial Hotel</div>
                  <div class="hotel-description">Located 1 km from the centre of Dhërmi, Hotel Imperial offers an on-site restaurant that serves traditional Albanian dishes.</div>
                  <div class="offers-descrition">- Ofertat-</div>
                  <p>- Qift 6netë-7ditë me mëngjes:740€</p>
                  <p>- Për person me mëngjes dhe darkë(nata):90€</p>
                  <p>- Fëmijet nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p>
                  <a href="booking.html" target="_blank">
                  <button class="book-now-button">Book Now</button>
                </a>
                </div>
              </div>

              <div class="hotel-box">
                <img src="../img/17.jpg" alt="Hotel 17">
                <div class="hotel-info">
                  <div class="hotel-title">Black Diamond Hotel</div>
                  <div class="hotel-description">Located in Dhërmi, 1 km from Dhermi Beach, Black Diamond Hotel Dhermi provides accommodation with a restaurant, free private parking and a bar.</div>
                  <div class="offers-descrition">- Ofertat -</div>
                  <p>- Qift 3netë-4ditë me mëngjes:250€</p>
                  <p>- Për person me mëngjes dhe darkë(nata) :60€</p>
                  <p>- Nata per grup personash deri në 6 persona:150€</p>
                  <a href="booking.html" target="_blank">
                  <button class="book-now-button">Book Now</button>
                </a>
                </div>
              </div>

              <div class="hotel-box">
                <img src="../img/18.jpg" alt="Hotel 18">
                <div class="hotel-info">
                  <div class="hotel-title">Sea View Hotel</div>
                  <div class="hotel-description">Situated in Dhërmi, within 200 metres of Dhermi Beach and 2 km of Palasa Beach, Sea View Hotel Dhermi features accommodation with a garden and free WiFi as well as free private parking for guests</div>
                  <div class="offers-descrition">- Ofertat -</div>
                  <p>- Qift 4netë-5ditë me mëngjes:270€</p>
                  <p>- Për person me mëngjes dhe darkë(nata):60€</p>
                  <p>- Nëse rezervimi bëhet 1 muaj para ju ofrojmë 20% zbritje.</p>
                  <a href="booking.html" target="_blank">
                  <button class="book-now-button">Book Now</button>
                </a>
                </div>
              </div>
        </section>

        <section id="oferetatt"> 
            <div class="hotel-box">
                <img src="../img/19.jpg" alt="Hotel 19">
                <div class="hotel-info">
                  <div class="hotel-title">President Hotel</div>
                  <div class="hotel-description">Hotel President is located just a few steps from a pebbly beach in Shengjin. It offers an on-site restaurant and a bar with a spacious terrace. Free Wi-Fi and parking are provided on site.</div>
                  <div class="offers-descrition">- Ofertat -</div>
                  <p>- Qift 4netë-5ditë all inclusive:495€</p>
                  <p>- Për person (nata) all inclusive :100€</p>
                  <p>- Fëmijët nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p>
                  <a href="booking.html" target="_blank">
                  <button class="book-now-button">Book Now</button>
                </a>
                </div>
              </div>

              <div class="hotel-box">
                <img src="../img/20.jpg" alt="Hotel 20">
                <div class="hotel-info">
                  <div class="hotel-title">Hotel Bar Triumf</div>
                  <div class="hotel-description">Set in Shëngjin, a few steps from Shëngjin Beach, Hotel Bar Restaurant Triumf Shengjin offers accommodation with a seasonal outdoor swimming pool, free private parking, a terrace and a restaurant.</div>
                  <div class="offers-descrition">- Ofertat -</div>
                  <p>- Për qift 4netë-5ditë :400€</p>
                  <p>- Për person all inclusive dhe pije pa limit :80€</p>
                  <p>- Fëmijët nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p>
                  <a href="booking.html" target="_blank">
                  <button class="book-now-button">Book Now</button>
                </a>
                </div>
              </div>

              <div class="hotel-box">
                <img src="../img/21.jpg" alt="Hotel 21">
                <div class="hotel-info">
                  <div class="hotel-title">Molla Hotel</div>
                  <div class="hotel-description">Located in Shëngjin, 60 metres from Ylberi Beach, Molla Hotel Restorant provides accommodation with a garden, free private parking, a terrace and a restaurant.</div>
                  <div class="offers-descrition">- Ofertat -</div>
                  <p>- Për qift 4netë-5ditë me mëngjes dhe darkë:200€</p>
                  <p>- Për person me mëngjes dhe darkë(nata) :35€</p>
                  <p>- Fëmijët nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë</p>
                  <a href="booking.html" target="_blank">
                  <button class="book-now-button">Book Now</button>
                </a>
                </div>
              </div>
            </section>
        
          
   -->