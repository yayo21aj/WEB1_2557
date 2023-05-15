DROP SCHEMA IF EXISTS `proyecto_web`;
CREATE SCHEMA IF NOT EXISTS `proyecto_web` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

USE `proyecto_web`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (1, 'Pedro', 'pedro@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (2, 'Sir Francis', 'francis@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (3, 'Yayo', 'yayo@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (4, 'William', 'william@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (5, 'Charles', 'charles@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (6, 'Erick', 'erick@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (7, 'Juan115', 'juan@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (8, 'Sinna', 'sina@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (9, 'Paramo', 'paramo@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (10, 'George', 'george@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (11, 'Nose', 'nose@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (12, 'Tacosdevapor', 'taco@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (13, 'Paydelimón', 'pay@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (14, 'Jijija', 'jijija@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (15, 'James', 'james@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (16, 'Jones', 'jones@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (17, 'Tenoch', 'tenoch@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (18, 'Salado', 'salado@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (19, 'Chicledepan', 'chicle@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (20, 'Lola', 'lola@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (21, 'Generico0', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (22, 'Generico1', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (23, 'Generico2', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (24, 'Generico3', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (25, 'Generico4', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (26, 'Generico5', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (27, 'Generico6', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (28, 'Generico7', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (29, 'Generico8', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (30, 'Generico9', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (31, 'Generico10', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (32, 'Generico11', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (33, 'Generico12', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (34, 'Generico13', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (35, 'Generico14', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (36, 'Generico15', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (37, 'Generico16', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (38, 'Generico17', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (39, 'Generico18', 'generico@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `email`, `password`)  VALUES (40, 'Generico19', 'generico@gmail.com', '123456');