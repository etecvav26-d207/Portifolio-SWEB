# 💊 Farmácia VAV - Sistema CRUD de Gerenciamento de Estoque

Sistema de gerenciamento de estoque para farmácia desenvolvido em **PHP com PDO** e **Design Responsivo (Mobile First)**.

## 🎯 Objetivo

Desenvolver um sistema completo de **CRUD (Create, Read, Update, Delete)** para gerenciar produtos de uma farmácia, aplicando conceitos modernos de segurança, design responsivo e organização de código.

## 🛠️ Tecnologias Utilizadas

- **Back-end:** PHP 7.4+ com PDO
- **Banco de Dados:** MySQL/MariaDB
- **Front-end:** HTML5, CSS3
- **Conceitos:** Mobile First, Regra 60-30-10 (Cores)

## 📁 Estrutura de Diretórios

```
farmacia-vav/
├── config/
│   └── conexao.php          # Configuração da conexão PDO
├── includes/
│   ├── header.php           # Cabeçalho e navegação
│   └── footer.php           # Rodapé
├── css/
│   └── style.css            # Estilos responsivos
├── index.php                # Listagem de produtos
├── cadastro.php             # Formulário de inserção
├── editar.php               # Formulário de edição
├── excluir.php              # Lógica de exclusão
├── database.sql             # Script SQL do banco de dados
└── README.md                # Este arquivo
```

## 🚀 Como Configurar

### 1. Criar o Banco de Dados

Execute o script SQL no seu servidor MySQL:

```bash
mysql -u root -p < database.sql
```

Ou copie e cole o conteúdo de `database.sql` no phpMyAdmin.

### 2. Configurar a Conexão

Edite o arquivo `config/conexao.php` com suas credenciais:

```php
$host = 'localhost';
$db   = 'farmacia_vav';
$user = 'root';        // Seu usuário MySQL
$pass = '';            // Sua senha MySQL
```

### 3. Iniciar o Servidor

Se estiver usando PHP 7.4+, execute:

```bash
php -S localhost:8000
```

Acesse: `http://localhost:8000`

## 📋 Funcionalidades

### ✅ Listagem (READ)
- Exibe todos os produtos cadastrados
- Cards responsivos em mobile
- Tabela em desktop
- Status visual do estoque (Verde/Amarelo/Vermelho)

### ➕ Cadastro (CREATE)
- Formulário para adicionar novos produtos
- Validação de campos obrigatórios
- Segurança contra SQL Injection (PDO Prepared Statements)

### ✏️ Edição (UPDATE)
- Formulário pré-preenchido com dados do produto
- Atualização segura com PDO

### 🗑️ Exclusão (DELETE)
- Confirmação antes de excluir
- Remoção segura do banco de dados

## 🎨 Design

### Cores (Regra 60-30-10)
- **60% - Branco (#ffffff):** Fundo e elementos principais
- **30% - Verde Água (#17a2b8):** Header, footer e botões primários
- **10% - Laranja (#ff6b35):** Botões de ação e alertas

### Responsividade (Mobile First)
- **Mobile:** Cards para exibição de produtos
- **Tablet/Desktop (≥768px):** Tabelas e layouts expandidos
- Menu responsivo com navegação em coluna no mobile

## 🔒 Segurança

- **PDO Prepared Statements:** Previne SQL Injection
- **htmlspecialchars():** Sanitiza saída de dados
- **Validação de entrada:** Verifica campos obrigatórios

## 📝 Commits Recomendados

Para atingir o mínimo de 3 commits por integrante:

```bash
# Membro A - Listagem
git add index.php
git commit -m "Adicionado sistema de listagem de produtos"

# Membro B - Cadastro
git add cadastro.php
git commit -m "Implementado formulário de cadastro com validação"

# Membro C - Edição e Exclusão
git add editar.php excluir.php
git commit -m "Adicionados formulário de edição e função de exclusão"

# Todos - Refatoração
git add config/ includes/ css/
git commit -m "Refatorado design com header, footer e CSS responsivo"
```

## 🐛 Troubleshooting

### Erro: "SQLSTATE[HY000]: General error"
Verifique se o banco de dados `farmacia_vav` foi criado corretamente.

### Erro: "Call to undefined function"
Certifique-se de que os arquivos estão sendo incluídos com `require_once`.

### Produtos não aparecem
Verifique se a tabela `produtos` foi criada e se há dados inseridos.

## 👥 Equipe

- **Membro A:** Listagem (index.php)
- **Membro B:** Cadastro (cadastro.php)
- **Membro C:** Edição e Exclusão (editar.php, excluir.php)
- **Todos:** Design e Refatoração

## 📚 Referências

- [PHP PDO Documentation](https://www.php.net/manual/pt_BR/book.pdo.php)
- [Mobile First Design](https://www.nngroup.com/articles/mobile-first-web-design/)
- [Color Theory 60-30-10 Rule](https://www.interaction-design.org/literature/article/color-theory-for-designers)

---

**Desenvolvido com ❤️ por Grupo VAV**
