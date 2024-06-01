# gis
 
env ให้แก้เป็น .env ด้วย

ใช้ docker ในการเชื่อม กับ mysql

แนะนำให้โหลด https://tableplus.com/download

และใช้ docker compose up -d --build 

password docker อยู่ในไฟล์ docker-compose.yml 

mysql 

database = gis

CREATE TABLE `tb_profiles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prefix` enum('นาย','นาง','นางสาว') NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `card_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `birthdate` varchar(15) NOT NULL,
  `disease` enum('ผู้สูงอายุไม่มีโรคประจำตัว','ผู้สูงอายุมีโรคประจำตัว') NOT NULL,
  `disease_details` varchar(30) DEFAULT NULL,
  `succor` enum('ผู้สูงอายุช่วยเหลือตัวเองไม่ได้','ผู้สูงอายุช่วยเหลือตัวเองได้') NOT NULL,
  `relative` enum('ผู้สูงอายุมีญาติ','ผู้สูงอายุไม่มีญาติ') NOT NULL,
  `caretaker` varchar(20) DEFAULT NULL,
  `medicines` varchar(30) DEFAULT NULL,
  `coordinates` varchar(255) DEFAULT NULL,
  `file_image` varchar(100) NOT NULL,
  `camera_image` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

