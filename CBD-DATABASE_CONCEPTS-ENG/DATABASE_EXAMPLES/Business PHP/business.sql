CREATE TABLE `clients` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `contact` TEXT NOT NULL ,
  `email` VARCHAR(255) NOT NULL ,
  `phone` VARCHAR(16) NOT NULL ,
  `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE `invoices` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `client` INT(11) NOT NULL ,
  `date_due` TIMESTAMP NOT NULL ,
  `term` TEXT NOT NULL ,
  `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE `invoice_rows` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `invoice` INT(11) NOT NULL ,
  `name` VARCHAR(255) NOT NULL ,
  `quantity` INT(11) NOT NULL ,
  `rate` INT(11) NOT NULL ,
  `description` TEXT NOT NULL ,
  `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

ALTER TABLE `invoice_rows` CHANGE `quantity` `quantity` DOUBLE(11,2) NOT NULL;
ALTER TABLE `invoice_rows` CHANGE `rate` `rate` DOUBLE(11,2) NOT NULL;

CREATE TABLE `payments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `invoice` INT(11) NOT NULL ,
  `amount` INT(11) NOT NULL ,
  `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

ALTER TABLE `payments` CHANGE `amount` `amount` DOUBLE(11,2) NOT NULL;
