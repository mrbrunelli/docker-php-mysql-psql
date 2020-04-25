<?php

function listarUsuarios()
{
    include 'con.php';
    $sql = 'SELECT * FROM usuario';
    $query = $pdo->prepare($sql);
    $query->execute();
    $rowCount = $query->rowCount();
    echo "<h1>$rowCount usuários cadastrados</h1>";
    foreach ($query as $row) {
        $id = $row['id'];
        $nome = $row['nome'];
        $email = $row['email'];
        echo "<p>$id - $nome - $email</p>";
    }
}
