-- Active: 1668722476222@@127.0.0.1@3310@barmita


CREATE TABLE cliente (
    cpf varchar(11) PRIMARY KEY,
    nome varchar(50),
    telefone varchar(11),
    email varchar(60),
    dataNascimento date,
    senha varchar(255),
    fk_cardapio_idCardapio integer
);

CREATE TABLE produto (
    idProduto integer PRIMARY KEY,
    descricao varchar(60),
    qtdProduto integer,
    precoProduto float,
    dataCadastro date,
    situacao varchar(25)
);

CREATE TABLE cardapio (
    idCardapio integer PRIMARY KEY,
    descricao varchar(60),
    valor float,
    categorias varchar(25),
    nomeItem varchar(25),
    adicional varchar(25)
);

CREATE TABLE reserva (
    idReserva integer PRIMARY KEY,
    data date,
    situacao varchar(25),
    qtdPessoa integer,
    horario time,
    ocasiao varchar(60),
    fk_funcionario_cpf varchar(11),
    fk_cliente_cpf varchar(11),
    fk_mesa_idMesa integer
);

CREATE TABLE mesa (
    idMesa integer PRIMARY KEY,
    qtdCadeira integer,
    qtdMesa integer,
    localAmbiente varchar(25),
    situacao varchar(60),
    dataCadastro date
);

CREATE TABLE funcionario (
    cpf varchar(11) PRIMARY KEY,
    nome varchar(50),
    endereco varchar(100),
    telefone varchar(11),
    email varchar(60),
    genero varchar(25),
    dataNascimento date
);

CREATE TABLE senha (
    senhaAtual integer,
    dataAtual date,
    senha1 integer,
    data1 date,
    senha2 integer,
    data2 date,
    senha3 integer,
    data3 date,
    tentativa integer,
    situacao integer,
    fk_funcionario_cpf varchar(11)
);

CREATE TABLE possui (
    fk_cardapio_idCardapio integer,
    fk_produto_idProduto integer
);
 
ALTER TABLE cliente ADD CONSTRAINT FK_cliente_2
    FOREIGN KEY (fk_cardapio_idCardapio)
    REFERENCES cardapio (idCardapio)
    ON DELETE CASCADE;
 
ALTER TABLE reserva ADD CONSTRAINT FK_reserva_2
    FOREIGN KEY (fk_funcionario_cpf)
    REFERENCES funcionario (cpf)
    ON DELETE CASCADE;
 
ALTER TABLE reserva ADD CONSTRAINT FK_reserva_3
    FOREIGN KEY (fk_cliente_cpf)
    REFERENCES cliente (cpf)
    ON DELETE CASCADE;
 
ALTER TABLE reserva ADD CONSTRAINT FK_reserva_4
    FOREIGN KEY (fk_mesa_idMesa)
    REFERENCES mesa (idMesa)
    ON DELETE CASCADE;
 
ALTER TABLE senha ADD CONSTRAINT FK_senha_1
    FOREIGN KEY (fk_funcionario_cpf)
    REFERENCES funcionario (cpf)
    ON DELETE RESTRICT;
 
ALTER TABLE possui ADD CONSTRAINT FK_possui_1
    FOREIGN KEY (fk_cardapio_idCardapio)
    REFERENCES cardapio (idCardapio)
    ON DELETE RESTRICT;
 
ALTER TABLE possui ADD CONSTRAINT FK_possui_2
    FOREIGN KEY (fk_produto_idProduto)
    REFERENCES produto (idProduto)
    ON DELETE RESTRICT;