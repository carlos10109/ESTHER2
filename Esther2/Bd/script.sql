drop database  if exists bolsas;
create database bolsas;
use bolsas;

create table Usuario(
Id int Not null auto_increment primary key,
NombreCompleto varchar(120), 
Tipo int(30),
Correo varchar(150), 
Password varchar(100));

create table bolsas(
Id int Not null auto_increment primary key,
Nombre varchar(150), 
Descripcion varchar(250), 
Tipo int(150),
Precio float,
Existencia int(150),
Imagen varchar(150));

create table Pedido(
Id Int Not null auto_increment primary key,
IdUsuarios int(150),
IdBolsas int(150),
Precio float,
Cantidad int(150),
FechaPedido date,
FechaEntrega date,
DomicilioEntrega varchar(250),
foreign key(IdUsuarios) References Usuarios(Id),
foreign key(IdDulce) references Pedido(Id));