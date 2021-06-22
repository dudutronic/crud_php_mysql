<?php
include 'index.php';

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Pet Shop</title>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>

    <div id="div2">
        <div class="text-Center">
            <div>
                <h2>Adicionar Novo Pet</h2>
                
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
                <div><button type="submit" class="btn btn-primary" name="acao">Inserir</button>
                 </div><br>
                <div><a href="listarPetNovo.php" class="btn btn-success btn-xs pull-center"><b></b> Consultar cadastro de Pets</a></div>
            </div>
        </form>
    </div>
</body>