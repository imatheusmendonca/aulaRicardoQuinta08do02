<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PDO - Criar um Registro - Tutorial de PHP CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
 
<body>
    <!-- container -->
    <div class="container">
        <div class="page-header">
            <h1>Criar Produto</h1>
        </div>
        <!-- O formulário HTML para criar um produto estará aqui. -->
        <!-- Código para inserir php entrará aqui -->
        <?php
if($_POST){
// incluir a conexão com o banco de dados
include 'config/bancodedados.php';
try{
// consulta de inserção
$query = "INSERT INTO produtos SET nome=:nome,
descricao=:descricao, preco=:preco, criadoem=:criadoem";
// preparar a consulta para execução
$stmt = $con->prepare($query);
// valores postados
$nome=htmlspecialchars(strip_tags($_POST['nome']));
$descricao=htmlspecialchars(strip_tags($_POST['descricao']));
$preco=htmlspecialchars(strip_tags($_POST['preco']));
// vincular os parâmetros
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':preco', $preco);
// especificar quando este registro foi inserido no banco de ados
 
$criadoem=date('Y-m-d H:i:s');
$stmt->bindParam(':criadoem', $criadoem);
// Executar a consulta
if($stmt->execute()){
echo "<div class='alert alert-success'>Registro foi
salvo.</div>";
}else{
echo "<div class='alert alert-danger'>Não foi possível salvar
o registro.</div>";
}
}
// mostrar erro
catch(PDOException $exception){
die('ERRO: ' . $exception->getMessage());
}
}
?>
        <!-- html form here where the product information will be entered -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                        <a href='index.php' class='btn btn-danger'>Voltar para ler
                            produtos</a>
                    </td>
                </tr>
            </table>
        </form>
    </div> <!-- fim do .container -->
    <!-- jQuery (Necessário para os plugins JavaScript do Bootstrap.) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- JavaScript do Bootstrap mais recente, compilado e minimizado. -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
 
</html>
 

