use pecabot;
drop table if exists `fishingrod`;
CREATE TABLE if not EXISTS `fishingrod` (
  `fr_ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `typ_ID` int(11) NOT NULL ,
  `pic` varchar(50) NOT NULL,
   PRIMARY KEY(`fr_ID`)
);

drop table if exists `type`;
CREATE TABLE if not EXISTS `type` (
  `t_id` int(11) NOT NULL,
  `m_name` varchar(50) NOT NULL,
    PRIMARY KEY(`t_id`)
);

INSERT INTO `fishingrod` (`name`, `typ_ID`, `pic`) VALUES
('CARP HUNTER PLUS FEEDER 360 cm 40-80G', 4, '/pic/federhunter'),
('SENSAS FEEDER Prima 3,3m 100g ', 4, '/pic/federSensa'),
('CARP ZOOM Force Telematch, 395 cm, 10-80 g, 5 rész', 3, '/pic/forcetelemach'),
('Delphin LEGIA Match-390cm 30g', 3, '/pic/Delphmatch'),
('Trabucco Dream Team RPL Power Carp 7806 & TK2', 1, '/pic/Trab'),
('Delphin WASABI Spin  2 rézs-210cm 10-30g', 6, '/pic/DelpWasa'),
('KONGER Kastmaster Jig Drop Shot 244cm 3-18g', 6, '/pic/KongKast');

INSERT INTO `type` (`t_id`, `m_name`) VALUES
(1, 'rakós'),
(2, 'bolognai'),
(3, 'Match'),
(4, 'Feeder'),
(5, 'Spicc'),
(6, 'Pergető');