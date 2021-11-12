-- Adminer 4.8.1 MySQL 8.0.27-0ubuntu0.20.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `autor`;
CREATE TABLE `autor` (
  `ID_titul` int unsigned NOT NULL,
  `diskriminant` int unsigned NOT NULL AUTO_INCREMENT,
  `meno` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `priezvisko` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`diskriminant`,`ID_titul`),
  KEY `ID_titul` (`ID_titul`),
  CONSTRAINT `autor_ibfk_1` FOREIGN KEY (`ID_titul`) REFERENCES `titul` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `autor`;
INSERT INTO `autor` (`ID_titul`, `diskriminant`, `meno`, `priezvisko`) VALUES
(3,	9,	'Jan',	'Nepomuk'),
(3,	10,	'Vladim',	'Skočdopolovič'),
(4,	11,	'Soundruh',	'Omáčka'),
(5,	12,	'Jardrda',	'Mlátička'),
(3,	13,	'Vladimirovič',	'Sokolovič');

DROP TABLE IF EXISTS `hlas`;
CREATE TABLE `hlas` (
  `ID_uzivatel` varchar(48) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ID_titul` int unsigned NOT NULL,
  PRIMARY KEY (`ID_uzivatel`,`ID_titul`),
  KEY `ID_titul` (`ID_titul`),
  CONSTRAINT `hlas_ibfk_1` FOREIGN KEY (`ID_uzivatel`) REFERENCES `uzivatel` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `hlas_ibfk_2` FOREIGN KEY (`ID_titul`) REFERENCES `titul` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `hlas`;

DROP TABLE IF EXISTS `kniha`;
CREATE TABLE `kniha` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `ID_titul` int unsigned NOT NULL,
  `ID_knihovna` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `stav` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ID_titul`,`ID`),
  KEY `ID` (`ID`),
  KEY `ID_knihovna` (`ID_knihovna`),
  CONSTRAINT `kniha_ibfk_3` FOREIGN KEY (`ID_titul`) REFERENCES `titul` (`ID`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `kniha_ibfk_4` FOREIGN KEY (`ID_knihovna`) REFERENCES `knihovna` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `kniha`;
INSERT INTO `kniha` (`ID`, `ID_titul`, `ID_knihovna`, `stav`) VALUES
(1,	3,	'knihovna a',	''),
(4,	3,	'knihovna a',	''),
(5,	3,	'knihovna a',	''),
(6,	3,	'knihovna a',	''),
(8,	3,	'knihovna a',	''),
(9,	3,	'knihovna a',	''),
(10,	3,	'knihovna a',	''),
(16,	3,	'knihovna b',	''),
(17,	3,	'knihovna b',	''),
(11,	4,	'knihovna a',	''),
(12,	4,	'knihovna a',	''),
(13,	4,	'knihovna a',	''),
(18,	4,	'knihovna b',	''),
(19,	4,	'knihovna b',	''),
(14,	5,	'knihovna a',	''),
(20,	5,	'knihovna b',	''),
(23,	6,	'knihovna c',	'poškozený'),
(24,	6,	'knihovna a',	'poškozený');

DROP TABLE IF EXISTS `knihovna`;
CREATE TABLE `knihovna` (
  `ID` varchar(255) CHARACTER SET utf8 NOT NULL,
  `popis` varchar(2048) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adresa` varchar(512) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `oteviraci_doba` varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_as_ci;

TRUNCATE `knihovna`;
INSERT INTO `knihovna` (`ID`, `popis`, `adresa`, `oteviraci_doba`) VALUES
('knihovna a',	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Quisque tincidunt scelerisque libero. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aliquam in lorem sit amet leo accumsan lacinia. Etiam neque. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Nullam faucibus mi quis velit. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Curabitur vitae diam non enim vestibulum interdum. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.',	'Brno, Kosova 523',	'po-ut 8:00-10:00'),
('knihovna b',	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Quisque tincidunt scelerisque libero. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aliquam in lorem sit amet leo accumsan lacinia. Etiam neque. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Nullam faucibus mi quis velit. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Curabitur vitae diam non enim vestibulum interdum. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.',	'Brno, Antoniska 523',	'po-ut 8:00-11:00'),
('knihovna c',	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Quisque tincidunt scelerisque libero. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aliquam in lorem sit amet leo accumsan lacinia. Etiam neque. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Nullam faucibus mi quis velit. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Curabitur vitae diam non enim vestibulum interdum. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.',	'Brno, Zahonova 523',	'po-st 8:00-11:00 , ');

DROP TABLE IF EXISTS `objednavka`;
CREATE TABLE `objednavka` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `ID_knihovna` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `stav` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `datum_zalozenia` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `ID_knihovna` (`ID_knihovna`),
  CONSTRAINT `objednavka_ibfk_1` FOREIGN KEY (`ID_knihovna`) REFERENCES `knihovna` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `objednavka`;

DROP TABLE IF EXISTS `polozka_objednavky`;
CREATE TABLE `polozka_objednavky` (
  `ID_objednavka` int unsigned NOT NULL,
  `ID_titul` int unsigned NOT NULL,
  `mnozstvi` int unsigned NOT NULL,
  PRIMARY KEY (`ID_objednavka`,`ID_titul`),
  KEY `ID_titul` (`ID_titul`),
  CONSTRAINT `polozka_objednavky_ibfk_4` FOREIGN KEY (`ID_objednavka`) REFERENCES `objednavka` (`ID`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `polozka_objednavky_ibfk_5` FOREIGN KEY (`ID_titul`) REFERENCES `titul` (`ID`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `polozka_objednavky`;

DROP TABLE IF EXISTS `rezervace`;
CREATE TABLE `rezervace` (
  `ID_titul` int unsigned NOT NULL,
  `ID_uzivatel` varchar(48) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ID_knihovna` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `datum_podani` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_uzivatel`,`ID_titul`),
  KEY `ID_titul` (`ID_titul`),
  KEY `ID_knihovna` (`ID_knihovna`),
  CONSTRAINT `rezervace_ibfk_1` FOREIGN KEY (`ID_titul`) REFERENCES `titul` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `rezervace_ibfk_2` FOREIGN KEY (`ID_uzivatel`) REFERENCES `uzivatel` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `rezervace_ibfk_3` FOREIGN KEY (`ID_knihovna`) REFERENCES `knihovna` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `rezervace`;

DROP TABLE IF EXISTS `titul`;
CREATE TABLE `titul` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `nazov` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `popis` varchar(2048) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `vydavatelstvo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `zanry` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tagy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `titul`;
INSERT INTO `titul` (`ID`, `nazov`, `popis`, `vydavatelstvo`, `zanry`, `tagy`) VALUES
(3,	'Kniha všech knih',	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Quisque tincidunt scelerisque libero. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aliquam in lorem sit amet leo accumsan lacinia. Etiam neque. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Nullam faucibus mi quis velit. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Curabitur vitae diam non enim vestibulum interdum. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.  Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Aenean id metus id velit ullamcorper pulvinar. Etiam commodo dui eget wisi. Aliquam ornare wisi eu metus. Curabitur vitae diam non enim vestibulum interdum. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Fusce tellus. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Duis viverra diam non justo. Cras elementum. Praesent vitae arcu tempor neque lacinia pretium. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Integer lacinia.',	'Vydavatelství a',	'akční, drama, horor',	'#naJenise, #topseler'),
(4,	'Nemám rád pondělí',	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Quisque tincidunt scelerisque libero. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aliquam in lorem sit amet leo accumsan lacinia. Etiam neque. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Nullam faucibus mi quis velit. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Curabitur vitae diam non enim vestibulum interdum. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.  Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Aenean id metus id velit ullamcorper pulvinar. Etiam commodo dui eget wisi. Aliquam ornare wisi eu metus. Curabitur vitae diam non enim vestibulum interdum. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Fusce tellus. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Duis viverra diam non justo. Cras elementum. Praesent vitae arcu tempor neque lacinia pretium. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Integer lacinia.',	'Vydavatelství b',	'akční, drama, horor',	'#naJenise'),
(5,	'Nemám rád ani úterý',	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Quisque tincidunt scelerisque libero. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aliquam in lorem sit amet leo accumsan lacinia. Etiam neque. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Nullam faucibus mi quis velit. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Curabitur vitae diam non enim vestibulum interdum. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.  Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Aenean id metus id velit ullamcorper pulvinar. Etiam commodo dui eget wisi. Aliquam ornare wisi eu metus. Curabitur vitae diam non enim vestibulum interdum. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Fusce tellus. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Duis viverra diam non justo. Cras elementum. Praesent vitae arcu tempor neque lacinia pretium. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Integer lacinia.',	'Vydavatelství a',	'drama',	'#this'),
(6,	'Nemám rád ani středu',	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Quisque tincidunt scelerisque libero. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aliquam in lorem sit amet leo accumsan lacinia. Etiam neque. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Nullam faucibus mi quis velit. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Curabitur vitae diam non enim vestibulum interdum. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.  Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Aenean id metus id velit ullamcorper pulvinar. Etiam commodo dui eget wisi. Aliquam ornare wisi eu metus. Curabitur vitae diam non enim vestibulum interdum. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Fusce tellus. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Duis viverra diam non justo. Cras elementum. Praesent vitae arcu tempor neque lacinia pretium. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Integer lacinia.',	'Vydavatelství c',	'komedie',	'#omgKniha');

DROP TABLE IF EXISTS `uzivatel`;
CREATE TABLE `uzivatel` (
  `ID` varchar(48) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `heslo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role` varchar(20) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL DEFAULT 'registrated',
  `meno` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `priezvisko` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `telefon` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `mesto` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ulice` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `psc` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `uzivatel`;

DROP TABLE IF EXISTS `vypujcka`;
CREATE TABLE `vypujcka` (
  `ID_kniha` int unsigned NOT NULL,
  `ID_uzivatel` varchar(48) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `diskriminant` int NOT NULL AUTO_INCREMENT,
  `stav` varchar(16) NOT NULL DEFAULT 'rezervovano',
  `prodlouzeni` tinyint NOT NULL DEFAULT '0',
  `datum_vytvoreno` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `datum_vydano` datetime DEFAULT NULL,
  `datum_vraceno` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_kniha`,`ID_uzivatel`,`diskriminant`),
  KEY `ID_uzivatel` (`ID_uzivatel`),
  KEY `diskriminant` (`diskriminant`),
  CONSTRAINT `vypujcka_ibfk_1` FOREIGN KEY (`ID_uzivatel`) REFERENCES `uzivatel` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `vypujcka_ibfk_2` FOREIGN KEY (`ID_kniha`) REFERENCES `kniha` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `vypujcka`;

-- 2021-11-12 23:12:52
