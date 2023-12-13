<?php
 
require_once('conexao.php');
 
$placa = $_POST['placa'];
$qtd_dia =  $_POST['qtd'];
 
$sql = ("SELECT valor_diaria FROM Caminhao WHERE placa = '$placa' ") or die (mysqli_error($conexao));

$result = $conexao->query($sql);
 
if($result->num_rows > 0){
    $dados = $result->fetch_assoc();
 
    $valor_diaria = $dados['valor_diaria'];
}
 
$valor_pagamento = $valor_diaria * $qtd_dia;
?>
 
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>M2</title>
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li>HOME</li>
                    <li>CADASTRAR</li>
                    <li>ATUALIZAR</li>
                    <li>EXCLUIR</li>
                    <li>CALCULAR</li>
                    <li>CONSULTAR</li>
                </ul>
            </nav>
        </header>
 
        <div class="center-back">
            O valor do pagamento R$:<?php echo $valor_pagamento ?>
        </div>
    </body>
</html>
 