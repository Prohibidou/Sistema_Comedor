-- Creación de la tabla Cliente
CREATE TABLE Cliente (
    dni_cliente INT PRIMARY KEY,
    nombre_cliente VARCHAR(50),
    apellido_cliente VARCHAR(50)
);

-- Creación de la tabla Pedido
CREATE TABLE Pedido (
    id_pedido INT PRIMARY KEY AUTO_INCREMENT,
    precio_venta DECIMAL(10, 2),
    estado_precio VARCHAR(20)
);

-- Creación de la tabla Platillo
CREATE TABLE Platillo (
    cod_platillo INT PRIMARY KEY,
    nombre_platillo VARCHAR(50),
    descripcion_platillo VARCHAR(100)
);

-- Creación de la tabla ItemVenta
CREATE TABLE ItemVenta (
    nro_item_venta INT PRIMARY KEY AUTO_INCREMENT,
    precio_comida_menu DECIMAL(10, 2),
    cantidad_producida INT,
    cantidad_disponible_platillo INT,
    cod_platillo INT,
    FOREIGN KEY (cod_platillo) REFERENCES Platillo(cod_platillo)
);

INSERT INTO Cliente (dni_cliente, nombre_cliente, apellido_cliente)
VALUES (1, 'Juan', 'Pérez'),
       (2, 'María', 'González'),
       (3, 'Pedro', 'López'),
       (4, 'Ana', 'Martínez'),
       (5, 'Luis', 'Rodríguez'),
       (6, 'Laura', 'Hernández'),
       (7, 'Carlos', 'Sánchez'),
       (8, 'Sofía', 'López');

INSERT INTO Pedido (id_pedido, precio_venta, estado_precio)
VALUES (1, 10.99, 'Retirado'),
       (2, 15.50, 'En proceso'),
       (3, 25.75, 'Entregado'),
       (4, 8.99, 'Retirado'),
       (5, 12.50, 'En proceso'),
       (6, 19.99, 'Entregado'),
       (7, 14.75, 'Retirado'),
       (8, 9.99, 'En proceso');

INSERT INTO Platillo (cod_platillo, nombre_platillo, descripcion_platillo)
VALUES (1, 'Pizza', 'Pizza napolitana'),
       (2, 'Empanada', 'Empanada de carne'),
       (3, 'Hamburguesa', 'Hamburguesa clásica'),
       (4, 'Sushi', 'Sushi de salmón'),
       (5, 'Pastel de Chocolate', 'Pastel de chocolate con crema');

INSERT INTO ItemVenta (precio_comida_menu, cantidad_producida, cantidad_disponible_platillo, cod_platillo)
VALUES (8.99, 5, 5, 1),
       (12.50, 3, 3, 2),
       (19.99, 2, 2, 3),
       (9.99, 4, 4, 4),
       (14.75, 6, 6, 5);
