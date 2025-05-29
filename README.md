# Instruções para Executar o Projeto

Este projeto utiliza o **Laravel** como framework PHP e o **Tailwind CSS** para estilização. Abaixo estão as etapas para configurar e rodar o projeto localmente.

## ✅ Pré-requisitos

Certifique-se de ter os seguintes softwares instalados na sua máquina:

- **PHP** (versão 8.0 ou superior)
- **Composer** (gerenciador de dependências do PHP)
- **Node.js** (versão 14 ou superior)
- **NPM** (gerenciador de pacotes do Node.js)

Links úteis:
- [Instalar PHP](https://www.php.net/manual/pt_BR/install.php)
- [Instalar Composer](https://getcomposer.org/doc/00-intro.md)
- [Instalar Node.js](https://nodejs.org/)

---

## ⚙️ Passos para Configuração e Execução

### 1. Clonar o Repositório

```bash
git clone https://github.com/BrunoWagler/parcial_2.git
cd parcial_2
```

### 2. Instalar Dependências do PHP

```bash
composer install
```

### 3. Instalar Dependências do Node.js

```bash
npm install
```

### 4. Configurar o Ambiente

Copie o arquivo de exemplo `.env.example` para `.env`:

```bash
cp .env.example .env
```
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

Gere a chave da aplicação Laravel:

```bash
php artisan key:generate
```

### 5. Rodar as Migrações (opcional, se usar banco de dados)

```bash
php artisan migrate
```

### 6. Compilar os Assets

```bash
npm run dev
```

### 7. Iniciar o Servidor de Desenvolvimento

```bash
php artisan serve
```

O projeto estará disponível em [http://localhost:8000](http://localhost:8000).

---