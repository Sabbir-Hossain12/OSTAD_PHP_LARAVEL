CREATE TABLE `customers` (
  `customer ID` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `location` varchar(80) NOT NULL
);