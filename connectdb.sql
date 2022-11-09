

SET time_zone = "+00:00";



    DROP TABLE IF EXISTS `users`;
    CREATE TABLE IF NOT EXISTS `users` (
    `PK_USER` bigint pk AUTO_INCREMENT,
    `S_EMAIL` varchar(250),
    `S_PASSWORD` varchar(250),
    `D_DATE_ADD` date,
    `B_ACTIF` Boolean,
    `D_DATE_NAISSANCE` date,
    )ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
