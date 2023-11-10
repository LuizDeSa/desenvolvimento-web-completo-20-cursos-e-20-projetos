-- mariadb
CREATE DATABASE db_curso_web;

DROP DATABASE db_curso_web;

CREATE TABLE tb_curso (
	id_curso int NOT NULL AUTO_INCREMENT,
    img_curso varchar(100) NOT NULL,
    nome_curso char(50) NOT NULL,
    resumo_curso text NULL,
    data_cadastro datetime NOT NULL,
    ativo boolean DEFAULT true,
    investimento float(8, 2) DEFAULT 0,
    PRIMARY KEY (id_curso)
);

RENAME TABLE tb_curso_test TO tb_curso;


ALTER TABLE tb_cursos ADD COLUMN carga_horaria VARCHAR(5) NOT NULL;

ALTER TABLE tb_cursos CHANGE carga_horaria carga_horaria INT(5) NULL;

ALTER TABLE tb_cursos drop carga_horaria;

ALTER TABLE tb_cursos ADD COLUMN carga_horaria INT(5) NULL;

-- dia 31/07

INSERT INTO tb_cursos (id_curso, img_curso, nome_curso, resumo_curso, data_cadastro, ativo, investimento, carga_horaria) VALUES (NULL, 'curso_node.jpg', 'Curso Completo NodeJS e MongoDB', 'Crie Aplicações back-end incríveis com a NodeJS e banco de dados MongoDB.', '2023-07-01 12:50:39', 1, 99.90, 15);

INSERT INTO tb_cursos (id_curso, img_curso, nome_curso, resumo_curso, data_cadastro, ativo, investimento, carga_horaria) VALUES (NULL, 'curso_php.jpg', 'Curso Completo PHP e MariaDB', 'Crie Aplicações back-end incríveis com a PHP e banco de dados MariaDB.', '2023-04-21 12:50:39', 1, 59.90, 100);

SELECT id_curso, nome_curso, carga_horaria, investimento, ativo FROM tb_cursos;

-- Filtros
SELECT id_curso, nome_curso FROM tb_cursos WHERE investimento<80;

-- Criando a tabela alunos e 

-- populando com https://generatedata.com/generator (ou https://www.mockaroo.com/)

-- AC, AL, AP, AM, BA, CE, DF, ES, GO, MA, MT, MS, MG, PA, PB, PR, PE, PI, RJ, RN, RS, RO, RR, SC, SP, SE, TO
-- Jogos, Esportes, Saúde, Música, Informática

CREATE TABLE tb_alunos (
  id_aluno int,
  nome varchar(255) default NULL,
  idade int default NULL,
  interesse varchar(255) default NULL,
  email varchar(255) default NULL,
  estado varchar(255) default NULL
);

-- Lista de Inserts
-- tb_alunos.txt

-- Dia 01-08-2023

SELECT
	* 
FROM 
	tb_alunos 
WHERE
	interesse = 'Jogos';

-- 

SELECT
	* 
FROM 
	tb_alunos 
WHERE
	idade < 50;

SELECT
	* 
FROM 
	tb_alunos 
WHERE
	idade < 50 AND
    idade > 18 AND
    interesse = 'Jogos';

-- 

SELECT
	* 
FROM 
	tb_alunos 
WHERE
	idade BETWEEN 18 AND 50;--tbm serve para data

-- 

SELECT
	* 
FROM 
	tb_alunos 
WHERE
	interesse = 'Jogos' OR interesse = 'Música' OR interesse = 'Esportes';

SELECT
	* 
FROM 
	tb_alunos 
WHERE
	interesse IN ('Jogos','Música','Esportes');


SELECT
	* 
FROM 
	tb_alunos 
WHERE
	interesse NOT IN ('Jogos','Música','Esportes');

-- 

SELECT * 
FROM tb_alunos 
WHERE nome LIKE '%Coutinho'; --QUALQUE COISA QUE TERMINA COM COUTINHO

SELECT * 
FROM tb_alunos 
WHERE nome LIKE '%e';-- qualquer nome que termine com e

SELECT * 
FROM tb_alunos 
WHERE nome LIKE '%e%';--Qualquer conjunto de caracteres antes + e +qualque caracters 

SELECT * 
FROM tb_alunos 
WHERE nome LIKE '%e_';--Qualquer conjunto de caracteres antes + e + 1 caracter aleatório

