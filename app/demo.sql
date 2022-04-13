
CREATE DATABASE `demo_laravel` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
use `demo_laravel`
CREATE TABLE IF NOT EXISTS `categoris` (
  `id` INT primary key auto_increment,
  `name` VARCHAR(255),
   `status` tinyint(1) default '0'
) ENGINE = InnoDB;
