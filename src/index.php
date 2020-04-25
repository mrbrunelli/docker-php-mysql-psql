<?php

include 'con.php';
include 'fn.php';

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
</head>

<body>
    <div>
        <?= listarUsuarios() ?>
    </div>
</body>

</html>