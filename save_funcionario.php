<?php

$nome = trim($_POST["nome"]);
$cpf = trim($_POST["cpf"]);
$email = trim($_POST["email"]);
$dtnascimento = trim($_POST["dtnascimento"]);
$salario = trim($_POST["salario"]);
$cargo = trim($_POST["cargo"]);
$cidade = trim($_POST["cidade"]);
$cep = trim($_POST["cep"]);
$estado = trim($_POST["estado"]);

if($nome == "" || $cpf == "" || $salario == "" || $cargo == ""){
    echo "Preencha todos os campos obrigatórios!";
    exit;
}

require_once "conexao/db.php";
require_once "util/funcao.php";

mysqli_autocommit($conn, false);

$dtNascimentoDb = convertDateToDb($dtnascimento);
$salarioDb = convertDoubleToDb($salario);

$sql = "INSERT INTO funcionarios values(NULL, '$nome', '$cpf', '$email', '$dtNascimentoDb', $salarioDb, $cargo)";
$message = "";
$save = true;

if(!$conn->query($sql)){
    $message = "Erro ao cadastrar funcionário.";
    $save = false;
}

$idfuncionario = mysqli_insert_id($conn);
$sqlEndereco = "INSERT INTO enderecos VALUES(NULL, '$cidade', '$cep', '$estado', $idfuncionario)";

if($save && !$conn->query($sqlEndereco)){
    $message = "Erro ao cadastrar endereco.";
    $save = false;
}

if($save){
    mysqli_commit($conn);
    $message = "Dados cadastrados com sucesso!";
}else{
    mysqli_rollback($conn);
}

$conn->close();

$message = base64_encode($message);
header("location: cadastrar.php?m=". $message);