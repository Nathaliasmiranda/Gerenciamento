<?php

require_once 'BD/conexao.php';

if($_POST) {
    $id = $_POST['id'];
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $nome_motorista = $_POST['nome_motorista'];
    $ano_fabricacao = $_POST['ano_fabricacao'];
    $valor_diaria = $_POST['valor_diaria']; 

    $sql = "UPDATE Caminhao SET placa = '$placa',modelo = '$modelo', nome_motorista = '$nome_motorista',ano_fabricacao = '$ano_fabricacao', valor_diaria = '$valor_diaria' WHERE id = {$id}";

    if($conexao->query($sql)){
        header('Location: consultar.php');
    } else {
        echo "Erro: ".$conexao->error;
    }
    $conexao->close();
}   