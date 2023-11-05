CREATE TABLE `Order_Items` (
    `order_item_id` INT PRIMARY KEY AUTO INCREMENT AUTO_INCREMENT,
    `order_id` int(20) UNSIGNED NOT NULL,
    `product_id` INT NOT NULL,
    `quantity` INT,
    `unit_price` DECIMAL(10, 2),
    FOREIGN KEY (`order_id`) REFERENCES `Orders`(`order id`),
    FOREIGN KEY (`product_id`) REFERENCES `Products`(`product_id`)
);