SELECT * 
FROM tb_alunos 
WHERE nome LIKE 'A____';--Uma palavra com 5 caracters, que comece com A e tenha mais 4 caracteres indefinido

-- 

SELECT * 
FROM tb_alunos 
WHERE idade BETWEEN 18 AND 59
ORDER BY nome

SELECT * 
FROM tb_alunos 
WHERE idade BETWEEN 18 AND 59
ORDER BY nome DESC

SELECT * 
FROM tb_alunos 
WHERE idade BETWEEN 18 AND 59
ORDER BY nome ASC, idade DESC, estado ASC;

-- limitando retorno
	-- auxilia na páginação

SELECT * 
FROM tb_alunos
LIMIT 25;

SELECT * 
FROM tb_alunos
ORDER BY id_aluno DESC
LIMIT 25;

SELECT * 
FROM tb_alunos
LIMIT 4
OFFSET 0;

-- OU

SELECT * 
FROM tb_alunos
LIMIT 0, 4;



SELECT * 
FROM tb_alunos
LIMIT 4
OFFSET 4;

-- OU

SELECT * 
FROM tb_alunos
LIMIT 4, 4;



SELECT * 
FROM tb_alunos
LIMIT 4
OFFSET 8;

-- OU

SELECT * 
FROM tb_alunos
LIMIT 8, 4;
-- OFFSET, QUANTIDADE DE REGISTRO

--  SELECT - Funções de agregação parte 1: MAX, MIN e AVG

TRUNCATE tb_cursos; --remove todos os dados 

INSERT INTO tb_cursos(id_curso, img_curso, nome_curso, resumo_curso, data_cadastro, ativo, investimento, carga_horaria) VALUES (1, 'curso_node.jpg', 'Curso Completo do Desenvolvedor NodeJS e MongoDB', 'Resumo do curso de NodeJS', '2018-01-01', 1, 159.99, 15), (2, 'curso_react_native.jpg', 'Multiplataforma Android/IOS com React e Redux', 'Resumo do curso de React Native', '2018-02-01', 1, 204.99, 37), (3, 'angular.jpg', 'Desenvolvimento WEB com ES6, TypeScript e Angular', 'Resumo do curso de ES6, TypeScript e Angular', '2018-03-01', 1, 579.99, 31), (4, 'web_completo_2.jpg', 'Web Completo 2.0', 'Resumo do curso de Web Completo 2.0', '2018-04-01', 1, 579.99, 59), (5, 'linux.jpg', 'Introdução ao GNU/Linux', 'Resumo do curso de GNU/Linux', '2018-05-01', 0, 0, 1);

SELECT MIN(investimento) 
FROM tb_cursos

SELECT MIN(investimento) 
FROM tb_cursos
WHERE ativo = true

SELECT MAX(investimento) 
FROM tb_cursos
WHERE ativo = true

SELECT AVG(investimento) 
FROM tb_cursos
WHERE ativo = true 

SELECT SUM(investimento) 
FROM tb_cursos
WHERE ativo = true 

SELECT COUNT(*) 
FROM tb_cursos
WHERE ativo = true 

SELECT COUNT(*) 
FROM tb_cursos
WHERE ativo = false 

SELECT COUNT(*) 
FROM tb_cursos;

-- aGRUPAMENTO

SELECT * 
FROM tb_alunos 
GROUP BY interesse;--retorna um valor estranho

SELECT *, COUNT(*)
FROM tb_alunos 
GROUP BY interesse;--retorna um valor estranho

SELECT interesse, COUNT(*)
FROM tb_alunos 
GROUP BY interesse; -- retorna o valor correto

SELECT interesse, COUNT(*) AS total_por_interesse
FROM tb_alunos 
GROUP BY interesse;

SELECT interesse, COUNT(*) AS total_por_interesse
FROM tb_alunos 
GROUP BY interesse
ORDER BY total_por_interesse DESC;

SELECT estado, COUNT(*) AS total_por_estado
FROM tb_alunos 
GROUP BY estado
ORDER BY estado;

-- fILTRANDO SELEÇẼOES AGRUPADAS
SELECT estado, COUNT(*) AS total_por_estado
FROM tb_alunos 
GROUP BY estado
HAVING total_por_estado > 20
ORDER BY estado;

SELECT estado, COUNT(*) AS total_por_estado
FROM tb_alunos 
GROUP BY estado
HAVING estado IN('MG', 'SP')
ORDER BY estado;

