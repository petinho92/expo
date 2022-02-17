CREATE TABLE `eventacs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(30) DEFAULT NULL,
  `room` varchar(30) DEFAULT NULL,
  `phase` varchar(100) DEFAULT NULL,
  `qrcode` varchar(150) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventacs_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;