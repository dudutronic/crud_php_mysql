<!DOCTYPE html>
<html lang="en">

<head>
    <title>Editar lista de pets</title>
    <meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

    <?php
    include "config.php";
    $con = new PDO("mysql:host=localhost;dbname=pet", "root", "");
    $consulta = $con->prepare("SELECT * FROM pets WHERE id=?");
    $consulta->execute();
    $linha = $consulta->fetchAll(PDO::FETCH_OBJ);



    ?>
    <form action="edit.php" method="post">
        <label>nome: <input type="text" name="name">Nome</label>
        <label>tipo: <input type="password" name="type"></label>
        <label>responsavel: <input type="password" name="responsable"></label>
        <label>idade: <input type="password" name="age"></label>
        <label>raça: <input type="password" name="breed"></label>

        <input type="submit" value="Salvar">
    </form>
</body>

</html>