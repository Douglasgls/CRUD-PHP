# CRUD Laravel com SQLite

Este é um projeto Laravel para gerenciar um CRUD simples com banco de dados SQLite3.

## Requisitos

Antes de rodar a aplicação, certifique-se de ter as seguintes dependências instaladas:

- **PHP** (versão 8.x ou superior)
- **Composer** (para gerenciar dependências PHP)
- **Node.js** (versão 16.x ou superior)
- **NPM** (gerenciador de pacotes do Node.js)

1. Clonar o repositório

Clone o repositório para o seu diretório local:

   ```bash
   git clone https://github.com/Douglasgls/CRUD-PHP.git
   ```

2. **cd seu-repositorio**

    ```bash
    cd CRUDPHP
    ```

3. **Instale as dependências**
    ```bash
    composer install
    ```

4. **Configurar o arquivo .env**
    Renomeie o arquivo .env.example para .env:

    ```bash
    cp .env.example .env
    ```

5. **Gerar a chave da aplicação**
    Execute o comando abaixo para gerar a chave de criptografia da aplicação:

    ```bash
    php artisan key:generate
    ```

6. **Migre o banco de dados**
    ```bash
        php artisan migrate
    ```
    **caso ocorra algum erro execute,e depois volte ao passo quatro** 
    ´´´bash
        composer dump-autoload
    ´´´

7. **Instalar dependências frontend**
    Instale as dependências frontend utilizando o NPM. Isso irá instalar o Vite e outras bibliotecas necessárias:

    ```bash
        npm install
    ```

8. **Gere os arquivos de build do vite**
    ```bash
        npm run build
    ```

9. **Inicie o projeto**
    ```bash
        php artisan serve
    ```

Notas,caso ocorra alguns erros:

Problemas comuns
- Vite manifest not found: Certifique-se de ter executado npm run build ou npm run dev para gerar o arquivo manifest.json no diretório public/build/.

- Erro de chave de criptografia: Se o Laravel não encontrar a chave de criptografia, execute php artisan key:generate novamente após garantir que o arquivo .env está configurado corretamente.

**Endpoints**
- /register: Registra o usuário.
- /login: realiza login.

O projeto estará disponível em http://127.0.0.1:8000.