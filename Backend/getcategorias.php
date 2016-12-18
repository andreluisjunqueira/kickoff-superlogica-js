<?php
require_once 'conexao.php';

$stmt = $DB->prepare("SELECT * FROM `categoria`");
$stmt->execute();

$json = json_encode( $stmt->fetchAll(PDO::FETCH_ASSOC) );
print ($json);
