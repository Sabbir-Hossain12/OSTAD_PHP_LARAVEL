
SELECT
  `p`.`name`,
  `oi`.`quantity`,
  `oi`.`quantity` * `oi`.`unit_price` AS `total_amount`
FROM `orders` `o`
INNER JOIN `order_items` `oi` ON `o`.`order id` = `oi`.`order_id`
INNER JOIN `products` `p` ON `oi`.`product_id` = `p`.`product_id`
ORDER BY `o`.`order id` ASC;