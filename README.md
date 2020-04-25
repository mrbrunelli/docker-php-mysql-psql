# :whale: Docker Image com ambiente PHP & MySQL

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
