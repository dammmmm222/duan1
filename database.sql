CREATE TABLE `categories` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `categories_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
);

CREATE TABLE `detail_order` (
  `id` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `quanlity` varchar(255) DEFAULT NULL
);

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `ship_address` varchar(255) DEFAULT NULL,
  `ship_name_user` varchar(255) DEFAULT NULL,
  `ship_phone_user` varchar(255) DEFAULT NULL,
  `pttt` tinyint(4) DEFAULT NULL
);

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_categories` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `view` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL
);

CREATE TABLE `product_rev` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `stars` tinyint(4) DEFAULT NULL
);

CREATE TABLE `role` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `name` varchar(255) DEFAULT NULL
);

CREATE TABLE `save` (
  `id_user` int(11) DEFAULT NULL,
  `id_voucher` int(11) DEFAULT NULL
);

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size` int DEFAULT NULL,
  `color` int DEFAULT NULL
);

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
);

CREATE TABLE `voucher` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `quanlity` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL
);

CREATE TABLE `size` (
  `id_size` int PRIMARY KEY AUTO_INCREMENT,
  `size` int
);

CREATE TABLE `color` (
  `id_color` int PRIMARY KEY AUTO_INCREMENT,
  `color` varchar(255)
);

ALTER TABLE `order` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

ALTER TABLE `product` ADD FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);

ALTER TABLE `type` ADD FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

ALTER TABLE `user` ADD FOREIGN KEY (`role`) REFERENCES `role` (`id`);

ALTER TABLE `save` ADD FOREIGN KEY (`id_voucher`) REFERENCES `voucher` (`id`);

ALTER TABLE `save` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

ALTER TABLE `product_rev` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

ALTER TABLE `product_rev` ADD FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

ALTER TABLE `detail_order` ADD FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

ALTER TABLE `detail_order` ADD FOREIGN KEY (`id_product`) REFERENCES `order` (`id`);

ALTER TABLE `type` ADD FOREIGN KEY (`size`) REFERENCES `size` (`id_size`);

ALTER TABLE `type` ADD FOREIGN KEY (`color`) REFERENCES `color` (`id_color`);
