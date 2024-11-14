create database cherie;

use cherie;

create table cadastro(
			
            id_usuario integer auto_increment not null,
            email varchar(250) not null,
            nome varchar(250) not null,
            senha varchar(64) not null,
            primary key(id_usuario)
            
            );