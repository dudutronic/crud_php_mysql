<?php
include "config.php";

if (isset($_POST['acao'])) {
    $nomePet = $_POST['nome'];
    $racaPet = $_POST['raca'];
    $nomeRespPet = $_POST['nomeresp'];
    $idadePet = $_POST['idade'];
    $tipoPet = $_POST['tipo'];
    if ($nomePet == '' || $racaPet == '' || $nomeRespPet == '' || $idadePet == '' || $tipoPet == '') {
        echo 'Preencha o campo!';
    } else {
        $sql = $pdo->prepare("INSERT INTO cadastro_pet VALUES (null, ?, ?, ?, ?, ?)");
        $sql->execute([$nomePet, $racaPet, $nomeRespPet, $idadePet, $tipoPet]);
        header("location: listarPetNovo.php");     
    }
}
?>
