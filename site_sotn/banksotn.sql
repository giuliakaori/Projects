/*Criar uma database com nome 'users' para o banco funcionar*/

DROP DATABASE iF exists SOTNusers;

CREATE DATABASE if not exists SOTNusers;

USE SOTNusers;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `mensagem` varchar(500) DEFAULT NULL,
  `token` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
);


CREATE TABLE `adm` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_nome` varchar(50) NOT NULL,
  `adm_email` varchar(50) NOT NULL,
  `adm_senha` varchar(50) NOT NULL,
  `adm_last_logout` datetime DEFAULT NULL,
  PRIMARY KEY (`adm_id`)
);

INSERT INTO usuarios(nome, email, senha, created, token) VALUES ('Luiki Tavares', 'luiki220@gmail.com','123456','2019-04-05 00:00:00', 'dc6b11ae9e504137b483944e70f53e42076ba3e7431f7bd07d');

INSERT INTO usuarios(nome, email,senha, created, token) VALUES ('Kaori Nakamashi', 'giulianakamashi@hotmail.com','654321','2019-04-05 00:01:00','aafd602e6af76ab359685bbcd89b1c063df6f430045cf70b52');

INSERT INTO adm(adm_nome, adm_email, adm_senha) VALUES ('Adrian Tepes', 'genya@arikado.com','alucard');