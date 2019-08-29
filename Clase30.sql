CREATE DATABASE PRUEBA;
USE PRUEBACREATE TABLE EMPLEADO1(
    Cod_Empleado bigint primary key auto_increment,
    Cedula bigint not null unique,
    Nombre varchar(50) not null,
    Apellido varchar(50) not null,
    Estado varchar(30) not null
)ENGINE=InnoDB;
INSERT INTO EMPLEADO(CEDULA, NOMBRE, APELLIDO, ESTADO)
VAÑIES (111111, 'JUAN', 'MARTI', 'INACTIVO');
UPDATE EMPLEADO SET ESTADO='ACTIVO' WHERE COD_EMPLEADO=1;
SELECT * FROM EMPLEADO;
DELETE FROM EMPLEADO WHERE COD_EMPLEADO=1;
INSER INTO EMPLEADO(CEDULA, NOMBRE, APELLIDO, ESTADO) VALUES (222222, 'PEDRO', 'MESA', 'INACTIVO');
INSER INTO EMPLEADO(CEDULA, NOMBRE, APELLIDO, ESTADO) VALUES (333333, 'FREDY', 'ERAZO', 'INACTIVO');
CREATE TABLE CONTRATO(
    Cod_Contrato bigint primary key auto_increment,
    Fecha_Contrato date not null,
    Fecha_I date not null,
    Fecha_F date not null,
    Fecha_Terminacion date not null,
    Tipo_Contrato varchar(30) not null,
    Cargo varchar(30) not null,
    Estado varchar(30) not null,
    Salario bigint NOT NULL,
    FkCod_Empleado bigint not null,
    Observacion varchar(60) null,
);
ENGINE=InnoDB;
ALTER TABLE CONTRATO
ADD CONSTRAINT fk_CONT_Empleado foreing key(FkCod_Empleado)
REFERENCES EMPLEADO (Cod_Empleado);
INSERT INTO CONTRATO (FECHA_Contrato, FECHA_I, FECHA_F, Fecha_Terminacion, TIPO_CONTRATO, CARGO, ESTADO, SALARIO, FkCOD_EMPELADO, OBSERVACION) VALUES ('2015-02-19', '2015-03-19', null, 'TERMINO FIJO', 'ADMINISTRADOR', 'ACTIVO', 10000000, 1, 'NINGUNA');
SELECT * FROM CONTRATO;
CREATE TABLE NOVEDAD(
    Cod_Novedad bigint primary key auto_increment,
    Fecha date not null,
    Tipo varchar(30) not null,
    Cantidad int not null,
    FkCod_Empleado bigint not null,
    Estado varchar(30) not null
);
ENGINE=InnoDB;
ALTER TABLE NOVEDAD
ADD
CONSTRAINT fk_NOVE_Empleado foreing key (FKCod_Empleado)
REFERENCES EMPLEADO (Cod_Empleado);