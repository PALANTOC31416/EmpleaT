CREATE TABLE aspirantes (
    CURP CHAR(18) NOT NULL PRIMARY KEY,
    nombre VARCHAR(20) NOT NULL,
    apellidos VARCHAR(20) NOT NULL,
    oficio VARCHAR(50) NOT NULL,
    telefono CHAR(10) NOT NULL,
    correo VARCHAR(30) NOT NULL
);

CREATE TABLE empresas(
    nombre VARCHAR(50) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    telefono CHAR(10)NOT NULL,
    correo VARCHAR(50) NOT NULL PRIMARY KEY,
    contrasena VARCHAR(50)NOT NULL,
    giro VARCHAR(50) NOT NULL,
    logo_empresa VARCHAR(60) NOT NULL
);

CREATE TABLE ofertas (
    id_oferta int(5) AUTO_INCREMENT PRIMARY KEY,
    area VARCHAR(50) NOT NULL,
    nombreOferta VARCHAR(100)NOT NULL,
    fechaDePublicacion DATE NOT NULL,
    sueldo FLOAT(5) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    FOREIGN KEY(correo) REFERENCES empresas(correo)
);

CREATE TABLE postulaciones(
    id_postulacion int(5) AUTO_INCREMENT PRIMARY KEY,
    id_oferta int(5),
    FOREIGN KEY(id_oferta) REFERENCES ofertas(id_oferta),
    CURP CHAR(18) NOT NULL,
    FOREIGN KEY(CURP) REFERENCES aspirantes(CURP)
);

INSERT INTO empresas(nombre,direccion,telefono,correo,contrasena,giro) VALUES("Carpinteria Don Pedro","Calle 2 Oriente","2381452386","pedrito@gmail.com","pedrito1234","comisionista");
INSERT INTO ofertas(id_oferta,area,nombreOferta,fechaDePublicacion,sueldo,correo) VALUES (NULL,"Construccion","Carpintero con o sin experiencia","2022-05-03",4500,"pedrito@gmail.com");
INSERT INTO ofertas(id_oferta,area,nombreOferta,fechaDePublicacion,sueldo,correo) VALUES (NULL,"Chofer","Chofer de camionea","2022-05-04",3500,"pedrito@gmail.com");
INSERT INTO ofertas(id_oferta,area,nombreOferta,fechaDePublicacion,sueldo,correo) VALUES (NULL,"Principal","Mantenimiento a la area de corte","2022-05-05",2800,"pedrito@gmail.com");