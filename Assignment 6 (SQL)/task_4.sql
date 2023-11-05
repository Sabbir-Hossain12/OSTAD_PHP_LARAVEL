
SELECT `customers`.`name` AS `Customer Name`, SUM(`order_items`.quantity*`order_items`.`unit_price`) AS `Total_purchase_amount`
FROM `customers`
LEFT JOIN `orders`
ON `customers`.`customer ID`= `orders`.`customer ID`
LEFT JOIN `order_items`
ON `orders`.`order id`= `order_items`.`order_id`
GROUP BY `customers`.`customer ID`
ORDER BY `total_Purchase_Amount` DESC
LIMIT 5;