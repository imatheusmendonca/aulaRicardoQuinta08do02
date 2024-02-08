<!DOCTYPE HTML>
<html>
 
<head>
    <title>PDO - Ler Registros - Tutorial de PHP CRUD </title>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <!-- Css customizado -->
    </head>
    <body>
       
        <style>
            .m-r-1em {
                margin-right: 1em;
            }
           
            .m-b-1em {
                margin-bottom: 1em;
            }
           
            .m-l-1em {
                margin-left: 1em;
            }
           
            .mt0 {
                margin-top: 0;
            }
            </style>
    <div class="container">
        <?php
        include 'config/bancodedados.php';
        $query = "SELECT id,nome,descricao,preco FROM produtos ORDER BY id DESC";
        $stmt = $con->prepare($query);
        $stmt->execute();
         // "É assim que obtemos o número de linhas retornadas
         $num = $stmt->rowCount();
         //Link para o formulário de criação de registros.
         echo "<a href='criar.php'> <button class='btn btn-primary m-b-1em'>Criar novo produto</button></a>";
         if($num>0){
         echo "<table class='table table-hover table-responsive table-bordered'>";
         }
         else
         {
           echo "<div class='alert-danger'>Não achei o resgistro</div>";}
          ;
        ?>

        <div class="page-header">
            <h1>Ler Produtos</h1>
        </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
</body>