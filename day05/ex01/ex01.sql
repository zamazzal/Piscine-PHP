create table ft_table ( `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT, `login` varchar(255) NOT NULL DEFAULT 'toto', `group` ENUM('staff', 'student', 'other') NOT NULL, `creation_date` DATE NOT NULL);
