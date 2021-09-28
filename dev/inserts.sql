use estoque;

-- select* from usuario;

 -- insert into cargo()

 insert into usuario (idUsuario, nome, login, senha, cargo)
values(1,'Santiago', 'sgt',123456789, 1);

 insert into cargo(idCargo, usuario)
 values(1, 1);


insert into produto(idProduto, nome, descricao, valor, quantidade, img, data_cadastro)
values(1, 'Tomate', 'Leguminoso', 23, '2', NULL, '12:12:12')