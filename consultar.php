<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funcionarios</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="cadastrar.html">CADASTRAR</a></li>
                    <li><a href="update.html">ATUALIZAR<a></li>
                    <li><a href="excluir.html">EXCLUIR<a></li>
                    <li><a href="calcular.html">CALCULAR<a></li>
                    <li class="active">CONSULTAR</li>
                </ul>
            </nav>
        </header>

        <main>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <table class='table table-dark table-striped table-hover table-sm'>
                <tbody>
                    <tr class="table-dark">
                        <th>ID</th>
                        <th>Placa</th>
                        <th>Modelo</th>
                        <th>Nome motorista</th>
                        <th>Ano fabricação</th>
                        <th>Valor diaria</th>
                    </tr>
                    <tr>
                        
                    <?php
                        require_once'BD/conexao.php';
                        $sql = mysqli_query($conexao,"SELECT * FROM Caminhao") or die (
                            mysqli_error($conexao));
                        while($row=mysqli_fetch_assoc($sql)){
                            echo"<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['placa']."</td>
                            <td>".$row['modelo']."</td>
                            <td>".$row['nome_motorista']."</td>
                            <td>".$row['ano_fabricacao']."</td>
                            <td>".$row['valor_diaria']."</td>";  
                        } 
                    ?>

                    </tr>
                    <tr>
                        <td colspan="6">
                            <a href="index.html"><button type="button" class="btn btn-success">Página inicial</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </body>
</html>
