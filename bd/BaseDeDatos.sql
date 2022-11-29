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

/*Empresas*/
INSERT INTO empresas(nombre,direccion,telefono,correo,contrasena,giro) VALUES("Carpinteria Don Pedro","Calle 2 Oriente","2381452386","pedrito@gmail.com","pedrito1234","comisionista");
/*ofertas*/
INSERT INTO ofertas(id_oferta,area,nombreOferta,fechaDePublicacion,sueldo,correo) 
VALUES (NULL,"RH","Administrador de empresas, para incorporar...","2022-12-05",20000,"osapat@gmail.com");
INSERT INTO ofertas(id_oferta,area,nombreOferta,fechaDePublicacion,sueldo,correo) 
VALUES (NULL,"Contaduria","Contador publico para implementar...","2022-12-24",35000,"osapat@gmail.com");
INSERT INTO ofertas(id_oferta,area,nombreOferta,fechaDePublicacion,sueldo,correo) 
VALUES (NULL,"Envazado","Ingeniero Mecatronico para soporte a maquinaria","2022-12-04",35000,"peñafiel@gmail.com");
INSERT INTO ofertas(id_oferta,area,nombreOferta,fechaDePublicacion,sueldo,correo) 
VALUES (NULL,"Mantenimiento","Ingeniero Electromecanico, para mantenimiento de instalaciones electricas","2022-12-10",20000,"peñafiel@gmail.com");
INSERT INTO ofertas(id_oferta,area,nombreOferta,fechaDePublicacion,sueldo,correo) 
VALUES (NULL,"RH","Ingeniero en Sistemas o carrera a fin, para reclutar personal.","2022-10-04",18000,"miniempresa@gmail.com");
INSERT INTO ofertas(id_oferta,area,nombreOferta,fechaDePublicacion,sueldo,correo) 
VALUES (NULL,"Finanzas","Contador publico","2022-11-06",24000,"miniempresa@gmail.com");