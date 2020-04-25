<?php

$server = 'mrb-mysql';
$user = 'root';
$pass = 'root';
$db = 'teste';


try {
    $pdo = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $err) {
    $msg = $err->getMessage();
    echo "Erro ao conectar no banco de dados: $msg";
}
