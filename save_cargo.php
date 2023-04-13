<?php

require_once "conexao/db.php";

$nomecargo = $_POST["nomecargo"];

$sql = "INSERT INTO cargos VALUES(NULL, '$nomecargo')";

if($conn->query($sql)){
    echo "Cargo cadastrado com sucesso";
}else{
    echo "Erro no cadastro!";
}

$conn->close();