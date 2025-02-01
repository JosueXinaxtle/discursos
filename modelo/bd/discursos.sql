create database discursos;
use discursos;

/*Creación de las tablas*/
create table persona(id_per int(8)not null primary key auto_increment, nombre varchar(30)not null, ape1 varchar(30)not null, ape2 varchar(30),sexo varchar(10), tel varchar(12), dir varchar(70) );
create table congre(id_cong int(8)not null primary key auto_increment, nombre varchar(30)not null, dir varchar(70), estado varchar(50), municipio varchar(50), pais varchar(20) );
create table reuniones(id_reu int(8)not null primary key auto_increment, hora_inicio time not null, hora_term time,  id_cong int(8)not null, ubicacion varchar(70) );
create table disc_salida(id_salida int(8)not null primary key auto_increment, id_per int(8)not null, id_disc int(8)not null,id_cong int(8)not null, nombre varchar(30)not null, ape1 varchar(30)not null, ape2 varchar(30), discurso varchar(50)not null, cancion varchar(50),congre varchar(50)not null, dia date, hora time, contacto varchar(12), dir varchar(70) );
create table disc_visitas(id_visitas int(8)not null primary key auto_increment, id_per int(8)not null, id_disc int(8)not null,id_cong int(8)not null, nombre varchar(30)not null, ape1 varchar(30)not null, ape2 varchar(30), discurso varchar(50)not null, cancion varchar(50), congre varchar(50)not null, dia date, hora time, contacto varchar(12), dir varchar(70) );
create table discurso(id_disc int(8)not null primary key auto_increment, titulo varchar(50)not null, referen varchar(8) );
create table usuarios(id_usu int(8)not null primary key auto_increment, id_rol int(8)not null, usuario varchar(40)not null, contra varchar (15)not null);
create table roles(id_rol int(8)not null primary key auto_increment, rol varchar(30)not null);

/*Adicionando las llaves foraneas*/
alter table usuarios add foreign key (id_rol) references roles(id_rol);
alter table disc_salida add foreign key (id_per) references persona(id_per) on delete cascade;
alter table disc_salida add foreign key (id_disc) references discurso(id_disc) on delete cascade;
alter table disc_salida add foreign key (id_cong) references congre (id_cong) on delete cascade;
alter table disc_visitas add foreign key (id_per) references persona(id_per) on delete cascade;
alter table disc_visitas add foreign key (id_disc) references discurso(id_disc) on delete cascade;
alter table disc_visitas add foreign key (id_cong) references congre(id_cong) on delete cascade;
