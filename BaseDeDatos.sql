CREATE TABLE aspirante (
    id_aspirante CHAR(4) PRIMARY KEY,
    nombre VARCHAR(20) NOT NULL,
    apellidos VARCHAR(20) NOT NULL,
    oficio VARCHAR(50) NOT NULL,
    telefono CHAR(10) NOT NULL,
    correo VARCHAR(30) NOT NULL,
    id_oferta INT(5),
    FOREIGN KEY(id_oferta) REFERENCES oferta(id_oferta)
)

CREATE TABLE oferta (
    id_oferta int(5) AUTO_INCREMENT PRIMARY KEY,
    area VARHCAR(50) NOT NULL,
    descripcion VARCHAR(100)NOT NULL,
    fechaDePublicacion DATE NOT NULL,
    sueldo FLOAT(5) NOT NULL
)

CREATE TABLE empresa(
    nombre VARCHAR(50) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    telefono CHAR(10)NOT NULL,
    correo VARCHAR(50) NOT NULL PRIMARY KEY,
    giro VARCHAR(50) NOT NULL,
    id_oferta INT(5),
    FOREIGN KEY(id_oferta) REFERENCES oferta(id_oferta)
)