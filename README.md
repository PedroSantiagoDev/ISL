## Libary ISL
### Objetivo do Trabalho

O objetivo do trabalho é implementar um sistema de gerenciamento de livros de uma biblioteca usando uma linguagem de programação orientada a objetos (Java, Python, PHP ou C#) e um banco de dados relacional (MySQL, PostgreSQL ou SQL Server). O sistema deve ser capaz de:

1. Adicionar livros à biblioteca.
2. Listar livros disponíveis na biblioteca.
3. Armazenar informações de autores.
4. Associar autores aos livros.
5. Implementar uma interface (web ou desktop) para acessar essas funcionalidades.

### Passo a Passo do Trabalho

#### 1. Preparação do Ambiente

- **Escolha da Linguagem**: Decida se você vai usar Java, Python, PHP ou C#.
- **Banco de Dados**: Utilize MySQL, PostgreSQL ou SQL Server.
- **Ferramentas**: Instale uma IDE apropriada (ex.: IntelliJ IDEA, Eclipse, Visual Studio Code, etc.) e configure o ambiente de desenvolvimento.

#### 2. Configuração do Banco de Dados

Crie um banco de dados no MySQL e configure as tabelas necessárias. Abaixo está a consulta SQL para criar as tabelas `livros`, `autores`, `bibliotecas` e a tabela de associação `autor_livro`.

```sql
CREATE DATABASE biblioteca;
USE biblioteca;

CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    isbn VARCHAR(255) NOT NULL,
    ano INT NOT NULL,
    area VARCHAR(255),
    editora VARCHAR(255)
);

CREATE TABLE autores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    biografia TEXT
);

CREATE TABLE bibliotecas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    endereco VARCHAR(255) NOT NULL
);

CREATE TABLE autor_livro (
    autor_id INT,
    livro_id INT,
    PRIMARY KEY (autor_id, livro_id),
    FOREIGN KEY (autor_id) REFERENCES autores(id),
    FOREIGN KEY (livro_id) REFERENCES livros(id)
);

```
#### Passos para Implementação:

1. **Configuração do Ambiente**:

    - Instale a linguagem de programação escolhida.
    - Configure o banco de dados (MySQL, PostgreSQL ou SQL Server).
2. **Criação do Banco de Dados**:

    - Crie um banco de dados chamado `biblioteca`.
    - Crie as tabelas `livros`, `autores`, `bibliotecas` e a tabela de associação `autor_livro`.
3. **Definição das Classes**:

    - Implemente as classes `Livro`, `Autor` e `Biblioteca` conforme o diagrama UML.
4. **Criação das Migrações e Modelos**:

    - Utilize o framework (Laravel, Django, etc.) para criar as migrações e modelos de banco de dados.
5. **Implementação dos Métodos**:

    - Adicione os métodos nas classes para manipular os dados (CRUD).
6. **Criação da Interface**:

    - Crie as telas (formulários e listas) para adicionar, listar e emprestar livros.
    - Utilize um framework de front-end (Blade, Django Templates, etc.) para a interface.
