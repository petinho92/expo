CREATE TABLE `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `neptun` varchar(15) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `major` varchar(150) DEFAULT NULL,
  `semester` varchar(150) DEFAULT NULL,
  `programs` json DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `guid` varchar(36) DEFAULT NULL,
  `lang` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;