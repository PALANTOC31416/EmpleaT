CREATE TABLE aspirante (
    id_aspirante CHAR(4) PRIMARY KEY,
    nombre VARCHAR(20) NOT NULL,
    apellidos VARCHAR(20) NOT NULL,
    oficio VARCHAR(50) NOT NULL,
    telefono CHAR(10) NOT NULL,
    correo VARCHAR(30) NOT NULL
)

CREATE TABLE empresa(
    nombre VARCHAR(50) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    telefono CHAR(10)NOT NULL,
    correo VARCHAR(50) NOT NULL PRIMARY KEY,
    contrasena VARCHAR(50)NOT NULL,
    giro VARCHAR(50) NOT NULL
)

CREATE TABLE oferta (
    id_oferta int(5) AUTO_INCREMENT PRIMARY KEY,
    area VARHCAR(50) NOT NULL,
    nombreOferta VARCHAR(100)NOT NULL,
    fechaDePublicacion DATE NOT NULL,
    sueldo FLOAT(5) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    FOREIGN KEY(correo) REFERENCES empresa(correo),
    id_aspirante CHAR(4),
    FOREIGN KEY(id_aspirante) REFERENCES aspirante(id_aspirante)
)