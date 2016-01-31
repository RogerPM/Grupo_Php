
--Roger 

create table usuario
  (
	codigo integer
	email varchar(50),
	contraseña varchar(50),
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
