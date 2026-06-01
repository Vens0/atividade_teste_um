CREATE DATABASE sistema_simples_m1; 
--  Comando utilizado para criar uma database

USE sistema_simples_m1; 
-- Está puxando a database criada, sendo necessário se referir ao nome dela quando inserir o "USE"

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(87) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

-- Criação de uma tabela nova denominada "usuarios"

INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');

-- Inserção das informações iniciais de usuario e senha na tabela usuarios