SELECT estado, COUNT(*) AS total_por_estado
FROM tb_alunos 
GROUP BY estado
HAVING estado IN('MG', 'SP') AND total_por_estado > 16
ORDER BY estado;

SELECT estado, COUNT(*) AS total_por_estado
FROM tb_alunos 
WHERE interesse!='Esportes'
GROUP BY estado
HAVING total_por_estado > 16
ORDER BY estado;

-- ordem de comandos
SELECT * 
FROM tb_alunos 
WHERE 1
GROUP BY
HAVING
ORDER BY
LIMIT

-- Update

UPDATE tb_alunos
SET nome = 'João'
WHERE id_aluno = 13;


UPDATE tb_alunos
SET interesse = 'Saúde'
WHERE idade >=88;

UPDATE tb_alunos
SET nome = 'Hanna', idade=26, email='hanna@gmail.com'
WHERE id_aluno = 18

UPDATE `tb_alunos` 
SET interesse = 'Música'
WHERE idade BETWEEN 15 AND 25 AND estado = 'MT';

-- Delete
-- Normalmente não excluimos, apenas atualizamos o campo ativo por exemplo

DELETE FROM `tb_alunos` 
WHERE id_aluno = 5

DELETE FROM `tb_alunos` 
WHERE idade in(81, 83, 84, 85, 86, 87) and interesse = 'Esportes';

-- Projeto loja virtual

CREATE DATABASE db_loja_virtual;

-- O melhor nesse caso (1 para 1) é juntar as duas tabelas numa só
CREATE TABLE tb_produtos(
    id_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    produto VARCHAR(200) NOT NULL,
    valor FLOAT(8,2) NOT NULL
);

CREATE TABLE tb_descricoes_tecnicas(
    id_descricao_tecnica INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fk_id_produto INT NOT NULL,
    descricao_tecnica TEXT NOT NULL,
    FOREIGN KEY(fk_id_produto) REFERENCES tb_produtos(id_produto)
);

INSERT INTO tb_produtos(produto, valor) VALUES ('Notebook Dell Inspiron Ultrafino Intel Core i7, 16GB RAM e 240GB SSD', 3500.00);

INSERT INTO tb_produtos(produto, valor) VALUES ('Smart TV LED 40" Samsung Full HD 2 HDMI 1 USB Wi-Fi Integrado', 1475.54);

INSERT INTO tb_produtos(produto, valor) VALUES ('Smartphone LG K10 Dual Chip Android 7.0 4G Wi-Fi Câmera de 13MP', 629.99);

INSERT INTO tb_descricoes_tecnicas(fk_id_produto, descricao_tecnica) VALUES (1, 'O novo Inspiron Dell oferece um design elegante e tela infinita que amplia seus sentidos, mantendo a sofisticação e medidas compactas...');

INSERT INTO tb_descricoes_tecnicas(fk_id_produto, descricao_tecnica) VALUES (2, 'A smart TV da Samsung possui tela de 40" e oferece resolução Full HD, imagens duas vezes melhores que TVs HDs padrão...');

INSERT INTO tb_descricoes_tecnicas(fk_id_produto, descricao_tecnica) VALUES (3, 'Saia da mesmice. O smartphone LG está mais divertido, rápido, fácil, cheio de selfies e com tela HD de incríveis 5,3"...');

-- 1 para muitos -> um produto pode possuir varias imagens
CREATE TABLE tb_imagens(
	id_imagem INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fk_id_produto INT NOT NULL,
    url_imagem VARCHAR(200) NOT NULL,
    FOREIGN KEY(fk_id_produto) REFERENCES tb_produtos(id_produto)
);

INSERT INTO tb_imagens(fk_id_produto, url_imagem) VALUES (1, 'notebook_1.jpg'), (1, 'notebook_2.jpg'),
(1, 'notebook_3.jpg');

INSERT INTO tb_imagens(fk_id_produto, url_imagem) VALUES (2, 'smarttv_1.jpg'), (2, 'smarttv_2.jpg');

INSERT INTO tb_imagens(fk_id_produto, url_imagem) VALUES (3, 'smartphone_1.jpg');

-- Relacionamento muitos para muitos

CREATE TABLE tb_clientes(
    id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    idade INT(3) NOT NULL);


CREATE TABLE tb_pedidos(
    id_pedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fk_id_cliente INT NOT NULL,
    data_hora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(fk_id_cliente) REFERENCES tb_clientes(id_cliente)
);

