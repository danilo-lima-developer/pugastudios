-- INSERINDO DADOS NO BANCO DE DADOS

-- TABELA tb_tipo_usuario

 INSERT INTO pugastudios.tb_tipo_usuario (`id_tipo_usuario`, `descricao`) VALUES
(1, 'ADM'),
(2, 'Usuário');

-- TABELA tb_usuario

INSERT INTO pugastudios.tb_usuario (`nome`, `nickname`, `email`, `senha`, `fone`, `id_tipo_usuario`, `id_criador`, `id_ultimo_editor`, `data_registro`, `data_modificacao`, `ativo`) VALUES 
('DANILO LIMA DA SILVA', 'antilopen', 'danilolimas.pe@gmail.com', MD5('pugastudios'), '(81) 9.9412-6473', '1', '1', '1', current_timestamp(), current_timestamp(), '1');

-- TABELA tb_desenvolvedora_distribuidora

INSERT INTO pugastudios.tb_desenvolvedora_distribuidora
(descricao)
VALUES
('Tecent'),
('Sony Interactive Entertainment'),
('Apple'),
('Xbox Game Studios'),
('Nitendo'),
('Google'),
('Activision Blizzard'),
('NetEasy'),
('Eletronic Arts'),
('Take-two Interactive'),
('Ubisoft'),
('Rockstar Games'),
('Square Enix'),
('Capcom'),
('Warner Bros. Interactive Entertainment'),
('Konami'),
('Namco Bandai'),
('Bethesda Game Studios'),
('Sega'),
('Outros');


-- TABELA tb_estilo

INSERT INTO pugastudios.tb_estilo
(descricao)
VALUES
('Ação'),
('Aventura'),
('RPG'),
('Simulação'),
('Puzzle'),
('Esportes'),
('Estratégia'),
('Outros');


