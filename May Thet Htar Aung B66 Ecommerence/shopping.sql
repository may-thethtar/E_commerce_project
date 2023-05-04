-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 12:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `IID` int(11) NOT NULL,
  `Foodname` varchar(100) DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`IID`, `Foodname`, `Category`, `Description`, `Price`, `Image`) VALUES
(24, 'Coca-Cola', 'Soft Drink', 'This is coke.', 500, 'cocacola.jpg'),
(25, 'Snackpack', 'Snack', 'This is chocolate pudding', 2500, 'snackpack.jpg'),
(26, '2x Samyaung ', 'Grocery and Staple Food', '2x Spicy Noodle', 2300, '2x.jpg'),
(27, 'Clover Farms', 'Diary and Eggs', 'This is chocolate milk', 5700, 'Clover.jpg'),
(28, 'Salmon Rice box', 'Readymade Food', 'Salmon/Rice/Avocado ', 3200, 'Ricebox.jpg'),
(29, 'Bio-Oil', 'Beauty', 'This is oil  for skin .', 7900, 'bio-oil.jpg'),
(30, 'Heineken', 'Beer', 'This is cool drink for over 21 years old.', 2500, 'Heineken.jpg'),
(31, 'Gain', 'Laundry and Cleaning', 'This is a cleaning product for clothes.', 4000, 'Gain.jpg'),
(32, 'Great Value', 'Ice-Cream', 'Milk, Egg, Sugar, and other favor', 3600, 'GreatValue.jpg'),
(33, 'Evian', 'Beverage', '100% pure water', 1200, 'evian.jpg'),
(34, 'Flash Light ', 'Electric device', 'Flash Light', 3800, 'FlashLight.jpg'),
(35, 'Colgate', 'Toiletries', 'Toothpaste', 2500, 'Colgate.jpg'),
(36, 'Gout', 'Breaky and Breakfast', 'yogurt', 1000, 'Gout.jpg'),
(37, 'Mario ', 'Snack', 'This is the cracale snacker', 2400, 'mario.jpg'),
(38, 'Organic', 'Snack', 'This is the crackle snack.', 2500, 'organic.jpg'),
(40, 'Scooby', 'Snack', 'This is chocolate waffle.', 2000, 'scooby.jpg'),
(41, 'Pocky', 'Snack', 'This is a chocolate stick.', 2300, 'pocky.jpg'),
(42, 'PopCorner', 'Snack', 'This is potato chips.', 3000, 'popcorner.jpg'),
(43, 'Colgate', 'Toiletries', 'This is a toothbrush.', 3000, 'Colgateb.jpg'),
(44, 'Cottonelle', 'Toiletries', 'Toilet Tissue', 3200, 'Cottonelle.jpg'),
(45, 'Drove', 'Toiletries', 'This is a shampoo.', 4000, 'Dove.jpeg'),
(47, 'Sensodyne', 'Toiletries', 'This is toothpaste.', 4000, 'sensodyne.jpg'),
(48, 'Pantene', 'Toiletries', 'This is  shampoo.', 5000, 'Pantene.png'),
(49, 'Ghost pepper', 'Grocery and Staple Food', 'This is spicy noodle.', 2500, 'ghost pepper.jpg'),
(51, 'Neoguri', 'Grocery and Staple Food', 'This is a Chinese noodle.', 2500, 'neoguri.jpg'),
(52, 'Samyang (Black)', 'Grocery and Staple Food', 'This is black spicy samyang noodle.', 3000, 'samyangB.jpg'),
(53, 'Samyang (Pink)', 'Grocery and Staple Food', 'This is spicy pink samyang noodle.', 2700, 'samyangP.jpg'),
(54, 'Shin', 'Grocery and Staple Food', 'This is spicy Chinese noodle soup.', 2200, 'shin.jpg'),
(55, 'Fanta', 'Soft Drink', 'This is orange drink.', 400, 'fanta.jpg'),
(57, 'Pepsi', 'Soft Drink', 'This is coke.', 500, 'pepsi.jpg'),
(58, 'Sprite', 'Soft Drink', 'This is sparkling.', 600, 'sprite.jpg'),
(59, 'String', 'Soft Drink', 'This is red sparkling.', 700, 'sting.jpg'),
(60, 'Cool Fan', 'Electric device', 'This is cool battery fan.', 3400, 'cool.jpg'),
(61, 'Camping Flashlight', 'Electric device', 'This is camping Flashlight.', 2300, 'Camping FlashLight.jpg'),
(62, 'Heater ', 'Electric device', 'This is Heater fan.', 5000, 'Heater.jpg'),
(63, 'Fresh and Easy', 'Diary and Eggs', 'This is a pack of egg.', 2500, 'Fresh and Easy.jpg'),
(64, 'Klopudding', 'Diary and Eggs', 'This is cholate milk pudding.', 5500, 'Kloppudding.jpg'),
(65, 'Nawar', 'Diary and Eggs', 'This is butter.', 4000, 'Nawar.jpg'),
(66, 'Nestle', 'Diary and Eggs', 'This is milk powder.', 7000, 'Nestle.jpg'),
(67, 'Dettol', 'Laundry and Cleaning', 'This is for cleaning .', 6000, 'Dettol.jpg'),
(68, 'Tide', 'Laundry and Cleaning', 'This is cleaning water for floor.', 4000, 'Tide.jpg'),
(70, 'WBM', 'Laundry and Cleaning', 'This is laundry powder.', 8900, 'WBM.jpg'),
(71, 'Fiberone', 'Breaky and Breakfast', 'This is cereal.', 5000, 'Fiberone.jpg'),
(73, 'Cupcake', 'Breaky and Breakfast', 'This is cheese cupcake.', 5900, 'CupCake.jpg'),
(75, 'Honey Comb', 'Breaky and Breakfast', 'This is chocolate favour comb.', 4000, 'HoneyComb.jpg'),
(76, 'NewBurn', 'Breaky and Breakfast', 'This is breaky.', 2500, 'Newbrun.jpg'),
(77, 'Wholemeal', 'Breaky and Breakfast', 'This is bread.', 3000, 'Wholemeal.jpg'),
(78, 'ABC', 'Beer', 'This cool beer.', 3000, 'abc.jpg'),
(80, 'ANCHOR', 'Beer', 'This is cool beer bottle.', 4000, 'anchor.jpg'),
(81, 'BudWeiser', 'Beer', 'This is Cool beer bottle.', 4400, 'Budweiser.jpg'),
(82, 'Island', 'Beer', 'This is cool beer .', 3000, 'island.jpg'),
(83, 'KGD', 'Beauty', 'This is a full coverage foundation.', 12000, 'KGD.jpg'),
(84, 'Night Sky', 'Beauty', 'This is a foundation makeup.', 21000, 'Night SKy.jpg'),
(85, 'DEAR', 'Beauty', 'This is hydration night cream.', 19000, 'DEAE.jpg'),
(86, 'ILIA', 'Beauty', 'This is brown-red lipstick.', 18000, 'ILIA.jpg'),
(87, 'FiathHopeLove', 'Beauty', 'This is colourful eyeshadow.', 7800, 'FaithHopeLove.jpg'),
(88, 'Charlotte Tilbury ', 'Beauty', 'This is eyeshadow.', 0, 'charlotte Tilbury.png'),
(89, 'Bistro', 'Readymade Food', 'This is chicken salad.', 3500, 'Bistro.jpg'),
(90, 'Lamyoung', 'Readymade Food', 'This is vegan dim sum.', 4300, 'Lamyong.jpg'),
(91, 'Ready Pac', 'Readymade Food', 'This is sald.', 2300, 'Ready Pac.jpg'),
(92, 'WARNA eat', 'Readymade Food', 'This is sandwich.', 1500, 'WRANAeat.jpg'),
(93, 'Graete', 'Ice-Cream', 'This is raspberry chocolate flavour.', 4500, 'Graete.jpg'),
(94, 'Ben & Jerry', 'Ice-Cream', 'This is chocolate flavor ice cream.', 4800, 'Benand jerryc.jpg'),
(95, 'Magunm', 'Ice-Cream', 'This is chocolate ice cram.', 5000, 'Magunm.jpg'),
(96, 'Hudosonville', 'Ice-Cream', 'This is diary free ice-cream.', 5600, 'Hudsonville.png'),
(97, 'ALKA', 'Beverage', 'This is pure natural water', 350, 'Alka.png'),
(98, 'Nescafe', 'Beverage', 'This is coffee powder.', 5600, 'Nescafe.jpg'),
(99, 'Starbuck', 'Beverage', 'This is cool coffee.', 4000, 'StarBuck.jpg'),
(100, 'Pocari Seat', 'Beverage', 'This is iron water.', 800, 'Pocari sweat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item2`
--

CREATE TABLE `item2` (
  `IID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Gmail` varchar(100) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Feedback` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item2`
--

INSERT INTO `item2` (`IID`, `Name`, `Gmail`, `Phone`, `Feedback`) VALUES
(71, 'May', 'maythet8tar@gmail.com', 2147483647, 'this is america'),
(72, 'May', 'maythet8tar@gmail.com', 2147483647, 'This is from waieew'),
(73, 'Win Win', 'winwin@gmail.com', 98654354, 'This is Win win');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(11) NOT NULL,
  `Full_Name` varchar(100) DEFAULT NULL,
  `Phone_No` bigint(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Pay_Mode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES
(1, 'May Thethtar Aung', 987557575, 'U nyo street, Sanchaung', 'COD'),
(2, 'Wai Wai Aung', 98288382, 'U Snayo ', 'COD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`IID`);

--
-- Indexes for table `item2`
--
ALTER TABLE `item2`
  ADD PRIMARY KEY (`IID`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `IID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `item2`
--
ALTER TABLE `item2`
  MODIFY `IID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
