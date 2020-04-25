# :whale: Docker Image com ambiente PHP & MySQL

## Para executar é simples, digite no terminal do vscode mesmo:

```docker
docker-compose up
```

## Código PHP
* Todo o código PHP deve ficar dentro da pasta **src**. Eu criei um mapeamento automático, para que a cada alteração feita no código o Docker copie seu conteúdo para dentro do Container.

## Conexão com o db MySQL
* Quando for conectar no PDO, certifique-se de que os dados estão preenchidos da maneira certa. Segue um exemplo:
```php
<?php
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
?>
```

## Conectar MySQL com ferramenta de manipulação (Workbench, Dbeaver...)
* Deixei uma porta do container do MySQL aberta para funcionar em softwares na máquina. Nesse caso quando for conectar use **localhost:3306** usuário e senha continuam sendo **root e root**.

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
