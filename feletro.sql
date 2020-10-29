create table pedidos(
	idp int auto_increment,
    nomec varchar(30) not null,
    endereco varchar(45),
    telefone varchar(45),
    nomep varchar(20),
    valorUni decimal(6,2),
    quantidade varchar(2),
    valorTot decimal(6,2),
    primary key (idp)
);
select * from pedidos;