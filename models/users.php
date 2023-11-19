<?php

include 'database.php';

$sql = "CREATE TABLE users(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    senha VARCHAR(50) NOT NULL
)";

if($conn->query($sql)){
    echo "Tabela criada com sucesso!";
} else {
    echo "Erro na criação da tabela: " . $conn->error;
}