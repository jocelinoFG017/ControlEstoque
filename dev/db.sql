Drop Schema estoque;
CREATE database IF NOT EXISTS estoque;

use estoque;


-- Tabela Produtos

CREATE TABLE IF NOT EXISTS produto (
  idProduto smallINT(11) NOT NULL auto_increment,
  nome VARCHAR(45) NOT NULL,
  descricao VARCHAR(70) NOT NULL,
  valor INTEGER NOT NULL,
  quantidade VARCHAR(45) NOT NULL,
  -- img VARCHAR(100),
  data_cadastro DATE NOT NULL,
  PRIMARY KEY (idProduto)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8 COLLATE=utf8_general_ci;


-- Tabela Usuarios

CREATE TABLE IF NOT EXISTS usuario(
  idUsuario INT NOT NULL auto_increment,
  nome VARCHAR(45) NOT NULL,
  login VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  cargo VARCHAR(45) NOT NULL,
  PRIMARY KEY(idUsuario)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8 COLLATE=utf8_general_ci;


--  Tabela Cargo

CREATE TABLE IF NOT EXISTS cargo(
  idCargo INT NOT NULL auto_increment,
  usuario INT,
  PRIMARY KEY(idCargo),
  CONSTRAINT fk_usuario FOREIGN KEY (usuario) REFERENCES Usuario (idUsuario)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8 COLLATE=utf8_general_ci;







 insert into usuario (idUsuario, nome, login, senha, cargo)
values(1,'Santiago', 'sgt',123456789, 1);

 insert into cargo(idCargo, usuario)
 values(1, 1);


insert into produto(idProduto, nome, descricao, valor, quantidade, data_cadastro)
values(1, 'Tomate', 'Leguminoso', 23, '2', '12:12:12')