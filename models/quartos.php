<?php

include 'database.php';

$sql = "CREATE TABLE quartos(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tipo_quarto VARCHAR(50) NOT NULL,
    preco FLOAT(10,2) NOT NULL,
    disponibilidade TINYINT(1) DEFAULT 1,
    id_hotel INT(10) UNSIGNED,
    FOREIGN KEY (id_hotel) REFERENCES hoteis(id)
)";


if($conn->query($sql)){
    echo "Tabela criada com sucesso!";
} else {
    echo "Erro na criação da tabela: " . $conn->error;
}