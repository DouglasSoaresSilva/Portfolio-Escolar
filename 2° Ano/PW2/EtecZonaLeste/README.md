# 🎓 Etec da Zona Leste - Website

Um projeto escolar de recriação do site da **Etec da Zona Leste**, desenvolvido como trabalho da disciplina de Programação Web 2 (PW2).

## 📋 Sobre o Projeto

Este projeto implementa um website funcional para a Etec da Zona Leste, incluindo informações sobre cursos, gestão, eventos e contato. O site foi desenvolvido utilizando **PHP** e **CSS**, com componentes do **Bootstrap** para responsividade e design moderno.

## 🛠️ Tecnologias Utilizadas

- **PHP** - Backend e processamento de formulários.
- **HTML5** - Estrutura das páginas.
- **CSS3** - Estilização e layouts personalizados.
- **Bootstrap 5.3** - Framework CSS para responsividade.
- **Google Fonts** - Tipografia (Roboto).
- **JavaScript** - Script de validação de campos do formulário.

## 📁 Estrutura do Projeto

```
EtecZonaLeste/
├── index.php           # Página inicial (Home)
├── cursos.php          # Página de informações sobre cursos
├── gestao.php          # Página de gestão
├── contato.php         # Página e formulário de contato
├── processar.php       # Script de processamento de formulários
├── script.js           # Script de validação de campos
└── CSS/
    └── style.css       # Estilos personalizados
```

## 📄 Páginas Principais

### `index.php` (Home)
- Navegação principal
- Seção destaque com informações sobre imposto de renda
- Galeria de eventos em destaque
- Agenda de eventos
- Links úteis
- Footer com informações de contato

### `cursos.php`
- Informações sobre os cursos técnicos oferecidos
- Modalidades:
  - Cursos Técnicos - Modalidade Presencial
  - Ensino Médio integrado ao técnico (M-TEC)
  - Articulação dos Ensinos Médio – Técnico e Superior (AMS)

### `gestao.php`
- Informações sobre gestão escolar
- Estrutura administrativa

### `contato.php`
- Formulário de contato
- Informações de localização e telefone
- Horário de funcionamento

### `processar.php`
- Backend para processar dados enviados pelo formulário
- Validação e manipulação de dados

### `script.js` - Funcionalidades Client-Side
- ✅ **Validação de campos:**
  - Nome (mínimo 3 caracteres)
  - E-mail (validação de formato)
  - Assunto (obrigatório)
  - Mensagem (mínimo 10 caracteres, máximo 500)
  - Aceite à Política de Privacidade
- 📞 **Máscara de telefone** - Formatação automática: (XX) XXXXX-XXXX
- 📝 **Contador de caracteres** - Feedback visual enquanto digita
- 🎨 **Estado visual dos campos** - Classes CSS para erros e sucesso
- ⚙️ **Event listeners** para validação ao sair dos campos (blur)

### `CSS/style.css` - Estilos Globais
- 🎨 **Variáveis CSS customizadas:**
  - Cores primárias (vermelho Etec e tons de verde)
  - Tipografia (Roboto)
  - Paleta de cores para temas claro/escuro
- 📱 **Responsive Design:**
  - Grid layouts com `display: grid`
  - Breakpoints: 900px (tablet) e 600px (mobile)
  - Flexbox para navegação e componentes
- 🎯 **Componentes estilizados:**
  - Navegação com hover effects
  - Cards com efeitos de transição
  - Agenda de eventos
  - Links úteis com sombras
  - Footer escuro com grid de 3 colunas

### 📽️Video

https://github.com/user-attachments/assets/fe7d6bcb-ab01-484f-8ba1-60e19d99754e


## 🎨 Recursos

✨ Design responsivo com Bootstrap  
📱 Interface adaptada para dispositivos móveis  
🔍 Barra de pesquisa na navegação  
📋 Navegação intuitiva com dropdowns  
📧 Formulário de contato funcional  
🎪 Agenda de eventos  
🏢 Informações institucionais

## 👥 Contato

- **Telefone**: (11) 2045-4000 / 2045-4016
- **Horário**: Seg. a Sex. das 09h às 21h
- **Localização**: São Paulo - SP

## 📝 Informações Acadêmicas

- **Instituição**: Centro Paula Souza
- **Disciplina**: Programação Web 2 (PW2)
- **Tipo**: Projeto Escolar
- **Ano**: 2026

## ⚖️ Licença

© 2026 - Centro Paula Souza. Todos os direitos reservados.
