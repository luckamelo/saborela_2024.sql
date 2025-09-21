CREATE DATABASE IF NOT EXISTS saborela_2024;
USE saborela_2024;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT,
    categoria VARCHAR(50),
    prioridade ENUM('Baixa','Média','Alta') DEFAULT 'Média',
    data_hora DATETIME,
    concluido TINYINT(1) DEFAULT 0
);
