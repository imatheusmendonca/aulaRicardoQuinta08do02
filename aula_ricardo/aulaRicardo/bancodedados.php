<?php
try{
$host="localhost";
$nome_DB="tb_produtos";
$Usuario="root";
$Senha="";
 
$conexao = new PDO("mysql:host={$host};dbname={$nome_DB}", $Usuario, $Senha);
   $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
 
?>