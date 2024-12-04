CREATE DATABASE db_vinil;
USE db_vinil;

CREATE TABLE TB_CLIENTE (
  ID INTEGER PRIMARY KEY AUTO_INCREMENT,
  NOME VARCHAR(50) NOT NULL,
  DOCUMENTO CHAR(14) NOT NULL,
  TIPO_USUARIO INTEGER NOT NULL,
  ROLE INTEGER DEFAULT 1 NOT NULL, -- PADRÃO 1 = USUÁRIO COMUM
  EMAIL VARCHAR(50) NOT NULL,
  SENHA VARCHAR(50) NOT NULL,
  FOTO VARCHAR(100),
  CRIADO_EM DATETIME DEFAULT NOW(),
  ATUALIZADO_EM DATETIME 
);

CREATE TABLE TB_ENDERECO (
  ID INTEGER PRIMARY KEY AUTO_INCREMENT,
  RUA VARCHAR(60) NOT NULL,
  COMPLEMENTO VARCHAR(30),
  BLOCO VARCHAR(20),
  TELEFONE CHAR(14) NOT NULL,
  BAIRRO VARCHAR(40) NOT NULL,
  CIDADE VARCHAR(40) NOT NULL,
  ESTADO CHAR(2) NOT NULL,
  CEP CHAR(8) NOT NULL,
  CLIENTE_ID INTEGER NOT NULL,
  FOREIGN KEY (CLIENTE_ID) REFERENCES TB_CLIENTE(ID)
);

INSERT INTO TB_CLIENTE (NOME, DOCUMENTO, TIPO_USUARIO, EMAIL, SENHA) VALUES ('João Vitor', '1234567890', 1, 'ramos.vitor@aluno.ifsp.edu.br', '12345678');
INSERT INTO TB_ENDERECO (RUA, COMPLEMENTO, BLOCO, TELEFONE, BAIRRO, CIDADE, ESTADO, CEP, CLIENTE_ID) VALUES ('Rua Tucuruvi, 123', NULL, NULL, '11999990000', 'Tucuruvi', 'São Paulo', 'SP', '12345678', 1);

CREATE TABLE TB_PRODUTO (
	ID INT PRIMARY KEY auto_increment,
    NOME VARCHAR(60) NOT NULL,
    DESCRICAO TEXT NOT NULL,
    VALOR DOUBLE NOT NULL,
    QUANTIDADE INT NOT NULL
);

CREATE TABLE TB_FOTOS_PRODUTO (
	ID INT PRIMARY KEY auto_increment,
    CAMINHO VARCHAR(70) NOT NULL,
    CAPA INT NOT NULL CHECK (CAPA = 0 OR CAPA = 1),
    PRODUTO_ID INT NOT NULL,
    FOREIGN KEY (PRODUTO_ID) REFERENCES TB_PRODUTO (ID)
);

INSERT INTO TB_PRODUTO (NOME, DESCRICAO, VALOR, QUANTIDADE) VALUES ('Disco Lilás - Djavan', 'O disco Lilás, lançado por Djavan em 1984, é um marco na música brasileira, 
mesclando elementos de MPB, jazz, funk e música pop com sofisticação e originalidade. Conhecido por sua sonoridade moderna para a época, o álbum traz arranjos elaborados 
e uma produção refinada. Entre os sucessos, destacam-se a faixa-título \"Lilás\", que se tornou um clássico, e outras como \"Infinito\" e \"Miragem\". O disco reflete a 
habilidade de Djavan como compositor e intérprete, explorando temas de amor, natureza e espiritualidade com poesia e melodia cativantes.', '189', '10'),
('Disco Djavan - Djavan', 'Djavan é o nono álbum de estúdio do cantor e compositor brasileiro Djavan, 
lançado em 1989 pela Columbia Records. Gravado inteiramente no Brasil, o álbum contou com a produção de Mazzola. Sua faixa-título foi 
o maior sucesso do álbum, que teve outros singles como "Vida Real", "Cigano" e "Mal de Mim".', 229, 5), 
('Coisa de Acender - Djavan', 'Coisa de Acender é um álbum de 1992 do cantor e compositor brasileiro Djavan, lançado pela Sony Music. Elogiado pela crítica e músicos, o 
álbum é mais pop que os anteriores. Entre os sucessos estão as quatro primeiras faixas: "Se...", "Boa Noite", "A Rota do Indíviduo" e "Linha do Equador".', 219, 15),
('Disco O Descobridor dos Sete Mares - Tim Maia', 'O Descobridor dos Sete Mares é um álbum de estúdio do cantor e compositor brasileiro Tim Maia, lançado em 1983 pela gravadora 
PolyGram através do selo semi-independente Lança, do produtor Jairo Pires. A canção que dá título ao álbum foi escrita pelos compositores Michel e Gilson Mendonça.', '159', '4'),
('Disco Samba Esquema Novo - Jorge Ben Jor', 'Samba Esquema Novo é o álbum de estreia do cantor, violonista e compositor brasileiro Jorge Ben Jor. Foi lançado em LP em 1963, 
contando com o grupo de samba jazz Meirelles e os Copa 5 como banda de apoio. Em 1994, a banda Mundo Livre S/A fez uma referência ao título do álbum no seu primeiro disco Samba 
Esquema Noise.', '209', '6'),
('Disco A Tábua de Esmeralda - Jorge Ben Jor', 'A Tábua de Esmeralda é o décimo primeiro álbum de estúdio do cantor brasileiro Jorge Ben. Foi lançado em LP em 1974. O álbum é 
notável como o último projeto de Jorge Ben no qual o uso do violão se faz intensivo.', '259', '3'),
('Disco África Brasil - Jorge Ben Jor', 'África Brasil é o décimo quarto álbum de estúdio do cantor brasileiro Jorge Ben Jor, lançado em LP em 1976 pela Philips Records. Primeiro 
álbum desde Força Bruta, de 1970, que não conta com Paulinho Tapajós na produção, o disco representou um marco na carreira de Ben, sendo o disco no qual ele definitivamente trocou 
o violão acústico pela guitarra elétrica, movimento já iniciado no álbum anterior, e consolidou uma fusão de gêneros musicais e de técnicas composicionais entre a música afro-brasileira 
e a música pop negra estadunidense, algo no qual o compositor trabalhava desde o começo de sua trajetória.', '189', '15');

INSERT INTO TB_FOTOS_PRODUTO (CAMINHO, CAPA, PRODUTO_ID) VALUES ('uploads/fotosProdutos/lilas.jpg', '1', '1'),
('uploads/fotosProdutos/djavan.jpg', '1', '2'),
('uploads/fotosProdutos/coisa_de_acender.jpg', '1', '3'),
('uploads/fotosProdutos/setemares.jpg', '1', '4'),
('uploads/fotosProdutos/esquemanovo.jpg', '1', '5'),
('uploads/fotosProdutos/tabuaesmeraldajpg.jpg', '1', '6'),
('uploads/fotosProdutos/africabrasil.jpg', '1', '7');