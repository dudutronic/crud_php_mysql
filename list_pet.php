<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Pet Shop</title>
    <meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>



    <div class="row">
        <div class="text-center"><img src="img/logo2.jpeg" width="300" height="192">

            <br></br></br>
            <h2>LISTAGEM DE PETS</h2></br>
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
                        <a href="viewInserirPet.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Adicionar novo Pet</a>
                        <tr>
                            <th>ID</th>
                            <th>Nome Pet</th>
                            <th>Raça</th>
                            <th>Responsável</th>
                            <th>Idade</th>
                            <th>Tipo Pet</th>
                            <th class="text-center">Ação</th>
                        </tr>
                    </thead>

                    <?php
                    foreach ($linha as $listar) {
                    ?>


                        <tr>
                            <td><?= $listar->id; ?></td>
                            <td><?= $listar->name; ?></td>
                            <td><?= $listar->breed; ?>e</td>
                            <td><?= $listar->responsable; ?></td>
                            <td><?= $listar->age; ?></td>
                            <td><?= $listar->type; ?></td>
                            <td class="text-center"><a class='btn btn-info btn-xs' href="editar.php"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                <a href="deletePet.php?ID_CADASTRO=<?= $listar->id; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a>
                            </td>
                        </tr>
                    <?php
                    } //Fechamento do foreach
                    ?>
                </table>

            <?php
            } // fechamento IF            
            ?>

        </div>
    </div>
</body>

</html>