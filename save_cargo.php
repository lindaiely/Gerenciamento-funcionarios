<?php

require_once "conexao/db.php";

$nomecargo = $_POST["nomecargo"];

$sql = "INSERT INTO cargos VALUES(NULL, '$nomecargo')";
$message = "";

if($conn->query($sql)){
    $message = "Cargo cadastrado com sucesso!";
}else{
    $message = "Erro no cadastro!";
}

$conn->close();

header("location: cargos.php?m=" . base64_encode($message));