CREATE TABLE tb_pedidos_produtos(
    fk_id_pedido INT NOT NULL,
    fk_id_produto INT NOT NULL,
    data_hora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(fk_id_pedido) REFERENCES tb_pedidos (id_pedido),
    FOREIGN KEY(fk_id_produto) REFERENCES tb_produtos (id_produto)
);

INSERT INTO tb_clientes(nome, idade) VALUES('Jorge', 29);	
INSERT INTO tb_pedidos(fk_id_cliente) VALUES(1);	
INSERT INTO tb_pedidos_produtos(fk_id_pedido, fk_id_produto) VALUES(1, 2);
INSERT INTO tb_pedidos_produtos(fk_id_pedido, fk_id_produto) VALUES(1, 3);
INSERT INTO tb_pedidos(fk_id_cliente) VALUES(1);
INSERT INTO tb_pedidos_produtos(fk_id_pedido, fk_id_produto) VALUES(2,3);
INSERT INTO tb_clientes(nome, idade) VALUES('Jamilton', 30);
INSERT INTO tb_pedidos(fk_id_cliente) VALUES(2);
INSERT INTO tb_pedidos_produtos(fk_id_pedido, fk_id_produto) VALUES(3,1);
INSERT INTO tb_clientes(nome, idade) VALUES('Luiz', 27);
INSERT INTO tb_clientes(nome, idade) VALUES('Alberto', 28);

-- Junções
-- Left Join -> Traz tudo que tem a esquerda e se tiver correspondentes, traz tbm os da esquerda.
SELECT * 
FROM tb_clientes LEFT JOIN tb_pedidos ON (tb_clientes.id_cliente = tb_pedidos.fk_id_cliente);

-- Left Join -> Traz tudo que tem a esquerda e se tiver correspondentes, traz tbm os da esquerda.
SELECT * 
FROM tb_produtos LEFT JOIN tb_imagens ON (tb_produtos.id_produto = tb_imagens.fk_id_produto)

-- Right Join -> Traz tudo que tem a direita e se tiver correspondentes, traz tbm os da direita.
SELECT * 
FROM tb_clientes RIGHT JOIN tb_pedidos ON (tb_clientes.id_cliente = tb_pedidos.fk_id_cliente);

-- INNER JOIN
INSERT INTO tb_produtos(produto, valor) VALUES ('HD Externo Portátil Seagate Expansion 1TB USB 3.0', 274.90);

SELECT * 
FROM tb_pedidos LEFT JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.fk_id_pedido)
LEFT JOIN tb_produtos ON (tb_pedidos_produtos.fk_id_produto = tb_produtos.id_produto);

SELECT * 
FROM tb_pedidos RIGHT JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.fk_id_pedido)
LEFT JOIN tb_produtos ON (tb_pedidos_produtos.fk_id_produto = tb_produtos.id_produto);

SELECT * 
FROM tb_pedidos RIGHT JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.fk_id_pedido)
RIGHT JOIN tb_produtos ON (tb_pedidos_produtos.fk_id_produto = tb_produtos.id_produto);

SELECT * 
FROM tb_pedidos INNER JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.fk_id_pedido)

SELECT * 
FROM tb_pedidos INNER JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.fk_id_pedido)
INNER JOIN tb_produtos ON (tb_pedidos_produtos.fk_id_produto = tb_produtos.id_produto);


SELECT *
FROM tb_produtos LEFT JOIN tb_descricoes_tecnicas ON (tb_produtos.id_produto = tb_descricoes_tecnicas.fk_id_produto);

SELECT *
FROM tb_produtos AS p LEFT JOIN tb_descricoes_tecnicas AS dt ON (p.id_produto = dt.fk_id_produto);

SELECT p.id_produto, p.produto, p.valor, dt.descricao_tecnica
FROM tb_produtos AS p LEFT JOIN tb_descricoes_tecnicas AS dt ON (p.id_produto = dt.fk_id_produto);

SELECT p.id_produto, p.produto, p.valor, dt.descricao_tecnica
FROM tb_produtos AS p LEFT JOIN tb_descricoes_tecnicas AS dt ON (p.id_produto = dt.fk_id_produto)
WHERE p.valor>500;

SELECT p.id_produto, p.produto, p.valor, dt.descricao_tecnica
FROM tb_produtos AS p LEFT JOIN tb_descricoes_tecnicas AS dt ON (p.id_produto = dt.fk_id_produto)
WHERE p.valor>500
ORDER BY p.valor ASC;