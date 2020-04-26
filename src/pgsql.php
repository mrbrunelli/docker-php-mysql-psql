<?php

include 'config/con-pgsql.php';
include 'config/fn.php';

$timezones = array(
    'SP' => 'America/Sao_Paulo',
    'BA' => 'America/Bahia'
);

date_default_timezone_set($timezones['SP']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker PHP + Apache + MySQL + PostgreSQL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section>
        <div onclick="handleGoToMysql()">
            <h1>Hello World - PDO PostgreSQL - <?= date('d/m/Y H:i:s') ?></h1>
            <span><?= listarUsuariosPgsql() ?></span>
        </div>
    </section>

    <script>
        const handleGoToMysql = () => {
            window.location.href = 'index.php'
        }
    </script>

</body>

</html>