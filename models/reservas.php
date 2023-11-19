<?php

include 'database.php';

$sql = "CREATE TABLE reservas(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    data_checkin DATETIME,
    data_checkout DATETIME,
    estado VARCHAR(50),
    id_users INT(10) UNSIGNED,
    FOREIGN KEY (id_users) REFERENCES users(id),
    id_quartos INT(10) UNSIGNED,
    FOREIGN KEY (id_quartos) REFERENCES quartos(id)
)";

if($conn->query($sql)){
    echo "Tabela criada com sucesso!";
} else {
    echo "Erro na criação da tabela: " . $conn->error;
}