<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de Funcionários</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header id="topo">
            <h1>GERENCIAMENTO DE FUNCIONARIOS</h1>
        </header>
        <nav id="menu">
            <a href="index.php">PÁGINA INICIAL</a>
            <a href="cadastrar.php">CADASTRAR FUNCIONÁRIO</a>
            <a href="buscar.php">BUSCAR FUNCIONÁRIO</a>
            <a href="cargos.php">CARGOS</a>
        </nav>
        <main id="conteudo">

        <?php
            if(isset($_GET["m"])){
                echo "<div id='resposta'>" . base64_decode($_GET["m"]) . "</div>";
            }
        ?>