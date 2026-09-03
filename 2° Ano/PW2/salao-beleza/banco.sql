-- =============================================
-- Banco de Dados: Salão de Beleza / Barbearia
-- Sistema de Agendamentos (CRUD)
-- =============================================

CREATE DATABASE IF NOT EXISTS salao_beleza
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE salao_beleza;

-- Tabela de agendamentos
CREATE TABLE IF NOT EXISTS agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(120),
    servico VARCHAR(100) NOT NULL,
    profissional VARCHAR(100) NOT NULL,
    data DATE NOT NULL,
    hora TIME NOT NULL,
    observacao TEXT,
    status ENUM('agendado','concluido','cancelado') DEFAULT 'agendado',
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Dados de exemplo
INSERT INTO agendamentos (cliente, telefone, email, servico, profissional, data, hora, observacao, status) VALUES
('Maria Silva', '(11) 98765-4321', 'maria@email.com', 'Corte de Cabelo Feminino', 'Ana Souza', '2026-09-05', '10:00:00', 'Corte em camadas', 'agendado'),
('João Santos', '(11) 91234-5678', 'joao@email.com', 'Corte e Barba', 'Carlos Lima', '2026-09-05', '14:30:00', NULL, 'agendado'),
('Paula Costa', '(11) 99876-5432', 'paula@email.com', 'Manicure e Pedicure', 'Fernanda Rocha', '2026-09-06', '09:00:00', 'Unhas decoradas', 'concluido'),
('Pedro Almeida', '(11) 91111-2222', 'pedro@email.com', 'Barba Completa', 'Carlos Lima', '2026-09-07', '11:00:00', NULL, 'cancelado');