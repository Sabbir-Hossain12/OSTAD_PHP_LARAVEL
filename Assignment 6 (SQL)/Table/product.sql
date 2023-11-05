CREATE TABLE Products (
    `product_id` INT(20) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `category_id` INT(20),
    `name` VARCHAR(255),
    `description` TEXT,
    `price` FLOAT(10, 2)

    Foreign Key (`category_id`) REFERENCES  `categories`(`category_id`)
);