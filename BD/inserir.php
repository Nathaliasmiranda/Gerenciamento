<?php

require_once "conexao.php";

if($_POST){
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $nome_motorista = $_POST['nome'];
    $ano_fabricacao = $_POST['anoF'];
    $valor_diaria = $_POST['diaria'];
}   

// $sql = "INSERT INTO Caminhao(placa,modelo,nome_motorista,ano_fabricacao,valor_diaria) VALUES ('$placa', '$modelo', '$nome_motorista', '$ano_fabricacao', '$valor_diaria)";
$sql = "INSERT INTO Caminhao (placa, modelo, nome_motorista, ano_fabricacao, valor_diaria) VALUES ('$placa', '$modelo', '$nome_motorista', '$ano_fabricacao', '$valor_diaria')";


if($conexao->query($sql)){
    header('Location: ../index.html');

} else {
    echo ("Error: ". $sql. "  " . $conexao->$connect_error);
    $conexao->close();
}
