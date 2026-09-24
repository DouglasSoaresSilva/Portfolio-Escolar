-- =============================================
-- Banco de Dados: Salão de Beleza / Barbearia
-- Sistema de Agendamentos (CRUD)
--
-- Como usar: execute este script no phpMyAdmin
-- (aba "SQL" ou "Importar") para criar o banco,
-- recriar a tabela do zero e carregar dados de exemplo.
-- =============================================

-- Cria o banco com UTF-8 completo (suporta acentos e emojis)
CREATE DATABASE IF NOT EXISTS salao_beleza
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

-- Seleciona o banco para os comandos abaixo
USE salao_beleza;

-- Apaga a tabela antiga (se existir) para garantir um schema limpo,
-- sem colunas corrompidas ou codificação quebrada de versões anteriores
DROP TABLE IF EXISTS agendamentos;

-- Tabela principal: um registro por agendamento
CREATE TABLE agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- identificador único, gerado sozinho
    cliente VARCHAR(100) NOT NULL,       -- nome de quem agendou (obrigatório)
    telefone VARCHAR(20) NOT NULL,       -- telefone de contato (obrigatório)
    email VARCHAR(120) NOT NULL,         -- e-mail (obrigatório desde a v2)
    servico VARCHAR(100) NOT NULL,       -- serviço escolhido (ex: "Corte e Barba")
    profissional VARCHAR(100) NOT NULL,  -- profissional responsável
    data DATE NOT NULL,                  -- dia do atendimento (AAAA-MM-DD)
    hora TIME NOT NULL,                  -- horário do atendimento (HH:MM:SS)
    observacao TEXT,                     -- notas livres (opcional, aceita NULL)
    status ENUM('agendado','concluido','cancelado') DEFAULT 'agendado', -- situação atual
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- carimbo de criação automática
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dados de exemplo para testar listagem, edição e exclusão
INSERT INTO agendamentos (cliente, telefone, email, servico, profissional, data, hora, observacao, status) VALUES
('Maria Silva', '(11) 98765-4321', 'maria@email.com', 'Corte de Cabelo Feminino', 'Ana Souza', '2026-09-05', '10:00:00', 'Corte em camadas', 'agendado'),
('João Paulo', '(11) 91234-5678', 'joao@email.com', 'Corte e Barba', 'Carlos Lima', '2026-09-05', '14:30:00', NULL, 'agendado'),
('Paula Costa', '(11) 99876-5432', 'paula@email.com', 'Manicure e Pedicure', 'Fernanda Rocha', '2026-09-06', '09:00:00', 'Unhas decoradas', 'concluido'),
('Cauã Roberto', '(11) 91111-2222', 'pedro@email.com', 'Barba Completa', 'Carlos Lima', '2026-09-07', '11:00:00', NULL, 'cancelado');
