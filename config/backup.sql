DROP TABLE archive;

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `qr` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pcategory` varchar(255) NOT NULL,
  `pdescription` varchar(255) NOT NULL,
  `ptime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO archive VALUES("30","3456","Admin","asdfasdf","Testing Archive","Shocks","This is an archived part","2021-05-29 12:45:39");
INSERT INTO archive VALUES("31","456","Admin","34sgdfvg","This is a part","Shocks","This is an archive part with comments","2021-05-29 12:46:40");



DROP TABLE comments;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `riderlog` varchar(255) NOT NULL,
  `rldate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

INSERT INTO comments VALUES("35","xycma 206","Admin","This headset is pink and fuzzy","2021-05-29 12:28:52");
INSERT INTO comments VALUES("36","8675309","Admin","These shocks are super strong","2021-05-29 12:29:16");
INSERT INTO comments VALUES("37","8675309","Admin","These shocks
need some 
extra grease","2021-05-29 12:29:36");
INSERT INTO comments VALUES("38","tymca3","Admin","These forks are great and all, but hard to eat pasta with","2021-05-29 12:42:17");
INSERT INTO comments VALUES("39","tymca3","Admin","some extra comment","2021-05-29 12:42:30");
INSERT INTO comments VALUES("40","tymca3","Admin","third comment","2021-05-29 12:42:37");
INSERT INTO comments VALUES("41","tymca3","Admin","fourth comment","2021-05-29 12:42:47");
INSERT INTO comments VALUES("42","any qr code i want","Admin","its shiny","2021-05-29 12:44:27");
INSERT INTO comments VALUES("43","456","Admin","comments","2021-05-29 12:46:37");
INSERT INTO comments VALUES("44","xycma 6","Admin","extra comment","2021-09-24 00:59:03");



DROP TABLE login;

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO login VALUES("1","Admin","michaelwesternism@gmail.com","$2y$10$JlhmHWBnc6Tpg6ojVLkHBuIPoVL.513bPpWVVDWfCsKg9G.0DO6ae");
INSERT INTO login VALUES("2","Maddy","maddog2020@gangstamail.com","$2y$10$NjUFspCGK1XOMyU6hIL7oeRlqcSGh/plK4kxMEjejGvKyi3xkZb2y");



DROP TABLE parts;

CREATE TABLE `parts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qr` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pcategory` varchar(255) NOT NULL,
  `pdescription` varchar(255) NOT NULL,
  `ptime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

INSERT INTO parts VALUES("24","xycma 6","Admin","XYZ#$%","Pink Headset","Headsets","This headset is pink","2021-05-29 12:27:35");
INSERT INTO parts VALUES("25","8675309","Admin","TYU#34%","Beefy Shocks","Shocks","Extra wide shocks","2021-05-29 12:28:41");
INSERT INTO parts VALUES("26","tymca3","Admin","TYA6%#$","Silver Forks","Forks","This is a description ","2021-05-29 12:30:36");
INSERT INTO parts VALUES("29","any qr code i want","Admin","ABCDEFG","Aluminum Seat Post","Seat Posts","Seat post made out of aluminum","2021-05-29 12:44:13");
INSERT INTO parts VALUES("32","This is A Qr code 839","Admin","8675301","Shiny New Part","Cranks","description","2021-09-24 01:06:03");



