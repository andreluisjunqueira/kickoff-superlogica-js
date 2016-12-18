<?php
require_once 'conexao.php';

$stmt = $DB->prepare("SELECT produto.nome as nome_produto,produto.preco,categoria.nome as nome_categoria FROM `produto` INNER JOIN `categoria` ON produto.categoria = categoria.id");
$stmt->execute();

$json = json_encode( $stmt->fetchAll(PDO::FETCH_ASSOC ) );

print( $json );