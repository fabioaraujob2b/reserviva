<?php

include 'database.php';

$sql = "CREATE TABLE hoteis(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    localizacao VARCHAR(100) NOT NULL,
    descricao VARCHAR(1000) NOT NULL
)";

if($conn->query($sql)){
    echo "Tabela criada com sucesso!";
} else {
    echo "Erro na criação da tabela: " . $conn->error;
}