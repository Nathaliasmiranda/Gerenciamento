<?php
 
 require_once('conexao.php');
  
 $placa = $_POST['placa'];
 $sql = "DELETE FROM Caminhao WHERE placa='$placa' ";
  
 if($conexao->query($sql)){
     header('Location: ../consulta.php');
 }