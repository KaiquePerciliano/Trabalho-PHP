<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Emprestimos</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'navbar.php';
        ?>
        <div class="row">
            <div class="col-6 text-center p-3 m-g">
                <h1>Emprestimos</h1>
                <?php
                    require 'conectaBanco.php';
                    $select = "SELECT * FROM emprestimo";
                    $resultado = mysqli_query($banco, $select);
                ?>
            </div>
            <div class="col-6 text-center p-3 m-g">
                <a href="formEmprestimo.php">
                    <button class="btn btn-primary">Cadastrar Emprestimo</button>
                </a>
            </div>
            <div class="row text-center p-3 m-g">
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Livro</th>
                        <th scope="col">Data Inicio</th>
                        <th scope="col">Data Final</th>

                    </thead>

                    <tbody>
                        <?php
                            if ($resultado) {
                                while($linha = mysqli_fetch_assoc($resultado)) {
                                    $id = $linha['ID'];
                                    $nome = $linha['NOME'];
                                    $livro = $linha['LIVRO'];
                                    $dtInicio = $linha['DT_INCIO'];
                                    $dtFinal = $linha['DT_FINAL'];

                                    echo "<tr>
                                    <td>$id</td>
                                    <td>$nome</td>
                                    <td>$livro</td>
                                    <td>$dtInicio</td>
                                    <td>$dtFinal</td>
                                    <td> ?? </td>
                                    </tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>Nenhum registro encontrado</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>