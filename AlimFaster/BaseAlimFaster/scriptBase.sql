
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