CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `direcciones` (
  `direccion_id` int(11) NOT NULL AUTO_INCREMENT,
  `edificio` varchar(50) NOT NULL,
  `salon` varchar(50) NOT NULL,
  `planta` varchar(50) NOT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`direccion_id`),
  KEY `fk_usuario_id` (`usuario_id`),
  CONSTRAINT `fk_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE compras (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  usuario_id INT(11) NOT NULL,
  direccion_id INT(11) NOT NULL,
  direccion VARCHAR(255) NOT NULL,
  detalle varchar(255) NOT NULL,
  total decimal(5,2) NOT NULL,
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  alert varchar(255) NOT NULL,
  estatus varchar(50) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

