CREATE DATABASE fadtech;
USE fadtech;

-- Tabela de usuários
CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL,
    cargo ENUM('aluno', 'admin', 'professor') NOT NULL,
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de módulos
CREATE TABLE modulo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT
);

-- Tabela de slides/materiais
CREATE TABLE material (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modulo_id INT NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    link VARCHAR(255) NOT NULL,
    descricao TEXT,
    FOREIGN KEY (modulo_id) REFERENCES modulo(id)
);

-- Tabela do fórum
CREATE TABLE forum (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    mensagem TEXT NOT NULL,
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES user(id)
);

-- Tabela de respostas do fórum
CREATE TABLE resposta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    forum_id INT NOT NULL,
    user_id INT NOT NULL,
    mensagem TEXT NOT NULL,
    data_resposta DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (forum_id) REFERENCES forum(id),
    FOREIGN KEY (user_id) REFERENCES user(id)
);
