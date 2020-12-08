Database name: diagnostic

Table code:

CREATE TABLE `profile` (
 `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
 `doctor_name` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 `mobile` varchar(20) NOT NULL,
 `specialization` varchar(255) NOT NULL,
 `image` longblob NOT NULL,
 `username` varchar(255) NOT NULL,
 `password` varchar(255) NOT NULL,
 PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4
