-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 09:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_d`
--

CREATE TABLE `booking_d` (
  `id` int(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  `guests` int(11) NOT NULL,
  `arrival` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_d`
--

INSERT INTO `booking_d` (`id`, `place`, `guests`, `arrival`, `leaving`) VALUES
(1, 'ksamil', 4, '2024-02-03', '2024-02-05'),
(2, 'ksamil', 4, '2024-02-03', '2024-02-06'),
(3, 'ksamil', 2, '2025-02-02', '2025-02-03'),
(4, 'Vlore', 5, '2024-02-24', '2024-02-26'),
(5, 'Vlora', 5, '2024-06-29', '2024-07-15'),
(6, 'ksamil', 8, '2024-10-15', '2024-10-17'),
(7, 'Durres', 3, '2024-02-02', '2024-02-05'),
(8, 'tivar', 2, '2024-02-24', '2024-02-26'),
(9, 'ulqin', 5, '2024-02-25', '2024-02-27'),
(10, '', 0, '0000-00-00', '0000-00-00'),
(11, 'ksamil', 9, '2025-12-01', '2025-12-02'),
(12, 'ksamil', 4, '2024-02-22', '2024-02-22'),
(13, 'ksamil', 12, '2023-02-02', '2023-02-08'),
(14, 'ksamil', 2, '2023-02-02', '2023-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `contactf`
--

CREATE TABLE `contactf` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactf`
--

INSERT INTO `contactf` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'Donika', 'd.n@gmail.com', '04444444', 'rwfedfer', '2024-02-02 19:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `hotelet`
--

CREATE TABLE `hotelet` (
  `id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `pershkrimi` text DEFAULT NULL,
  `oferta1` text DEFAULT NULL,
  `oferta2` text DEFAULT NULL,
  `oferta3` text DEFAULT NULL,
  `imazhi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotelet`
--

INSERT INTO `hotelet` (`id`, `emri`, `pershkrimi`, `oferta1`, `oferta2`, `oferta3`, `imazhi`) VALUES
(1, 'Luxury Resort', 'A breathtaking resort with stunning views.Is set in How, 41 km from Brougham Castle, 47 km from Whinfell Forest.', '- Qift: 6netë-7ditë me mëngjes dhe darkë:450€', '- Për person me mëngjes dhe darkë : 70€', '- Fëmijet nën moshën 5 vjeqare ofrojmë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/1.jpg'),
(2, 'City Boutique Hotel', 'Explore the city from the heart of downtown.Situated in Carlisle, 41 km from Askham Hall,offers you accommodation with free private parking, a restaurant and a bar with a pool.', '- Qift: 4netë-5ditë mëngjes darkë dhe qasje në pishinë:700€', '- Person me mëngjes : 90€', '- Fëmijet nën moshën 4 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/22.jpg'),
(3, 'The Bothey', 'Boasting garden views, The Bothey offers accommodation with a garden and a patio, around 46 km from Askham Hall. This apartment features free private parking, a 24-hour front desk and free WiFi.', ' -Qëndrim ditor për një familje:100€', '-Qëndrim një  javor 5-6 persona:850€', '-Grup shokësh 2netë-3ditë:150€', '../img/3.jpg'),
(4, 'Plaza Hotel&Spa', 'Situated in Ulcinj, a few steps from Mala Ulcinjska Beach, Plaza Hotel&SPA features accommodation with a fitness centre, free private parking, a shared lounge and a terrace.', '- Qift: 2netë-3ditë dhe qasje ne fitnes:500€', '- Përson me mëngjes dhe darkë(nata),pije falas :95€', '- Fëmijët nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/4.jpg'),
(5, 'Padam Hotel&Spa', 'Situated in Ulcinj, 1.3 km from Mala Ulcinjska Beach, Padam Hotel & SPA features accommodation with a seasonal outdoor swimming pool, free private parking, a fitness centre and a garden.', '- Qift 4netë-5ditë  mëngjes dhe qasje në pishinë:480€', ' - Për person me mëngjes : 45€', '-  Fëmijët nën moshën 2 vjeqare pa pagesë', '../img/5.jpg'),
(6, 'Dulamerovic Hotel', 'Located in Ulcinj, 30 km from Port of Bar, Dulamerovic Hotel offers accommodation with a terrace, private parking and a restaurant.', '- Qëndrim ditor për një familje:130€', '- Qëndrim një javor 5-6 persona:550€ ', '- Grup personash ( 7-8 persona ) me parking dhe qasje ne bufe:890€', '../img/6.jpg'),
(7, 'Demi Hotel', 'Offering a restaurant and a private beach area, Demi Hotel is located in Sarandë. Free WiFi access is available.', '- Qift 6netë-5ditë me mëngjes:740€', '- Person me mëngjes dhe darkë(nata),qasje në plazh privat :75€', '- Fëmijët nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/7.jpg'),
(8, 'Hotel Vila Kalcuni', 'Enjoying a beachfront location, Hotel Vila Kalcuni Sarande is set in Sarandë, offering elegantly furnished and air-conditioned rooms.', '- Qift nata me mëngjes:300€', '- Person me mëngjes dhe darkë(nata) :30€', '- Fëmijët nën mosheën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/8.jpg'),
(9, 'Hotel Emblem', 'Set in Sarandë, a few steps from Mango Beach, Hotel Emblem offers accommodation with a seasonal outdoor swimming pool, free private parking, a garden and a terrace.', '- Qift 2netë-3ditë me mëngjes dhe qasje në pishinë:630€', '- Per person me mengjes dhe darke(nata),qasje ne fitnes :50€', '- Fëmijët nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/9.jpg'),
(10, 'Heksamil Hotel', 'Heksamil Hotel is located in Ksamil and offers free WiFi throughout. Guests can enjoy a balcony with sea views in their rooms.', '- Qift 3netë-4ditë :250€', '- Për person me mëngjes(nata) :45€', '- Fëmijët nën moshën 2 vjeqare pa pagesë', '../img/10.jpg'),
(11, 'Olive Hotel', 'Situated in Ksamil, 200 metres from Lori Beach, Hotel Olive Ksamil features accommodation with a garden, free private parking, a shared lounge and a terrace.', '- Qift 4netë-5ditë :600€', '- Për person me mëngjes dhe darkë(nata) :55€', '- Fëmijët nën mosheën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/11.jpg'),
(12, 'ILLYRIAN Hotel', 'ILLYRIAN hotel is set on the beachfront in Ksamil, 300 metres from Lori Beach and 300 metres from Paradise Beach.', '- Qift 2netë-3ditë me mëngjes:400€', '- Për person me mëngjes dhe darkë(nata):60€', '- Fëmijët nën mosheën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/12.jpg'),
(13, 'Hotel Vlora International', 'Hotel Vlora International is set only 10 metres from Vlora Bay. The property offers comfortable and modern rooms and suites. An indoor pool and a hot tub are offered on site.', '- Qift 4netë-5ditë me mëngjes dhe qasje ne hot tub:650€', '- Per person me qasje ne hot tub :72€', '- Fëmijët nën moshën 3 vjeqare nuk lejohen të hyjnë në hot tub pa praninë e prindit.', '../img/13.jpg'),
(14, 'Belvedere Hotel', 'Situated in Vlorë, 500 metres from Beach at Government Villas, Belvedere Hotel features accommodation with a terrace, free private parking and a bar.', '- Qift 2netë-3ditë me mëngjes:250€', '- Person me mëngjes dhe darkë(nata):90€', '- Fëmijët nën moshën 2 vjeqare pa pagesë', '../img/14.jpg'),
(15, 'Viroi Hotel', 'Located in Vlorë, a few steps from Radhimë Beach, Hotel Viroi provides accommodation with a terrace, free private parking, a restaurant and a bar.', '- Qift 3netë-4ditë me mëngjes:170€', '- Person me mëngjes dhe darkë(nata)me parking privat:60€', '- Fëmijët nën mosheën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/15.jpg'),
(16, 'Imperial Hotel', 'Located 1 km from the centre of Dhërmi, Hotel Imperial offers an on-site restaurant that serves traditional Albanian dishes.', '- Qift 6netë-7ditë me mëngjes:740€', '- Për person me mëngjes dhe darkë(nata):90€', '- Fëmijet nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/16.jpg'),
(17, 'Black Diamond Hotel', 'Located in Dhërmi, 1 km from Dhermi Beach, Black Diamond Hotel Dhermi provides accommodation with a restaurant, free private parking and a bar.', '- Qift 3netë-4ditë me mëngjes:250€', '- Për person me mëngjes dhe darkë(nata) :60€', '- Nata per grup personash deri në 6 persona:150€', '../img/17.jpg'),
(18, 'Sea View Hotel', 'Situated in Dhërmi, within 200 metres of Dhermi Beach and 2 km of Palasa Beach, Sea View Hotel Dhermi features accommodation with a garden and free WiFi as well as free private parking for guests', '- Për person me mëngjes dhe darkë(nata):60€', '- Qift 4netë-5ditë me mëngjes:270€', '- Nëse rezervimi bëhet 1 muaj para ju ofrojmë 20% zbritje.', '../img/18.jpg'),
(19, 'President Hotel', 'Hotel President is located just a few steps from a pebbly beach in Shengjin. It offers an on-site restaurant and a bar with a spacious terrace. Free Wi-Fi and parking are provided on site.', '- Qift 4netë-5ditë all inclusive:495€', '- Për person (nata) all inclusive :100€', '- Fëmijët nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/19.jpg'),
(20, 'Hotel Bar Triumf', 'Set in Shëngjin, a few steps from Shëngjin Beach, Hotel Bar Restaurant Triumf Shengjin offers accommodation with a seasonal outdoor swimming pool, free private parking, a terrace and a restaurant.', '- Për qift 4netë-5ditë :400€', '- Për person all inclusive dhe pije pa limit :80€', '- Fëmijët nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/20.jpg'),
(21, 'Molla Hotel', 'Located in Shëngjin, 60 metres from Ylberi Beach, Molla Hotel Restorant provides accommodation with a garden, free private parking, a terrace and a restaurant.', '- Për qift 4netë-5ditë me mëngjes dhe darkë:200€', '- Për person me mëngjes dhe darkë(nata) :35€', '- Fëmijët nën moshën 3 vjeqare kanë zbritje 50% ndërsa fëmijët nën moshën 2 vjeqare pa pagesë', '../img/21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trending`
--

CREATE TABLE `trending` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `addedbyuser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trending`
--

INSERT INTO `trending` (`id`, `location`, `image`, `addedbyuser`) VALUES
(1, 'Ulqin, Mal të Zi', '../img/u.jpg', NULL),
(2, 'Sarandë, Shqipëri', '../img/sarand.jpg', NULL),
(3, 'Ksamil, Shqipëri', '../img/ksamil.jpg', NULL),
(4, 'Vlorë, Shqipëri', '../img/vlore gjipe.jpg', NULL),
(5, 'Dhërmi, Shqipëri', '../img/dhermi.jpg', NULL),
(6, 'Shëngjin, Shqipëri', '../img/shengjin.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `phone`, `email`, `password`, `role`) VALUES
(18, 'Liona', 'Aliu', 'l_a@gmail.com', 'l_a@gmail.com', 'admin', 'admin'),
(20, 'Leona', 'Brahimi', 'l_brahimi@gmail.com', 'l_brahimi@gmail.com', 'admin', 'user'),
(21, 'Alea', 'Ahmeti', '044523698', 'a_ahmeti@gmail.com', '$2y$10$IMHUmruKZq18U7mxotdwEuo/ioMuA93jiw/699/DxaNVdCU.98NKi', 'user'),
(22, 'Donika', 'Nuredini', '04444444', 'don_n@gmail.com', '$2y$10$Um8h66gDWZhi/4zOGfgzWu1IPR0IcEXQmPSoVuc.SZCuYH1memdMO', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_d`
--
ALTER TABLE `booking_d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactf`
--
ALTER TABLE `contactf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelet`
--
ALTER TABLE `hotelet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trending`
--
ALTER TABLE `trending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_d`
--
ALTER TABLE `booking_d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contactf`
--
ALTER TABLE `contactf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotelet`
--
ALTER TABLE `hotelet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `trending`
--
ALTER TABLE `trending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
