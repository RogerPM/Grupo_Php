
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


--A�ADIR CLAVES FORANEAS
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
	contrase�a varchar(50),
	registro timestamp
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
	registro timestamp
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

