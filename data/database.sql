-- Creación de la base de datos

-- Creación de la tabla de dulces
CREATE TABLE dulces (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  precio DECIMAL(5,2) NOT NULL,
  PRIMARY KEY (id)
);

-- Creación de la tabla de compras
CREATE TABLE compras_productos (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    detalle VARCHAR(255) NOT NULL,
    total DECIMAL(5,2) NOT NULL,
    fecha DATETIME NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE usuarios (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE direcciones (
    username INT(100) NOT NULL,
    edificio VARCHAR(30) NOT NULL,
    salon INT NOT NULL,
    planta VARCHAR(255) NOT NULL
);

