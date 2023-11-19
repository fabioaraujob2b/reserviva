<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "reservas_hoteis";

$conn = new mysqli($serverName, $username, $password, $dbname);

if($conn->connect_error){
    die("Erro ao conectar ao bando de dados.". $conn->connect_error);
}



?>