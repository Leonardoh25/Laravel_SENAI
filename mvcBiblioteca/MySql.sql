create database mvcBiblioteca;
use mvcBiblioteca;

CREATE TABLE livros(
ID integer auto_increment primary key,
    NOME varchar (255),
    AUTOR varchar (255),
    DESCRICAO varchar (255),
    PAGINAS numeric,
    PUBLICACAO date,
    SETORES varchar (255),
    CUSTO numeric,
    PRECO numeric,
    INPOSTO numeric
);
SELECT * FROM livros;