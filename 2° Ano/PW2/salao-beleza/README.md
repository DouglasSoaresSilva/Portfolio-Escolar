# 💇‍♀️ Salão de Beleza / Barbearia Elegance

> Sistema de agendamentos online completo para salões de beleza e barbearias, desenvolvido como projeto educacional de Programação Web.

## 📋 Descrição

O ***Elegance*** é uma aplicação web que permite gerenciar agendamentos de forma simples e elegante. Os clientes podem agendar serviços, consultar agendamentos e receber confirmações por e-mail. Administradores podem criar, atualizar, visualizar e deletar agendamentos.

**Disciplina:** Programação Web 2 (PW2)  
**Período:** 2º Ano - Articulação Médio Superior  
**Repositório:** [Portfolio-Escolar](https://github.com/DouglasSoaresSilva/Portfolio-Escolar)

---

## 🎯 Funcionalidades

✅ **Gerenciamento Completo (CRUD)**
- **Create:** Agendar novo atendimento
- **Read:** Visualizar lista de agendamentos
- **Update:** Editar agendamentos existentes
- **Delete:** Cancelar agendamentos com confirmação

✅ **Interface Intuitiva**
- Design responsivo (mobile-first)
- Modal para criar/editar agendamentos
- Confirmação antes de deletar
- Mensagens de feedback (sucesso/erro)
- Navbar com menu hamburger

✅ **Dados & Validação**
- Validação de e-mail em tempo real
- Campos obrigatórios destacados
- Formatação automática de datas e horas
- Status de agendamento (Agendado, Concluído, Cancelado)

✅ **Banco de Dados**
- MySQL com suporte a UTF-8 (acentos e caracteres especiais)
- Tabela normalizada com timestamps
- Dados de exemplo pré-carregados

---

## 🛠️ Tecnologias Utilizadas

| Camada | Tecnologia |
|--------|-----------|
| **Front-end** | HTML5, CSS3, JavaScript (Vanilla) |
| **Back-end** | PHP 7.4+ |
| **Banco de Dados** | MySQL 5.7+ |
| **Design** | Grid/Flexbox, Google Fonts, Custom CSS |

---

## 📁 Estrutura do Projeto

```
salao-beleza/
├── index.php              # Página principal (lista + modal)
├── banco.sql              # Script SQL para criar o banco
├── css/
│   └── estilo.css         # Estilos completos (responsivo)
├── js/
│   └── validacao.js       # Lógica de modal, form e exclusão
└── php/
    ├── config.php         # Conexão com banco de dados
    └── agendamento.php    # Processamento de CRUD (POST)
```

### Arquivos Principais

**`index.php`** (346 linhas)
- Renderiza a página completa com HTML e PHP
- Busca agendamentos do banco
- Exibe modal para criar/editar
- Mostra mensagens de feedback

**`banco.sql`** (43 linhas)
- Cria banco `salao_beleza` com charset UTF-8
- Define tabela `agendamentos` com 10 colunas
- Insere 4 registros de exemplo para teste

**`css/estilo.css`**
- Design sem Bootstrap (CSS puro)
- Responsive: tablet e mobile
- Cores: dourado/preto com gradientes
- Fontes: Fraunces (títulos) + Poppins (texto)

**`js/validacao.js`**
- Abre/fecha modais com clique
- Valida formulário antes de enviar
- Pede confirmação ao deletar
- Fecha alertas com botão "×"

**`php/config.php`**
- Cria conexão PDO com MySQL
- Trata erros de conexão

**`php/agendamento.php`**
- Processa ações: `criar`, `atualizar`, `deletar`
- Valida e-mail
- Redireciona com código de mensagem

---

## 🚀 Como Rodar

### 1️⃣ Preparar o Banco de Dados

```bash
# Abra phpMyAdmin (http://localhost/phpmyadmin)
# 1. Clique em "Importar"
# 2. Selecione o arquivo banco.sql
# 3. Clique em "Executar"
```

Ou via terminal MySQL:
```bash
mysql -u root -p < banco.sql
```

### 2️⃣ Configurar a Conexão

Abra `php/config.php` e ajuste os dados de acesso ao banco:

```php
$dsn = 'mysql:host=localhost;dbname=salao_beleza;charset=utf8mb4';
$usuario = 'root';        // seu usuário MySQL
$senha = '';              // sua senha
```

### 3️⃣ Rodar Localmente

**Com Apache/PHP:**
```bash
# Coloque a pasta em htdocs ou www
cd C:\xampp\htdocs\salao-beleza
# Abra http://localhost/salao-beleza
```

**Com PHP embutido:**
```bash
php -S localhost:8000
# Acesse http://localhost:8000
```

### 4️⃣ Testar as Funcionalidades

- 📌 **Novo Agendamento:** Clique em "+ Novo Agendamento"
- ✏️ **Editar:** Clique no botão "Editar" de uma linha
- 🗑️ **Deletar:** Clique em "Excluir" e confirme
- 📊 **Visualizar:** A tabela mostra todos os agendamentos

---

## 📝 Exemplo de Dados

A tabela `agendamentos` contém:

| Campo | Tipo | Exemplo |
|-------|------|---------|
| id | INT | 1 |
| cliente | VARCHAR(100) | Maria Silva |
| telefone | VARCHAR(20) | (11) 98765-4321 |
| email | VARCHAR(120) | maria@email.com |
| servico | VARCHAR(100) | Corte de Cabelo Feminino |
| profissional | VARCHAR(100) | Ana Oliveira |
| data | DATE | 2026-09-05 |
| hora | TIME | 10:00:00 |
| observacao | TEXT | Corte em camadas |
| status | ENUM | agendado \| concluido \| cancelado |
| criado_em | TIMESTAMP | 2026-09-03 14:30:45 |

---

## 🎨 Design & UX

### Paleta de Cores
- Creme: `#EEE9DF` (fundo geral da página)
- Creme claro: `#F7F3EA` (fundo do modal)
- Papel: `#FFFDF8` (cards, campos)
- Taupe: `#C9C1B1` (bordas, botão secundário)
- Azul-petróleo: `#2C3B4D` (botões primários, cabeçalho da tabela, badges concluído)
- Laranja: `#FFB162` (destaques, CTA, foco dos campos)
- Terracota: `#A35139` (exclusão, erros, hovers quentes)
- Noite: `#1B2632` (navbar, hero, rodapé, textos)

### Responsividade
- ✅ Desktop (1200px+)
- ✅ Tablet (768px - 1199px)
- ✅ Mobile (< 768px)

Menu hamburger aparece em telas menores.

---

## 🔐 Segurança

- ✅ Validação de entrada em PHP (`htmlspecialchars`, `filter_var`)
- ✅ Prepared statements (PDO) contra SQL injection
- ✅ Requisições POST isoladas em arquivo separado
- ⚠️ **TODO:** Implementar autenticação/login
- ⚠️ **TODO:** CSRF tokens nos formulários

---

## 📚 Aprendizados & Conceitos

Este projeto aborda:

1. **Back-end PHP**
   - Variáveis superglobais (`$_GET`, `$_POST`)
   - Conexão PDO com MySQL
   - Prepared statements
   - Redirecionamento e sessões

2. **Front-end JS/HTML/CSS**
   - DOM manipulation
   - Event listeners
   - Validação de formulário
   - Layout responsivo com CSS Grid/Flexbox

3. **Banco de Dados**
   - SQL: CREATE, INSERT, SELECT, UPDATE, DELETE
   - Relacionamentos (ENUM)
   - Charset UTF-8 para acentos

4. **UX/UI**
   - Modais e feedback visual
   - Confirmação antes de ações destrutivas
   - Design inclusivo (ARIA labels)

---

## 🐛 Melhorias Futuras

### Não Implementado
- [ ] Autenticação de usuário / login
- [ ] CSRF tokens
- [ ] Envio de e-mail ao agendar
- [ ] Filtro por data na tabela
- [ ] Exportação para PDF/Excel
- [ ] Integração com calendário visual
- [ ] Notificações/lembretes
- [ ] Sistema de comentários/avaliações

### Possíveis Melhorias
- Implementar HTTPS
- Cache de agendamentos
- Paginação na tabela (se muitos registros)
- Dark mode
- Suporte a múltiplas unidades
- Relatórios de faturamento

---

## 👨‍💻 Autor

**Douglas Soares Silva**  
Estudante de Desenvolvimento de Sistemas - Articulação Médio Superior

---

## 📄 Licença

Este projeto é de uso educacional. Sinta-se livre para estudar e modificar.

---

## 🎓 Referências & Recursos

- [Documentação PHP Oficial](https://www.php.net/manual/pt_BR/)
- [MDN Web Docs](https://developer.mozilla.org/pt-BR/)
- [W3Schools SQL Tutorial](https://www.w3schools.com/sql/)
- [Google Fonts](https://fonts.google.com/)

---

**Última atualização:** Setembro de 2026  
**Status:** ✅ Funcional (versão 2.0)
