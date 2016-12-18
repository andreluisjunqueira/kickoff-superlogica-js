<?php
require_once 'conexao.php';

     $nome      = $_POST["nome"];
     $descricao = $_POST['descricao' ];
     $preco     = $_POST['preco'];
     $categoria = $_POST['categoria']; 
            
    $stmt = $DB->prepare("INSERT INTO `produto`(nome,preco,descricao,categoria)  VALUES (?,?,?,?)");

    $stmt->bindValue(1,$nome);
    $stmt->bindValue(2,$preco);
    $stmt->bindValue(3,$descricao);
    $stmt->bindValue(4,$categoria);

    if( $stmt->execute() ){
        echo '1';
    }else{
        echo '0';
    }

?>