<?php

require('BD/conexao.php');

if($_POST['placa']){
    $placa = $_POST['placa'];

    $sql = ("SELECT * FROM Caminhao WHERE placa = '$placa'") or die( mysqli_error($conexao) );
    $result = $conexao->query($sql);
    
    if($result->num_rows > 0){
        $dados = $result->fetch_assoc();
    
        $id = $dados['id'];
        $placa = $dados['placa'];
        $modelo = $dados['modelo'];
        $nome_motorista = $dados['nome_motorista'];
        $ano_fabricacao = $dados['ano_fabricacao'];
        $valor_diaria = $dados['valor_diaria'];
    }
}

?>

<form action="update.php" method='POST'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <table class='table table-dark table-striped table-hover table-sm'>
    <tbody>
        <tr>    
            <th>PLACA</th>
            <td><input type='text' name='placa' placeholder="Nome" value="<?php echo $placa; ?>" > </td></tr>
        </tr>
        
        <tr>
            <th>MODELO</th>
            <td><input type='text' name='modelo' placeholder="modelo" value="<?php echo $modelo; ?>" > </td></tr>
        </tr>
        
        <tr>
            <th>NOME MOTORISTA</th>
            <td><input type='text' name='nome_motorista' placeholder="nome_motorista" value="<?php echo $nome_motorista; ?>" > </td></tr>
        </tr>

        <tr>
            <th>Ano fabricação</th>
            <td><input type='text' name='ano_fabricacao' placeholder="Nome" value="<?php echo $ano_fabricacao; ?>" > </td></tr>
        </tr>

        <tr>
            <th>Valor Diaria</th>
            <td><input type='text' name='valor_diaria' value="<?php echo $valor_diaria; ?>" > </td></tr>
        </tr>


        <input type="hidden" name="id" value="<?php echo $dados['id']?>">
        <td><button type="submit" class="btn btn-info">Salvar Alteraçoes</button></td>
        <td><a href="index.html"><button type="button" class="btn btn-success">Página inicial</button></a></td></tr>
    <tbody>
    </table>
</form>