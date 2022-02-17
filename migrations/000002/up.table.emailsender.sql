CREATE TABLE `emailsender` (
  `id` int NOT NULL AUTO_INCREMENT,
  `toName` varchar(150) DEFAULT NULL,
  `toEmail` varchar(150) DEFAULT NULL,
  `toQr` varchar(150) DEFAULT NULL,
  `toContent` text,
  `lang` varchar(5) DEFAULT NULL,
  `statusSent` tinyint(1) DEFAULT NULL,
  `sentTime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emailsender_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;