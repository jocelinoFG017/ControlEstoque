Drop Schema estoque;
CREATE database IF NOT EXISTS estoque;

use estoque;


-- Tabela Produtos

CREATE TABLE IF NOT EXISTS Produto (
  idProduto smallINT(11) NOT NULL auto_increment,
  nome VARCHAR(45) NOT NULL,
  descricao VARCHAR(70) NOT NULL,
  valor DECIMAL(6,2) NOT NULL,
  quantidade VARCHAR(45) NOT NULL,
  img VARCHAR(100),
  data_cadastro DATE NOT NULL,
  PRIMARY KEY (idProduto)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8 COLLATE=utf8_general_ci;


-- Tabela Usuarios

CREATE TABLE IF NOT EXISTS Usuario(
  idUsuario INT NOT NULL auto_increment,
  nome VARCHAR(45) NOT NULL,
  login VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  cargo VARCHAR(45) NOT NULL,
  PRIMARY KEY(idUsuario)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8 COLLATE=utf8_general_ci;


--  Tabela Cargo

CREATE TABLE IF NOT EXISTS Cargo(
  idCargo INT NOT NULL auto_increment,
  usuario INT,
  PRIMARY KEY(idCargo),
  CONSTRAINT fk_usuario FOREIGN KEY (usuario) REFERENCES Usuario (idUsuario)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8 COLLATE=utf8_general_ci;






