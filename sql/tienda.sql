CREATE TABLE productos (
	id_producto INTEGER PRIMARY KEY AUTOINCREMENT,
    producto VARCHAR (100) NOT NULL,
    precio FLOAT NOT NULL,
    existencias INTEGER NOT NULL
);

INSERT INTO productos (producto, precio, existencias) VALUES ("Jersey Pachuca local.", 1250, 19);
INSERT INTO productos (producto, precio, existencias) VALUES ("Jersey Cruz Azul local.", 1550, 14);
INSERT INTO productos (producto, precio, existencias) VALUES ("Jersey América visitante.", 1400, 23);
INSERT INTO productos (producto, precio, existencias) VALUES ("Jersey Pumas visitante.", 1350, 8);
INSERT INTO productos (producto, precio, existencias) VALUES ("Jersey Tigres local.", 1300, 33);

CREATE TABLE ticket (
	id_ticket INTEGER PRIMARY KEY AUTOINCREMENT,
    fecha VARCHAR (10) NOT NULL,
    hora_venta VARCHAR (10) NOT NULL,
    cantidad_producto INTEGER NOT NULL,
    producto VARCHAR (100) NOT NULL,
    total_producto INTEGER NOT NULL
);