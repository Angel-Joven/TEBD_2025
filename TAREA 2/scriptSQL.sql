CREATE DATABASE tarea1_tebd;
USE tarea1_tebd;

CREATE TABLE clientes (
	idCliente INT NOT NULL AUTO_INCREMENT,
	RFC varchar(13) DEFAULT NULL,
    tipo_Persona varchar(6) DEFAULT NULL,
    PRIMARY KEY (idCliente)
);

SELECT * FROM clientes;

INSERT INTO tarea1_tebd.clientes (RFC, tipo_Persona) VALUES
('QUCA470929CL0', 'Fisica'),
('MOV1004080A1', 'Moral'),
('ANJO020519AB1', 'Fisica'),
('PAP0804082B3', 'Moral'),
('LDMR020622CD2', 'Fisica'),
('FIC1802254C5', 'Moral'),
('VAMA021212EF3', 'Fisica'),
('FAM9809156D7', 'Moral'),
('JLGM040105GH4', 'Fisica'),
('PEE2006168E9', 'Moral');

ALTER TABLE clientes auto_increment = 1;
