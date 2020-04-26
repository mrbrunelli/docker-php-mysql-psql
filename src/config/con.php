<?php

$server = 'mrb-mysql'; // Se colocar localhost não irá conectar, pois o container está com o nome mrb-mysql
$user = 'root';
$pass = 'root';
$db = 'teste'; // Mude para o nome do seu banco

try {
    $pdo = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $err) {
    $msg = $err->getMessage();
    echo "Erro ao conectar no banco de dados: $msg";
}
