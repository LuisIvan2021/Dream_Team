-- donde exista una db con el mismo nombre la elimina
drop schema if exists `test_php`;

-- se crear la DB 
create schema  if not exists `test_php` default  character set utf8 collate  utf8_spanish2_ci;
USE `test_php`; 

-- Se crea la tabla
CREATE TABLE `persona`(
    `numero` INT(11) NOT NULL AUTO_INCREMENT,  
    `nombre_usuario` TEXT NOT NULL,
    `no_cuenta` INT(10) NOT NULL,
    `telefono` VARCHAR(8) NOT NULL,
    `email` TEXT NOT NULL,
    `password` VARCHAR(8) NOT NULL,
    `fecha_registro` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`numero`)
) engine=Innodb default charset=utf8;

-- Inserciones en la tabla 'persona'
INSERT INTO `persona`(`nombre_usuario`, `no_cuenta`, `telefono`, `email`, `password`)
VALUES ('Aaron Velasco', '413112576', '5612315', 'aaron@gmail.com', '123456');

INSERT INTO `persona`(`nombre_usuario`, `no_cuenta`, `telefono`, `email`, `password`, `fecha_registro`)
VALUES ('Aaron Velasco', '413112576', '5612315', 'aaron@gmail.com', '123456', '2020-05-12 17:40:00');

INSERT INTO `persona`(`nombre_usuario`, `no_cuenta`, `telefono`, `email`, `password`, `fecha_registro`)
VALUES ('Aaron Velasco', '413112576', '5612315', 'aaron@gmail.com', '123456', '2020-05-13 17:40:00');

