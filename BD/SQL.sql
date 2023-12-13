DROP DATABASE IF EXISTS M2; 
CREATE DATABASE M2; 
USE M2;
 
CREATE TABLE Caminhao( 
    id int PRIMARY KEY AUTO_INCREMENT, 
    placa varchar(7) NOT NULL, 
    modelo varchar (100) NOT NULL, 
    nome_motorista varchar (200) NOT NULL, 
    ano_fabricacao float (4) NOT NULL,
    valor_diaria float (10) NOT NULL
);