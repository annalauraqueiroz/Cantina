INSERT INTO cantina.alunos (id_aluno,nome) VALUES (1,'Mariana');
INSERT INTO cantina.alunos (id_aluno,nome) VALUES (2,'Joaquim');
INSERT INTO cantina.alunos (id_aluno,nome) VALUES (3,'Juliana');

INSERT INTO cantina.cardapio(id_cardapio,descricao,data) VALUES (1,'Segunda-Feira','2017-11-20');
INSERT INTO cantina.cardapio(id_cardapio,descricao,data) VALUES (2,'Terça-Feira','2017-11-15');
INSERT INTO cantina.cardapio(id_cardapio,descricao,data) VALUES (3,'Quarta-Feira','2017-11-27');

INSERT INTO cantina.opcoes(id_opcao,descricao,valor_nutritivo) VALUES (1,'Arroz',132);
INSERT INTO cantina.opcoes(id_opcao,descricao,valor_nutritivo) VALUES (2,'Feijão',632);
INSERT INTO cantina.opcoes(id_opcao,descricao,valor_nutritivo) VALUES (3,'Macarrão',956);

INSERT INTO cantina.cardapio_opcoes(id_cardapio_opcoes,id_cardapio,id_opcao) VALUES (1,3,2);
INSERT INTO cantina.cardapio_opcoes(id_cardapio_opcoes,id_cardapio,id_opcao) VALUES (2,1,3);
INSERT INTO cantina.cardapio_opcoes(id_cardapio_opcoes,id_cardapio,id_opcao) VALUES (3,2,1);

INSERT INTO cantina.refeicao_aluno(id_refeicao_aluno,id_cardapio,id_aluno) VALUES (1,2,3);
INSERT INTO cantina.refeicao_aluno(id_refeicao_aluno,id_cardapio,id_aluno) VALUES (2,3,1);
INSERT INTO cantina.refeicao_aluno(id_refeicao_aluno,id_cardapio,id_aluno) VALUES (3,1,2);