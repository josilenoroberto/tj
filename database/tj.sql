CREATE database tj DEFAULT  charset utf8 COLLATE utf8_general_ci;
use tj;
CREATE table usuario(
idUsuario int not null auto_increment PRIMARY key,
nome varchar(100) not null,
cpf char(11),
logradouro enum("Rua","Aveninda","Outros"),
endereco VARCHAR(100)not null,
numero VARCHAR(10),
bairro VARCHAR(100),
cep VARCHAR(10),
cidade VARCHAR(100),
uf VARCHAR(2),
circuito VARCHAR(10),
dtBatismo date,
dNascimento date,
status enum("Ativo","Inativo") not null,
obs TEXT
)DEFAULT  charset = utf8;


CREATE TABLE relatorio(
idRelatorio int not null auto_increment PRIMARY key,
publicacoes tinyInt,
videos tinyInt,
horas decimal(5,2),
visitas tinyInt unsigned,
estudos tinyInt unsigned,
dat date,
idUsuario int not null,
FOREIGN key(idUsuario) REFERENCES usuario(idUsuario)
)DEFAULT charset = utf8;

CREATE TABLE login(
idlogin int not null auto_increment PRIMARY key,
user varchar(50) not NULL,
senha VARCHAR (100) NOT null,
permissoes enum("1","2","3"),
idUsuario int not null,
FOREIGN key(idUsuario) REFERENCES usuario(idUsuario)

)DEFAULT charset = utf8;