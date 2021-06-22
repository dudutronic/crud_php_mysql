<?php
include("config.php");

 $id=$_GET["ID_CADASTRO"];

 $stmt = $pdo->prepare("DELETE FROM cadastro_pet WHERE ID_CADASTRO='$id'");
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  header("location: listarPetNovo.php");
  
 
 
?>