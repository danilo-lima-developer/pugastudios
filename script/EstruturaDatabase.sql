-- CRIANDO BANCO DE DADOS

CREATE DATABASE pugastudios COLLATE utf8mb4_general_ci;

-- SELECIONANDO BANCO DE DADOS

USE pugastudios;

-- TABLEA PARA SESSIONS DO CODEIGNITER3

CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` VARCHAR(128) NOT NULL,
        `ip_address` VARCHAR(45) NOT NULL,
        `TIMESTAMP` INT(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_TIMESTAMP` (`TIMESTAMP`)
);

-- TABELAS DIMENSÕES

CREATE TABLE tb_tipo_usuario(
    id_tipo_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(50) NOT NULL COLLATE utf8_general_ci
);

CREATE TABLE tb_estilo(
    id_estilo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(100) NOT NULL COLLATE utf8_general_ci
);

CREATE TABLE tb_desenvolvedora_distribuidora(
    id_desenvolvedora_distribuidora INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(100) NOT NULL COLLATE utf8_general_ci
);

-- TABELAS FATOS COM CHAVES ESTRANGEIRAS

CREATE TABLE tb_usuario(
    id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) COLLATE utf8_general_ci,
    nickname VARCHAR(20) NOT NULL,
    email VARCHAR(100),
    senha VARCHAR(32) NOT NULL,
    fone VARCHAR(30) COLLATE utf8_general_ci,
    id_tipo_usuario INT(3) NOT NULL,
    id_criador INT(3) NOT NULL,
    id_ultimo_editor INT(3) NOT NULL,
    data_registro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    data_modificacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(),
    ativo TINYINT
);

ALTER TABLE `tb_usuario` ADD CONSTRAINT `fk_id_tipo_usuario` FOREIGN KEY ( `id_tipo_usuario` ) REFERENCES `tb_tipo_usuario` ( `id_tipo_usuario` ) ;


CREATE TABLE tb_jogos(
    id_jogo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(50) NOT NULL COLLATE utf8_general_ci,
    ano_publicacao DATE,
    id_estilo INT(3) NOT NULL,
    id_desenvolvedora_distribuidora INT(3) NOT NULL,
    nota float,
    id_usuario INT(3) NOT NULL
    
);

ALTER TABLE `tb_jogos` ADD CONSTRAINT `fk_id_estilo` FOREIGN KEY ( `id_estilo` ) REFERENCES `tb_estilo` ( `id_estilo` ) ;

ALTER TABLE `tb_jogos` ADD CONSTRAINT `fk_id_desenvolvedora_distribuidora` FOREIGN KEY ( `id_desenvolvedora_distribuidora` ) REFERENCES `tb_desenvolvedora_distribuidora` ( `id_desenvolvedora_distribuidora` ) ;

ALTER TABLE `tb_jogos` ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY ( `id_usuario` ) REFERENCES `tb_usuario` ( `id_usuario` ) ;
