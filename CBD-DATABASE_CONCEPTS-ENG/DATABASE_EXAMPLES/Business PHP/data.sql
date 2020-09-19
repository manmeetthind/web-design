INSERT INTO `clients` (`id`, `name`, `contact`, `email`, `phone`)
VALUES (1, 'Western Gas', 'John Doe', 'john.doe@westerngas.com', '(123) 456-7890');

INSERT INTO `invoices` (`id`, `client`, `date_due`, `term`)
VALUES (1, 1, '2018-06-19 00:00:00', 'All totals are final and non-negotiable payments must be made by the specified due date with no exceptions. Mailed checks must be postmarked by the due date above.');

INSERT INTO `invoice_rows` (`invoice`, `name`, `quantity`, `rate`, `description`) VALUES
  (1, 'Sample Invoice Item 1', 3, 34, 'This is a sample invoice item. This is a sample invoice item. This is a sample invoice item.'),
  (1, 'Sample Invoice Item 2', 1, 122, 'This is a sample invoice item. This is a sample invoice item. This is a sample invoice item.'),
  (1, 'Sample Invoice Item 3', 3, 100, 'This is a sample invoice item. This is a sample invoice item. This is a sample invoice item.');

INSERT INTO `payments` (`invoice`,`amount`) VALUES (1, 100);
