
CRETAR DATABASE `aluno`;


DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `curso` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `imagem` text,
  PRIMARY KEY (`id`)
) 
