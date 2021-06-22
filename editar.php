<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Editar Informações do Pet</title>
    <meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <div class="row">
        <div class="text-center"><img src="img/edit_info_pet.jpg" width="600" height="192">

            <br></br></br>
            <h2>Editar informações do Pet</h2></br>
        </div>
        <div class="row col-md-8 col-md-offset-2 custyle">

            <?php
            include "config.php";
            $con = new PDO("mysql:host=localhost;dbname=pet", "root", "");
            $consulta = $con->prepare("SELECT * FROM pets");
            $consulta->execute();
            $linha = $consulta->fetchAll(PDO::FETCH_OBJ);

            if (count($linha) > 0) {

            ?>
                <table class="table table-striped custab">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do Pet</th>
                            <th>Raça</th>
                            <th>Responsável</th>
                            <th>Idade</th>
                            <th>Tipo Pet</th>
                        </tr>
                    </thead>

                    <?php
                    foreach ($linha as $listar) {
                    ?>

                        <tr>
                            <td><?= $listar->id; ?></td>
                            <td><input type="text" name="nome_colab" value="<?php echo $listar->name ?>" /></td>
                            <td><input type="text" name="nome_colab" value="<?php echo $listar->breed ?>" /></td>
                            <td><input type="text" name="nome_colab" value="<?php echo $listar->responsable ?>" /></td>
                            <td><input type="text" name="nome_colab" value="<?php echo $listar->age ?>" /></td>
                            <td><input type="text" name="nome_colab" value="<?php echo $listar->type ?>" /></td>
                            </td>
                        </tr>

                    <?php

                    } //Fechamento do foreach
                    ?>
                </table>
                <form method="post" action="inserirPet.php">
                    <div><button type="submit" class="btn btn-primary" name="acao">Atualizar</button></div>
                </form>
            <?php
            } // fechamento IF            
            ?>

        </div>
    </div>
</body>

</html>