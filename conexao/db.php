<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "projetofuncionario";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
    echo "Erro na conexão " . $conn->connect_error;
    exit;
}