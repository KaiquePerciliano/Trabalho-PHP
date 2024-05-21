<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulário para cadastro de Autor</title>
</head>
    <body>
        <?php
            include 'navbar.php'; 
            ?>
        </div>
        <div class="col">
            <h3 class="text-center">Cadastro de Autor</h3>
            <div class="bg-light p-5">
                <form action="cadastraAutor.php" method="post">
                <div class="mb-3">
                        <label class="form-label" for="NOME">Nome do Autor</label>
                        <input class="form-control" name="NOME" type="text">
                </div>
            
                <div class="mb-3 justify-content-md-end">
                    <button class="btn btn-outline-success" type="submit">
                        Salvar
                    </button>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>