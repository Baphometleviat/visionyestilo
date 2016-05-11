drop database if exists visionyestilo;
create database visionyestilo;

use visionyestilo;

/*CREACION DE TABLAS*/
create table admons(user varchar(30) primary key, pass varchar(32));

create table clientes(idCliente int auto_increment primary key, nombre varchar(50), apellidoPaterno varchar(50), apellidoMaterno varchar(50), edad varchar(2),
						tel varchar(10), correo varchar(50), calle varchar(50), numero varchar(5), manzana varchar(50), lote varchar(50), colonia varchar(50), 
                        municipio varchar (50), estado varchar(50), codigoPostal varchar(5), referencias varchar(100));

create table lente(idLente int auto_increment primary Key, lente varchar(50));

create table material(idMaterial int auto_increment primary key, material varchar(50));

create table tratamiento(idTratamiento int auto_increment primary key, tratamiento varchar(50));
/*CREACION DE TABLAS*/

/*INSERCIÓN DE VALORES*/
									 
INSERT INTO admons VALUES('medinabj1','12345'); 
INSERT INTO clientes (nombre, apellidoPaterno, apellidoMaterno,edad,tel,correo,calle,numero,manzana,lote,colonia,municipio,estado,codigoPostal,referencias) 
VALUES ('Job', 'Medina','Arroyo','18','5536577974','baphometleviat@gmail.com','28','106','','','Progreso Nacional','Gustavo A. Madero','D.F.','07600','Es chingón'); 

/*LENTE*/
INSERT INTO lente (lente) VALUES('Monofocal');/*1*/
INSERT INTO lente (lente) VALUES('Bifocal FT');/*2*/
INSERT INTO lente (lente) VALUES('Bifocal Inv');/*3*/
INSERT INTO lente (lente) VALUES('Progresivo');/*4*/
INSERT INTO lente (lente) VALUES('Lente de Contacto');/*5*/
/*LENTE*/

/*MATERIAL*/
/*LENTE NORMAL*/
INSERT INTO material (material) VALUES('Cristal');
INSERT INTO material (material) VALUES('CR-39');
INSERT INTO material (material) VALUES('Asferico');
INSERT INTO material (material) VALUES('Hi-Index');
INSERT INTO material (material) VALUES('Policarbonato');
INSERT INTO material (material) VALUES('Thin & Lite');
/*LENTE NORMAL*/
/*LENTE CONTACTO*/
INSERT INTO material (material) VALUES('Baush and Lomb');/*6*/
INSERT INTO material (material) VALUES('Cooper Vision');/*7*/
INSERT INTO material (material) VALUES('Jhonson and Jhonson');/*8*/
INSERT INTO material (material) VALUES('Ciba Vision');/*9*/
INSERT INTO material (material) VALUES('Fresh Look');/*10*/
/*LENTE CONTACTO*/
/*MATERIAL*/

/*INSERCIÓN DE VALORES*/

select * from clientes;

/*drop database visionyestilo;*/


