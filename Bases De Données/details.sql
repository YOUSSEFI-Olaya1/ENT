drop database if exists ent;
create database if not exists ent;
use ent;

CREATE TABLE `files` (
  `id_file` int(11) NOT NULL auto_increment,
  `f_name` varchar(40) NOT NULL default '',
  `login` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id_file`)
) ;




CREATE TABLE `mail` (
  `id_msg` int(11) NOT NULL auto_increment,
  `login` varchar(20) NOT NULL default '',
  `l_dest` varchar(20) NOT NULL default '',
  `subject` varchar(20) NOT NULL default '',
  `data` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id_msg`)
) ;


CREATE TABLE `partage` (
  `id_partage` int(11) NOT NULL auto_increment,
  `id_file` int(11) NOT NULL default '0',
  `login` varchar(20) NOT NULL default '',
  `date` date NOT NULL ,
  UNIQUE KEY `id_partage` (`id_partage`)
) ;




create table utilisateur(
    iduser int(4) auto_increment primary key,
    login varchar(50),
    email varchar(255),
    role varchar(50),   -- admin ou visiteur
    etat int(1),  -- 1:activé 0:desactivé
     `nlm` int(11) default '0',
  `ncm` int(11) default '0',
    pwd varchar(255) 
);






		
	
INSERT INTO utilisateur(login,email,role,etat,pwd) VALUES 
    ('admin','admin@gmail.com','ADMIN',1,md5('123'))
;




select * from utilisateur;




