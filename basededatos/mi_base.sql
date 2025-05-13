-- Crear base de datos 
CREATE DATABASE mi_base CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Usar la base de datos recién creada
USE mi_base;

-- Crear tabla usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE
);

-- Insertar usuarios
INSERT INTO usuarios (nombre, correo) VALUES
('María López', 'maria.lopez@example.com'),
('Carlos Gómez', 'carlos.gomez@example.com'),
('Juana Martínez', 'juana.martinez@example.com'),
('Pedro Ramírez', 'pedro.ramirez@example.com'),
('Lucía Fernández', 'lucia.fernandez@example.com'),
('Miguel Herrera', 'miguel.herrera@example.com'),
('Camila Torres', 'camila.torres@example.com'),
('Andrés Navarro', 'andres.navarro@example.com'),
('Valentina Ríos', 'valentina.rios@example.com'),
('Santiago Díaz', 'santiago.diaz@example.com');