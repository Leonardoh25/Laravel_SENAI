create database produtoLaravel;
use produtoLaravel;

CREATE TABLE produtos(
    nome VARCHAR(255),
    quantidade INT,
    preco double,
    created_at timestamp null,
    updated_at timestamp null
);