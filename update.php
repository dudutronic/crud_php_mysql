<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try {
    $pdo = new PDO("mysql:host=localhost;dbname=petshop", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

// Attempt update query execution
try {
    $sql = "UPDATE cadastro_pet SET NOME_PET='{$_POST['nome']}', RACA_PET='{$_POST['raca']}', IDADE_PET='{$_POST['idade']}',NOME_RESP='{$_POST['responsavel']}',TIPO_PET='{$_POST['tipo']}' WHERE ID_CADASTRO ={$_POST['id_pet']}";
    $pdo->exec($sql);
    echo header("Location:listarPetNovo.php");;
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
