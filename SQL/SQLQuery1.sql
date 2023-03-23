create database bd_campeonato;

use bd_campeonato

create table Equipos
(
	ID_EQUIPO int identity(1,1) not null primary key,
	NOMBRE_EQUIPO varchar(100) not null,
	NOMBRE_ENTRENADOR varchar(100)
);

create table Partidos
(
	FECHA date not null,
	NOM_EQU_LOCAL varchar(100) not null,
	GOLES_EQU_LOCAL int,
	GOLES_EQU_VISIT int,
	NOM_EQU_VISIT varchar(100) not null
);

insert into Equipos (NOMBRE_EQUIPO, NOMBRE_ENTRENADOR) values ('Junior', 'Hernan Dario');
insert into Equipos (NOMBRE_EQUIPO, NOMBRE_ENTRENADOR) values ('FC Barcelona', 'Ronald Koeman');
insert into Equipos (NOMBRE_EQUIPO, NOMBRE_ENTRENADOR) values ('Real Madrid CF', 'Carlo Ancelotti');
insert into Equipos (NOMBRE_EQUIPO, NOMBRE_ENTRENADOR) values ('FC Bayern M�nchen', 'Julian Nagelsmann');
insert into Equipos (NOMBRE_EQUIPO, NOMBRE_ENTRENADOR) values ('Juventus', 'Andrea Pirlo');
insert into Equipos (NOMBRE_EQUIPO, NOMBRE_ENTRENADOR) values ('Paris Saint-Germain', 'Mauricio Pochettino');
insert into Equipos (NOMBRE_EQUIPO, NOMBRE_ENTRENADOR) values ('Manchester City FC', 'Pep Guardiola');
insert into Equipos (NOMBRE_EQUIPO, NOMBRE_ENTRENADOR) values ('Sevilla FC', 'Jorge Sampaoli');
insert into Equipos (NOMBRE_EQUIPO, NOMBRE_ENTRENADOR) values ('FC Porto', 'S�rgio Paulo');
insert into Equipos (NOMBRE_EQUIPO, NOMBRE_ENTRENADOR) values ('Arsenal FC', 'Mikel Arteta');

