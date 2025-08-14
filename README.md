# Sistema de Loja de Armas

Sistema simples de controle de estoque para loja de armas desenvolvido em Laravel.

## Estrutura do Banco de Dados

### Tabelas
- **categorias**: Categorias de armas (Pistolas, Rifles, etc.)
- **armas**: Produtos/armas disponíveis
- **clientes**: Cadastro de clientes
- **pedidos**: Pedidos realizados pelos clientes
- **arma_pedido**: Tabela pivot para relacionamento muitos-para-muitos

### Relacionamentos
- Uma arma pertence a uma categoria
- Um cliente pode fazer vários pedidos
- Um pedido pode conter várias armas

## Instalação

1. Clone o repositório
2. Instale as dependências: `composer install`
3. Configure o banco de dados no arquivo `.env`
4. Execute as migrações: `php artisan migrate:fresh --seed`
5. Inicie o servidor: `php artisan serve`

## Rotas Disponíveis

- `/` - Página principal com estatísticas
- `/hello` - Rota de teste "Hello World"
- `/teste` - Verificação do sistema
- `/categorias` - Lista de categorias (JSON)

## Dados de Teste

O sistema vem com dados de teste:
- 8 categorias de armas
- 7 armas de exemplo
- 5 clientes de teste

## Tecnologias

- Laravel
- MySQL
- PHP
