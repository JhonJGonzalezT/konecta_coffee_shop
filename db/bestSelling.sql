SELECT `P`.`id` AS 'Id',
	`productName` AS 'Nombre',
	`productRef` AS 'Referencia',
	`price` AS 'Precio Unitario',
	`weight` AS 'Peso (kg)',
	`category` AS 'Categoria',
	`stock` AS 'Stock en Bodega',
	`quantity` AS 'Unidades Vendidas'
FROM `konecta_coffee_shop`.`products` AS `P`
INNER JOIN `konecta_coffee_shop`.`sales` AS `S`
	ON `P`.`id` = `S`.`product_id`
ORDER BY `quantity` DESC
LIMIT 1;
