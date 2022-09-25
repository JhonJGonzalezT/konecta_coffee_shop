SELECT `id`,
    `productName`,
    `productRef`,
    `price`,
    `weight`,
    `category`,
    `stock`,
    `createdAt`
FROM `konecta_coffee_shop`.`products`
ORDER BY `stock`
DESC LIMIT 1;