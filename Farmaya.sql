DROP DATABASE IF EXISTS `farmaya`;
CREATE DATABASE `farmaya`; ;

USE `farmaya`;
-- FARMACIA
CREATE TABLE Farmacias (
    Cod_Farm INT PRIMARY KEY,
    Nom_Farm VARCHAR(200),
    Tel_Farm VARCHAR(9),
    Eml_Farm VARCHAR(35),
    Dir_Farm VARCHAR(30),
    Ciu_Farm VARCHAR(30)
);

-- PRODUCTO
CREATE TABLE Productos (
    Cod_Prod INT PRIMARY KEY,
    Nom_Prod VARCHAR(20),
    Tip_Prod VARCHAR(25),
    Pre_Prod DECIMAL(10,2),
    Cod_Farm INT,
    FOREIGN KEY (Cod_Farm) REFERENCES Farmacias(Cod_Farm)
);

-- CLIENTES
CREATE TABLE Clientes (
    Cod_Clie INT PRIMARY KEY,
    Nom_Clie VARCHAR(20),
    Ape_Clie1 VARCHAR(20),
    Ape_Clie2 VARCHAR(20),
    Tel_Clie VARCHAR(9),
    Eml_Clie VARCHAR(35),
    Dir_Clie VARCHAR(30)
);

-- PEDIDOS
CREATE TABLE Pedidos (
    Cod_Ped INT PRIMARY KEY,
    Fech_Ped DATE,
    Est_Ped VARCHAR(15),
    Cant_Ped FLOAT,
    Cod_Clie INT,
    Cod_Farm INT,
    Cod_Prod INT,
    FOREIGN KEY (Cod_Clie) REFERENCES Clientes(Cod_Clie),
    FOREIGN KEY (Cod_Farm) REFERENCES Farmacias(Cod_Farm),
	FOREIGN KEY (Cod_Prod) REFERENCES Productos(Cod_Prod)
);

INSERT INTO Farmacias (Cod_Farm, Nom_Farm, Tel_Farm, Eml_Farm, Dir_Farm, Ciu_Farm) VALUES
(1, 'Farmacia Central', '987654321', 'central@farmacias.com', 'Av. Salud 123', 'Madrid'),
(2, 'Farmacia Norte', '912345678', 'norte@farmacias.com', 'Calle Norte 45', 'Barcelona'),
(3, 'Farmacia Sur', '934567890', 'sur@farmacias.com', 'Av. Sur 789', 'Sevilla'),
(4, 'Farmacia Este', '965432187', 'este@farmacias.com', 'Calle Este 12', 'Valencia'),
(5, 'Farmacia Oeste', '976543210', 'oeste@farmacias.com', 'Paseo Oeste 56', 'Zaragoza'),
(6, 'Farmacia Centro Salud', '988877766', 'centrosalud@farmacias.com', 'Calle Salud 98', 'Bilbao');

INSERT INTO Productos (Cod_Prod, Nom_Prod, Tip_Prod, pre_prod, cod_farm) VALUES
(101, 'Paracetamol', 'Analgésico', '10', '1'),
(102, 'Ibuprofeno', 'Antiinflamatorio', '5', '3'),
(103, 'Amoxicilina', 'Antibiótico', '11', '1'),
(104, 'Loratadina', 'Antialérgico', '7', '2'),
(105, 'Cetirizina', 'Antialérgico', '6', '2'),
(106, 'Omeprazol', 'Inhibidor de bomba', '16', '5'),
(107, 'Aspirina', 'Analgésico', '4', '6'),
(108, 'Salbutamol', 'Broncodilatador', '12', '4');

INSERT INTO Clientes (Cod_Clie, Nom_Clie, Ape_Clie1, Ape_Clie2, Tel_Clie, Eml_Clie, Dir_Clie) VALUES
(201, 'Katia', 'Pérez', 'Gómez', '612345678', 'kati.perez@email.com', 'Calle Falsa 123'),
(202, 'Gabriel', 'Ruiz', 'Martínez', '623456789', 'gabi.ruiz@email.com', 'Av. Real 456'),
(203, 'Joan', 'López', 'Hernández', '634567890', 'jo.lopez@email.com', 'Calle Sol 789'),
(204, 'Andrea', 'Martín', 'Sánchez', '645678901', 'andre.martin@email.com', 'Av. Luna 321'),
(205, 'Lucía', 'García', 'Fernández', '656789012', 'lucia.garcia@email.com', 'Calle Brisa 22'),
(206, 'Pedro', 'Navarro', 'Domínguez', '667890123', 'pedro.navarro@email.com', 'Av. Sol 77'),
(207, 'Sofía', 'Ramírez', 'López', '678901234', 'sofia.ramirez@email.com', 'Plaza Norte 5'),
(208, 'Manuel', 'Castro', 'Iglesias', '689012345', 'manuel.castro@email.com', 'Calle Ronda 14');

INSERT INTO Pedidos (Cod_Ped, Fech_Ped, Est_Ped, Cant_Ped, Cod_Clie, Cod_Farm, Cod_Prod) VALUES
(301, '2025-05-01', 'Entregado', 2, 201, 1, 101),
(302, '2025-05-02', 'Pendiente', 1, 202, 2, 103),
(303, '2025-05-03', 'En camino', 3, 203, 3, 102),
(304, '2025-05-04', 'Entregado', 1, 204, 4, 104),
(305, '2025-05-05', 'Pendiente', 1, 205, 2, 105),
(306, '2025-05-06', 'Entregado', 2, 206, 5, 106),
(307, '2025-05-07', 'En camino', 1, 207, 6, 107),
(308, '2025-05-08', 'Pendiente', 2, 208, 4, 108);