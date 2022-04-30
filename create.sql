DROP DATABASE IF EXISTS Cantina;

CREATE DATABASE Cantina;
USE Cantina;

CREATE TABLE Cardapio_Opcoes (
id_cardapio_opcoes Integer PRIMARY KEY,
id_cardapio Integer,
id_opcao Integer,
data date
);

CREATE TABLE Opcoes (
id_opcao Integer PRIMARY KEY,
descricao varchar(50),
valor_nutritivo Integer
);

CREATE TABLE Cardapio (
id_cardapio Integer PRIMARY KEY,
descricao varchar(50)
);

CREATE TABLE Alunos (
id_aluno Integer PRIMARY KEY,
nome varchar(50)
);

CREATE TABLE Refeicao_Aluno (
id_refeicao_aluno Integer PRIMARY KEY,
id_cardapio_opcoes Integer,
id_aluno Integer,
FOREIGN KEY(id_cardapio_opcoes) REFERENCES Cardapio_Opcoes (id_cardapio_opcoes),
FOREIGN KEY(id_aluno) REFERENCES Alunos (id_aluno)
);

ALTER TABLE Cardapio_Opcoes ADD FOREIGN KEY(id_cardapio) REFERENCES Cardapio (id_cardapio);
ALTER TABLE Cardapio_Opcoes ADD FOREIGN KEY(id_opcao) REFERENCES Opcoes (id_opcao);