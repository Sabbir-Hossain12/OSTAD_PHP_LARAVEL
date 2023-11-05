SELECT
    `c`.`customer ID`,`c`.`name`,`c`.`email`,`c`.`location`,
    COUNT(`o`.`order id`) AS `total_orders`
FROM
    `customers` `c`
LEFT JOIN
    `orders` `o`
ON
    `c`.`customer ID` = `o`.`customer ID`
GROUP BY
    `c`.`customer ID`, `c`.`name`, `c`.`email`
ORDER BY
    `total_orders` DESC;