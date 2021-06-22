<?php
include 'index.php';

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Pet Shop</title>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>

    <div id="div2">
        <div class="text-Center">
            <div>
                <h3>Adicionar Novo Pet</h3>
            </div>
        </div>
        <form method="post" action="inserirPet.php">
            <div>
                <div>
                    <input type="text" class="form-control" name="nome" placeholder="Nome do Pet">
                </div>
                </br>
                <div>
                    <input type="text" class="form-control" name="raca" placeholder="Raça do Pet">
                </div>
                </br>
                <div>
                    <input type="text" class="form-control" name="tipo" placeholder="Tipo do Pet">
                </div>
                </br>
                <div>
                    <input type="text" class="form-control" name="idade" placeholder="Idade do Pet">
                </div>

                </br>
                <div>
                    <input type="text" class="form-control" name="nomeresp" placeholder="Nome do Responsável">
                </div>
                </br>
                <div><button type="submit" class="btn btn-primary" name="acao">Inserir</button></div>
            </div>
        </form>
    </div>
</body>