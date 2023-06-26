-- Creación de la tabla Cliente
CREATE TABLE Cliente (
    id_cliente INT PRIMARY KEY,
    nombre_cliente VARCHAR(50),
    apellido_cliente VARCHAR(50)
);

-- Creación de la tabla Pedido
CREATE TABLE Pedido (
    id_pedido INT PRIMARY KEY,
    precio_venta DECIMAL(10, 2),
    estado_precio VARCHAR(20)
);

-- Creación de la tabla ItemVenta
CREATE TABLE ItemVenta (
    nro_item_venta INT PRIMARY KEY AUTO_INCREMENT,
    precio_comida_menu DECIMAL(10, 2),
    cantidad_producida INT,
    cantidad_disponible_platillo INT
);

INSERT INTO Cliente (id_cliente, nombre_cliente, apellido_cliente)
VALUES (1, 'Juan', 'Pérez'),
       (2, 'María', 'González'),
       (3, 'Pedro', 'López'),
       (4, 'Ana', 'Martínez'),
       (5, 'Luis', 'Rodríguez'),
       (6, 'Laura', 'Hernández'),
       (7, 'Carlos', 'Sánchez'),
       (8, 'Sofía', 'López');

INSERT INTO Pedido (id_pedido, precio_venta, estado_precio)
VALUES (1, 10.99, 'Pendiente'),
       (2, 15.50, 'En proceso'),
       (3, 25.75, 'Entregado'),
       (4, 8.99, 'Pendiente'),
       (5, 12.50, 'En proceso'),
       (6, 19.99, 'Entregado'),
       (7, 14.75, 'Pendiente'),
       (8, 9.99, 'En proceso');

INSERT INTO ItemVenta (precio_comida_menu, cantidad_producida, cantidad_disponible_platillo)
VALUES (8.99, 5, 10),
       (12.50, 3, 5),
       (19.99, 2, 8),
       (9.99, 4, 12),
       (14.75, 6, 15),
       (7.99, 1, 3),
       (11.25, 2, 6),
       (18.50, 3, 9);
