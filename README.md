# :whale: Docker Image com ambiente PHP & MySQL

## Para executar é simples:
1. Clone o repositório e navegue com seu terminal até na pasta raíz do projeto.
2. Estando dentro da pasta raíz, execute o comando abaixo:

```docker
docker-compose up
```

## :elephant: Código PHP
* Todo o código PHP deve ficar dentro da pasta **src**. Eu criei um mapeamento automático, para que a cada alteração feita no código o Docker copie seu conteúdo para dentro do Container.

## Conexão com o DB MySQL & DB PostgreSQL
* Quando for conectar no PDO, certifique-se de que os dados estão preenchidos da maneira certa. Criei duas conexões separadas para ilustrar como devem ser feitas as conexões. As conexões estão em arquivos separados. Segue um exemplo:
```php
<?php
    // Conexão MySQL
    $server = 'mrb-mysql'; // Deve ser o nome do container
    $user = 'root';
    $pass = 'root';
    $db = 'teste'; // Mude para o nome do seu banco

    try {
        $pdo = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);
    } catch (PDOException $err) {
        $msg = $err->getMessage();
        echo "Erro ao conectar no banco de dados: $msg";
    }

    // Conexão PostgreSQL
    $server = 'mrb-pgsql';
    $db = 'postgres';
    $user = 'postgres';
    $pass = 'postgres';

try {
    $pdo = new PDO("pgsql:host=$server;dbname=$db;", $user, $pass);
} catch (PDOException $err) {
    $msg = $err->getMessage();
    echo "Erro ao conectar no banco de dados: $msg";
}
?>
```

## Conectar MySQL com ferramenta de manipulação (Workbench, Dbeaver...)
* Deixei uma porta do container do MySQL aberta para funcionar em softwares na máquina. Como esses softwares estão fora do container, eu precisei liberar uma porta no container para ter essa conexão. Segue configuração:
```bash
    # Host (Nesse caso deve ser localhost, pois o software não consegue se conectar direto com o container)
    localhost

    # Port
    3306

    # User
    root

    # Password
    root
```

## Conectar PostgreSQL com ferramenta de manipulação (PgAdmin, Dbeaver, SqlManager)
* Deixei uma porta do container do PostgreSQL aberta para funcionar em softwares na máquina. Caso não vá usar, pode remover do **docker-compose.yml**.
```bash
# Host (Nesse caso deve ser localhost, pois o software não consegue se conectar direto com o container)
localhost

# Port
5432

# User
postgres

# Pass
postgres
```

## PhpMyAdmin
* Adicionei uma imagem do PhpMyAdmin para ficar mais fácil para quem não tem outros softwares instalados na máquina. Disponibilizei o acesso dele na porta **8080**, então é só acessar **localhost:8080** no navegador e ele já estará disponível. Para fazer login é só digitar as seguintes credenciais:
```bash
    # Host (deve ser o nome do container do MySQL e não localhost)
    mrb-mysql

    # User
    root

    # Password
    root
```
