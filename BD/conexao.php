<?php

$localhost = "localhost";
$root = "root";
$senha = "";
$banco = "M2";
$conexao = new mysqli($localhost,$root,$senha,$banco);

if($conexao->connect_error) {
    die("Error de conexão".$conexao->connect_error);
}