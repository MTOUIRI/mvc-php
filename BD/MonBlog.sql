/* Testé sous MySQL 5.x */

drop table if exists T_COMMENTAIRE;
drop table if exists T_BILLET;
drop table if exists T_AUTEUR;

CREATE TABLE T_AUTEUR (
  `user_id` integer primary key auto_increment,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Table structure for table `t_billet`
--

create table T_BILLET (
  BIL_ID integer primary key auto_increment,
  BIL_DATE datetime not null,
  BIL_TITRE varchar(100) not null,
  BIL_CONTENU varchar(400) not null
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

--
-- Table structure for table `t_commentaire`
--

create table T_COMMENTAIRE (
  COM_ID integer primary key auto_increment,
  COM_DATE datetime not null,
  COM_AUTEUR varchar(100) not null,
  COM_CONTENU varchar(200) not null,
  BIL_ID integer not null,
  constraint fk_com_bil foreign key(BIL_ID) references T_BILLET(BIL_ID)
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

insert into T_BILLET(BIL_DATE, BIL_TITRE, BIL_CONTENU) values
(NOW(), 'Premier billet', 'Bonjour monde ! Ceci est le premier billet sur mon blog.');
insert into T_BILLET(BIL_DATE, BIL_TITRE, BIL_CONTENU) values
(NOW(), 'Au travail', 'Il faut enrichir ce blog dès maintenant.');

insert into T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID) values
(NOW(), 'A. Nonyme', 'Bravo pour ce début', 1);
insert into T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID) values
(NOW(), 'Moi', 'Merci ! Je vais continuer sur ma lancée', 1);