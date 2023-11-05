SELECT `c`.`name` AS `category_name`, SUM(`oi`.`quantity` * `oi`.`unit_price`) AS `total_revenue`
FROM `categories` `c`
LEFT JOIN `products` `p` ON `c`.`category_id` = `p`.`category_id`
LEFT JOIN `order_items` `oi` ON `p`.`product_id` = `oi`.`product_id`
GROUP BY `c`.`category_id`
ORDER BY `total_revenue` DESC;