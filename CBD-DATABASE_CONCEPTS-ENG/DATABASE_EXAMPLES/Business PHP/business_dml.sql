--
-- Invoices
--
SELECT
`name`,
`contact`,
`phone`,
`email`,
`date_due`,
`term`,
`invoices`.`date_created`
FROM `invoices`
JOIN `clients`
ON `invoices`.`client`=`clients`.`id`
WHERE `invoices`.`id` = 1


--
-- Invoice Items
--
SELECT
  `id`,
  `name`,
  `quantity`,
  `rate`,
  `quantity` * `rate` AS `subtotal`,
  `description`
FROM `invoice_rows`
WHERE `invoice` = 1;


--
-- Invoice Summary
--
SELECT 'Total' AS `label`, SUM(`quantity` * `rate`) AS `total`
FROM `invoice_rows`
WHERE `invoice` = 1
UNION
SELECT 'Payments' AS `label`, SUM(`amount`) AS `total`
FROM `payments`
WHERE `invoice` = 1
