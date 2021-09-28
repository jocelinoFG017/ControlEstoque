Drop Schema estoque;
CREATE database IF NOT EXISTS estoque;

use estoque;
SET FOREIGN_KEY_CHECKS=0;

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
  idCargo INT NOT NULL,
  PRIMARY KEY(idUsuario)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8 COLLATE=utf8_general_ci;

--  Tabela Cargo

CREATE TABLE IF NOT EXISTS cargo(
  idCargo INT NOT NULL auto_increment,
  descricao VARCHAR(45) NOT NULL,
  PRIMARY KEY(idCargo),
  idUsuario int not null,
  CONSTRAINT fk_usuario FOREIGN KEY (idUsuario) REFERENCES usuario (idUsuario)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8 COLLATE=utf8_general_ci;


-- Populando tabelas

insert into usuario (idUsuario, nome, login, senha, idCargo)
values(1,'Santiago','sgt',123456789, 1),
      (2,'Gaules','gaules@gau.com',123, 2),
      (3,'Victoria','vick@gmail.com',123, 2);

 insert into cargo(idCargo, descricao, idUsuario)
 values (1, 'administrador',1),
        (2, 'usuario',2),
        (3, 'usuario',3);

insert into produto(idProduto, nome, descricao, valor, quantidade, data_cadastro)
values(1, 'Tomate', 'Leguminoso', 23, '2', '12:12:12'),
      (2, 'Cenoura', 'Vegetal', 22, '3', '13:12:12'),
      (3, 'Batata', 'Tuberculo', 21, '4', '23:22:12')