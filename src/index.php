<?php

include 'config/con.php';
include 'config/fn.php';

$timezones = array(
    'SP' => 'America/Sao_Paulo',
    'BA' => 'America/Bahia'
);

date_default_timezone_set($timezones['SP']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker PHP + Apache + MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <div>
            <?= listarUsuarios() ?>
        </div>
    </section>
</body>

</html>