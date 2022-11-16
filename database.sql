CREATE TABLE `user` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_name` varchar(255),
  `full_name` varchar(255),
  `email` varchar(255),
  `phone` varchar(12),
  `address` varchar(255),
  `role` int
);

CREATE TABLE `product` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_categories` int,
  `product_name` varchar(255),
  `product_price` int,
  `description` text,
  `view` varchar(255),
  `image` varchar(255)
);

CREATE TABLE `type` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `product_id` int,
  `size` varchar(255),
  `color` varchar(255)
);

CREATE TABLE `role` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `categories` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `categories_name` varchar(255),
  `image` varchar(255)
);

CREATE TABLE `order` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_user` int,
  `total` int,
  `time` datetime
);

CREATE TABLE `voucher` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `quanlity` varchar(255),
  `content` varchar(255),
  `discount` int
);

CREATE TABLE `save` (
  `id_user` int,
  `id_voucher` int
);

CREATE TABLE `detail_order` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_product` int,
  `id_order` int,
  `quanlity` varchar(255)
);

CREATE TABLE `product_rev` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_user` int,
  `id_product` int,
  `stars` tinyint
);

ALTER TABLE `order` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

ALTER TABLE `product` ADD FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);

ALTER TABLE `save` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

ALTER TABLE `save` ADD FOREIGN KEY (`id_voucher`) REFERENCES `voucher` (`id`);

ALTER TABLE `detail_order` ADD FOREIGN KEY (`id_order`) REFERENCES `order` (`id`);

ALTER TABLE `detail_order` ADD FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

ALTER TABLE `product_rev` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

ALTER TABLE `product_rev` ADD FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

ALTER TABLE `user` ADD FOREIGN KEY (`role`) REFERENCES `role` (`id`);

ALTER TABLE `type` ADD FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
