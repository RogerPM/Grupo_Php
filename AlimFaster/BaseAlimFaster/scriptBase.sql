--Liset 
-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-02-2016 a las 02:07:08
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `restaurantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

CREATE TABLE IF NOT EXISTS `establecimiento` (
  `es_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_es` varchar(100) NOT NULL,
  `max_personas` int(11) NOT NULL,
  `inicio_atencion` time NOT NULL,
  `fin_atencion` time NOT NULL,
  PRIMARY KEY (`es_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `establecimiento`
--

INSERT INTO `establecimiento` (`es_id`, `nombre_es`, `max_personas`, `inicio_atencion`, `fin_atencion`) VALUES
(1, 'Cocolon', 5, '09:00:00', '20:00:00'),
(2, 'Pique y pase', 4, '10:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE IF NOT EXISTS `reservacion` (
  `reserva_id` int(11) NOT NULL AUTO_INCREMENT,
  `establecimiento` varchar(50) NOT NULL,
  `sucursal` varchar(50) NOT NULL,
  `fecha_orden` date NOT NULL,
  `hora_orden` time NOT NULL,
  `numero_personas` int(11) NOT NULL,
  PRIMARY KEY (`reserva_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `reservacion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurant_datos`
--

CREATE TABLE IF NOT EXISTS `restaurant_datos` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `establecimiento` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `latitud` varchar(100) NOT NULL,
  `longitud` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `restaurant_datos`
--

INSERT INTO `restaurant_datos` (`r_id`, `establecimiento`, `ciudad`, `latitud`, `longitud`, `descripcion`) VALUES
(1, 'Cocolon', 'Guayaquil', '-2.164195', '-79.896351', 'Cocolon Francisco Orellana'),
(2, 'Cocolon', 'Quito', '-1.922246716098091', '10.72265625', 'Cocolon Parque El Ejido'),
(3, 'Pique y pase', 'Guayaquil', '19.321511226817176', '45.3515625', 'Pique y Pase de La Estatal'),
(4, 'Pique y pase', 'Quito', '1.417091829441639', '-72.0703125', 'Pique Y pase Urdesa');

﻿
--EDWIN: Estado
--	    Sucursal
--	    Producto
--	    TipoProducto

CREATE TABLE estado(
    codigo_estado serial NOT NULL,
    descripcion varchar(50) NULL,
    codigo_restaurante int NULL,
    codigo_cliente int NULL,
    codigo_usuario int Null,
    codigo_producto int NULL,
    codigo_tarjeta int NULL,
    numero_mesa int NULL,
    CONSTRAINT PK_codigo_estado PRIMARY KEY (codigo_estado)
 );

CREATE TABLE sucursal(
    codigo_sucursal serial NOT NULL,
    nombre varchar(50) NULL,
    direccion varchar(50) NULL,
    ciudad varchar(50) NULL,
    capacidad_maxima int NULL,
    codigo_producto int NULL,
    CONSTRAINT PK_codigo_sucursal PRIMARY KEY (codigo_sucursal)
 );

CREATE TABLE producto(
    codigo_producto serial NOT NULL,
    descripcion varchar(50) NULL,
    costo numeric(4,2) NULL,
    pvp numeric(4,2) NULL,
    utilidad numeric(4,2) NULL,
    contenido_neto varchar(50)NULL,
    peso_neto numeric(4,2) NULL,
    CONSTRAINT PK_codigo_producto PRIMARY KEY (codigo_producto)
 );

CREATE TABLE tipo_producto(
    codigo_tipo serial NOT NULL,
    nombre varchar(50) NULL,
    hora_inicio varchar(10) NULL,
    hora_fin varchar(10) NULL,
    codigo_producto int NULL,
    CONSTRAINT PK_codigo_tipo PRIMARY KEY (codigo_tipo)
 );


--AÑADIR CLAVES FORANEAS
ALTER TABLE estado
  ADD CONSTRAINT fk_codigo_restaurante FOREIGN KEY (codigo_restaurante)
  REFERENCES restaurante (codigo_restaurante);

ALTER TABLE estado
  ADD CONSTRAINT fk_codigo_cliente FOREIGN KEY (codigo_cliente)
  REFERENCES cliente (codigo_cliente);

ALTER TABLE estado
  ADD CONSTRAINT fk_codigo_usuario FOREIGN KEY (codigo_usuario)
  REFERENCES usuario (codigo_usuario);
 
ALTER TABLE estado
  ADD CONSTRAINT fk_codigo_producto FOREIGN KEY (codigo_producto)
  REFERENCES producto (codigo_producto);  

ALTER TABLE estado
  ADD CONSTRAINT fk_codigo_tarjeta FOREIGN KEY (codigo_tarjeta)
  REFERENCES tarjeta_credito (numero_tarjeta); 
  
ALTER TABLE estado
  ADD CONSTRAINT fk_numero_mesa FOREIGN KEY (numero_mesa)
  REFERENCES mesa (numero_mesa);
   

ALTER TABLE sucursal
  ADD CONSTRAINT fk_codigo_producto FOREIGN KEY (codigo_producto)
  REFERENCES producto (codigo_producto);
  
ALTER TABLE tipo_producto
  ADD CONSTRAINT fk_codigo_producto FOREIGN KEY (codigo_producto)
  REFERENCES producto (codigo_producto);

--Roger 

create table usuario
  (
	codigo integer
	email varchar(50),
	contrasena varchar(50),
	registro timestamp default now()
  )
  WITH
  (
  OIDS=FALSE
  );
  ALTER TABLE usuario
  OWNER TO postgres;
  ALTER TABLE usuario
  add constraint pk_usuario primary key (codigo),
  ADD CONSTRAINT usuario_persona_fk FOREIGN KEY (codigo)
  REFERENCES persona (codigo_persona);
  
  create table perfil
  (
	codigo integer,
	descripcion varchar(50),
	registro timestamp timestamp default now()
  )
  WITH
  (
  OIDS=FALSE
  );
  ALTER TABLE perfil
  OWNER TO postgres;
  ALTER TABLE perfil
  add constraint pk_perfil primary key (codigo);
  
  create table permiso
  (
	codigo integer,
	pantalla varchar (50)
  )
  WITH
  (
  OIDS=FALSE
  );
  ALTER TABLE permiso
  OWNER TO postgres;
  ALTER TABLE permiso
  add constraint pk_permiso primary key (codigo);
  
  create table permiso_perfil
  (
	usuario integer,
	perfil	integer,
	permiso integer,
	consultar varchar(1),
	grabar varchar(1),
	eliminar varchar(1)
  )
  WITH
  (
  OIDS=FALSE
  );
  ALTER TABLE permiso_perfil
  OWNER TO postgres;
  ALTER TABLE permiso_perfil
  add constraint pk_permiso_perfil primary key (usuario,perfil,permiso),
  ADD CONSTRAINT permiso_usuario_fk FOREIGN KEY (usuario)
  REFERENCES usuario (codigo),
  ADD CONSTRAINT permiso_perfil_fk FOREIGN KEY (perfil)
  REFERENCES perfil (codigo),
  add constraint permiso_fk foreign key (permiso)
  references permiso (codigo);

--Claudia:   
-- Restaurante
--	Cliente
--	Cabecera reservacion
--	detalle reservacion 

CREATE TABLE restaurante(
    codigo_restaurante int NOT NULL,
    codigo_sucursal int NOT NULL,
    codigo_reservacion int NOT NULL,
    razon_social varchar(50) NULL,
    telefono int NULL,
    correo_electronico varchar(50) NULL,
    autorizacion_sri int NULL,
    autorizacion_fecha date NULL,
    telefax int NULL,
    telefono_movil int NULL,
    nombre_imagen varchar(50) NULL,
    CONSTRAINT PK_restaurante PRIMARY KEY (codigo_restaurante));


CREATE TABLE cliente(
    codigo_cliente int NOT NULL,
    numero_factura int NOT NULL,
    categoria varchar(50) NULL,
    cuenta_bancaria int NULL,
    cuenta_paypal int NULL,
    CONSTRAINT PK_cliente PRIMARY KEY (codigo_cliente));

CREATE TABLE cabecera_reservacion(
    codigo_reservacion serial NOT NULL,
    secuencia_reservacion int NOT NULL,
    numero_factura int NOT NULL,
    numero_personas int NOT NULL,
    CONSTRAINT PK_cabecera_reservacion PRIMARY KEY (codigo_reservacion));
        

 CREATE TABLE detalle_reservacion(
    secuencia_reservacion serial NOT NULL,
    numero_mesa int NOT NULL,
    CONSTRAINT PK_detalle_reservacion PRIMARY KEY (secuencia_reservacion));

 --AÑADIR CLAVES FORANEAS
ALTER TABLE restaurante
  ADD CONSTRAINT fk_restaurante_sucursal FOREIGN KEY (codigo_sucursal)
  REFERENCES sucursal (codigo_sucursal);


ALTER TABLE restaurante
  ADD CONSTRAINT fk_restaurante_reservacion FOREIGN KEY (codigo_reservacion)
  REFERENCES cabecera_reservacion (codigo_reservacion);

  ALTER TABLE cliente
  ADD CONSTRAINT fk_cliente_factura FOREIGN KEY (numero_factura)
  REFERENCES cabecera_factura (numero_factura);

  ALTER TABLE cabecera_reservacion
  ADD CONSTRAINT fk_reservacion_detalle FOREIGN KEY (secuencia_reservacion)
  REFERENCES detalle_reservacion (secuencia_reservacion);

  ALTER TABLE cabecera_reservacion
  ADD CONSTRAINT fk_reservacion_factura FOREIGN KEY (numero_factura)
  REFERENCES cabecera_factura (numero_factura);

  ALTER TABLE detalle_reservacion
  ADD CONSTRAINT fk_detReservacion_mesa FOREIGN KEY (numero_mesa)
  REFERENCES mesa (numero_mesa);

--Tablas que faltan(edwin):   
--	TarjetaCredito
--	EntidadFinanciera
--	Mesa
 
CREATE TABLE tarjeta_credito(
    numero_tarjeta serial NOT NULL,
    tipo varchar(50) NULL,
    fecha_expiracion date NULL,
    entidad_bancaria varchar(50) NULL,
    CONSTRAINT PK_numero_tarjeta PRIMARY KEY (numero_tarjeta)
 );
 
 CREATE TABLE entidad_bancaria(
    codigo_entidad_bancaria serial NOT NULL,
    nombre varchar(50) NULL,
    ruc  int NULL,
    numero_tarjeta int NULL,
    CONSTRAINT PK_codigo_entidad_bancaria PRIMARY KEY (codigo_entidad_bancaria)
 );
 
  CREATE TABLE mesa(
    numero_mesa serial NOT NULL,
    descripcion varchar(50) NULL,
    capacidad_ocupantes int NULL,
    CONSTRAINT PK_numero_mesa PRIMARY KEY (numero_mesa)
 );
 
  
 --AÑADIR CLAVES FORANEAS
ALTER TABLE entidad_bancaria
  ADD CONSTRAINT fk_numero_tarjeta FOREIGN KEY (numero_tarjeta)
  REFERENCES tarjeta_credito (numero_tarjeta);
 