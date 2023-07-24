drop database if exists PLAF_CREACIONES;

create database PLAF_CREACIONES;
use PLAF_CREACIONES;
create table VENTA (
  ID_VENTA int not null primary key,
  ID_FACTURA int not null,
  ID_PRODUCTO_O_SERVICO int not null,
  ID_ORDEN_DE_SERVICIO_O_PRODUCTO int not null,
  ID_CLIENTE int not null,
  CANTIDAD time null,
  FECHA datetime null,
  PRECIO decimal null
 );

create table CLIENTE (
  ID_CLIENTE int not null primary key,
  NOMBRES varchar(50) not null,
  APELLIDOS varchar(50) not null,
  DIRECCIÓN varchar(100) not null,
  TELÉFONO time null,
  CORREO_ELECTRONICO varchar(100) not null,
  CIUDAD varchar(100) not null,
  FECHA_DE_NACIMIENTO date not null
  
);
create table CATEGORÍA (
  ID_CATEGORIA int not null,
  DESCRIPCIÓN varchar(500) not null, 
  PRODUCTO varchar(100) not null,
  SERVICIO varchar(100) not null

  );
create table FACTURA (
  ID_FACTURA int not null primary key,
  ID_CLIENTE int not null,
  ID_DISEÑADOR int not null,
  ID_VENTA int not null,
  ID_CATEGORIA int not null,
  FECHA datetime null
  );

create table DISEÑADOR (
  ID_DISEÑADOR int not null, 
  ID_ORDEN_DE_SERVICIO_O_PRODUCTO int not null,
  NOMBRES varchar(50) not null,
  APELLIDOS varchar(50) not null,
  TELEFONO  time null,
  CORREO_ELECTRONICO varchar(100) not null
);
create table ORDEN_SYP (
  ID_ORDEN_SYP int not null,
  ID_DISEÑADOR int not null,
  ID_CLIENTE int not null,
  ID_CATEGORIA int not null,
  DESCRIPCIÓN  varchar(500) not null,
  FECHA datetime null
  );
create table PRODUCTO_O_SERVICIO (
  ID_PRODUCTOS_O_SERVICIOS int not null,
  ID_CATEGORIA int not null,
  DESCRIPCIÓN  varchar(500) not null, 
  PRECIO decimal null
  );
  