<?php
include('./libraries/db_connection.php');
include('./includes/classes/Produto.php');

$sql = 'SELECT TB_PRODUTO.ID, NOME, VALOR, QUANTIDADE, CAMINHO FROM TB_PRODUTO INNER JOIN TB_FOTOS_PRODUTO ON TB_PRODUTO.ID = TB_FOTOS_PRODUTO.PRODUTO_ID WHERE CAPA = 1;';
$result = $conn->query($sql);

$produtos = [];
while ($row = $result->fetch_assoc()) {
    $produto = new Produto($row['ID'], $row['NOME'], null, $row['VALOR'], $row['QUANTIDADE'], $row['CAMINHO']);
    $produtos[] = $produto;
}
