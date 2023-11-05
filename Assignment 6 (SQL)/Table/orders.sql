CREATE TABLE `orders` (
  `order id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `customer ID` int(10) UNSIGNED NOT NULL,
  `order date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total amount` float NOT NULL
  Foreign Key (`customer ID`) REFERENCES `customers` (`customer ID`)
);