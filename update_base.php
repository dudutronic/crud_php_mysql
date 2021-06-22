<?php
include "config.php";

if (isset($_POST['acao'])) {
    $name = $_POST['nome'];
    $breed = $_POST['raca'];
    $responsable = $_POST['nomeresp'];
    $age = $_POST['idade'];
    $type = $_POST['tipo'];
    if ($name == '' || $breed == '' || $responsable == '' || $age == '' || $type == '') {
        echo 'Preencha o campo!';
    } else {
        $sql = $pdo->FETCH_OBJ("INSERT INTO pets VALUES (null, ?, ?, ?, ?, ?)");
        $sql->execute([$name, $breed, $responsable, $age, $type]);
        header("location: listarPetNovo.php");     
    }
}
