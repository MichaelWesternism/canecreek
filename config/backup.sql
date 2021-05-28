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




DROP TABLE comments;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `riderlog` varchar(255) NOT NULL,
  `rldate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

INSERT INTO comments VALUES("1","4","Heimdall","it goes ring adingaling a ling maling faling and annoys all my neighbors. 10/10 would buy again.","2021-05-20 15:16:56");
INSERT INTO comments VALUES("2","4","Maddy","yo maamamasdflkasdfaihsfsaoidhfsadfsdafsadf","2021-05-20 15:29:23");
INSERT INTO comments VALUES("3","2","Admin","dasdfkjashfsaefasdfasdf","2021-05-20 16:37:26");
INSERT INTO comments VALUES("4","4","Lisa","asdabsgradgafsda fesf  sadf asdfsdf","2021-05-20 16:37:26");
INSERT INTO comments VALUES("5","4","Admin","This bell is the best bell of all bells and I just want to lube it up and shove it up my tight asshole","2021-05-21 13:17:24");
INSERT INTO comments VALUES("6","4","Admin","checking redirect
","2021-05-21 13:19:02");
INSERT INTO comments VALUES("7","4","Admin","checking redirect
","2021-05-21 13:19:37");
INSERT INTO comments VALUES("8","4","Admin","checking redirect
","2021-05-21 13:20:31");
INSERT INTO comments VALUES("9","3","Maddy","Sometimes I like to put kittens in blenders","2021-05-21 13:26:16");
INSERT INTO comments VALUES("10","7","Maddy","this crank is the most fantastic crank of all cranks","2021-05-21 13:47:45");
INSERT INTO comments VALUES("11","8","Admin","I love this large black crank. 10/10 would sit again","2021-05-21 14:45:17");
INSERT INTO comments VALUES("12","6","Admin","Sat on seatpost, would recommend, seatpost felt amazing, orgasmic, while sitting on. ill take three","2021-05-24 10:05:01");
INSERT INTO comments VALUES("13","9","Admin","comment database backup test","2021-05-24 10:55:23");
INSERT INTO comments VALUES("14","9","Admin","COMMENT BACKUP TEST","2021-05-24 10:59:31");
INSERT INTO comments VALUES("15","10","Admin","comment backup test","2021-05-24 10:59:45");
INSERT INTO comments VALUES("16","1","Admin","backup test","2021-05-24 11:01:43");
INSERT INTO comments VALUES("17","1","Admin","backup test","2021-05-24 11:01:56");
INSERT INTO comments VALUES("18","9","Admin","echo $_SERVER[\'SERVER_NAME\']","2021-05-24 13:28:07");
INSERT INTO comments VALUES("21","5","Admin","This one needs a comment","2021-05-24 13:43:09");
INSERT INTO comments VALUES("22","1","Maddy","javascript test","2021-05-24 16:48:50");
INSERT INTO comments VALUES("23","12","Maddy","test comment","2021-05-24 16:51:23");
INSERT INTO comments VALUES("24","6","Maddy","comment
","2021-05-24 18:36:08");
INSERT INTO comments VALUES("25","666","Admin","I can see my dead grandmother with these headphones","2021-05-27 21:33:22");
INSERT INTO comments VALUES("26","666","Maddy","this is a sexy comment","2021-05-27 21:39:28");
INSERT INTO comments VALUES("27","333","Admin","comment test 333","2021-05-27 23:53:30");
INSERT INTO comments VALUES("28","333","Admin","comment test 333 2","2021-05-27 23:53:38");



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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

INSERT INTO parts VALUES("3","111","Maddy","asdflkj sdf","erect penis d sdf","Shocks","big hard erect rooster sdfsdf","2021-05-19 18:14:31");
INSERT INTO parts VALUES("19","666","Admin","x675309t 27","Rainbow Headset","Shocks","666","2021-05-27 23:45:31");
INSERT INTO parts VALUES("20","333","Admin","x675309t 27","Rainbow Headset 27","Shocks","333","2021-05-27 23:52:14");
INSERT INTO parts VALUES("21","aaa","Admin","x675309t 27","Rainbow Headset","Shocks","aaa","2021-05-27 23:52:25");



