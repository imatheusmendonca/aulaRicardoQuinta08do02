<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>PDO Criar um Registro - Tutorial de PHP CRUD</title>
</head>
<body>

    <div class="container">
        <div class="page-hader">
            <h1>Criar Produto</h1>

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table class='table table-hover table-responsive table-bordered'>
            <tr>
                <td>Nome</td>
                <td><input type='text' name='nome' class='form-control' /></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><textarea name='descricao' class='form-control'></textarea></td>
            </tr>
            <tr>
                <td>Preço<object data="" type=""></object></td>
                <td><input type='text' name='preco' class='form-control' /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type='submit' value='Salvar' class='btn btn-primary' />
                    <a href='index.php' class='btn btn-danger'>Voltar para ler produtos</a>
                </td>
            </tr>
        </table>
    </form>

</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>