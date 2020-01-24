CREATE TABLE usuarios (
    usuario varchar (24),
    contrasenha varchar (8),
    nome varchar (60),
    direccion varchar(90),
    telefono int,
    dni varchar(9),
    tipo_usuario char(1)
);

CREATE TABLE novos_rexistros (
    usuario varchar (24),
    contrasenha varchar (8),
    nome varchar (60),
    direccion varchar (90),
    telefono int,
    dni varchar(9)
);

CREATE TABLE xogos_aluguer (
    nome varchar (50),
    cantidad int,
    descripcion varchar (100),
    proveedor varchar (24),
    prezo int
);

CREATE TABLE xogos_devoltos (
    nome varchar (50),
    cantidad int,
    descripcion varchar(100),
    proveedor varchar (24)
);

CREATE TABLE xogos_venda (
    nome varchar (50),
    cantidad int,
    descripcion varchar (100),
    proveedor varchar (24),
    prezo int
);
