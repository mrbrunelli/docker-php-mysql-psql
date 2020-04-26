<?php

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
