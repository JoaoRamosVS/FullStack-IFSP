<?php
include('libraries/db_connection.php');
include_once('includes/classes/Produto.php');

$sql = $conn->prepare("SELECT * FROM TB_PRODUTO INNER JOIN TB_FOTOS_PRODUTO 
ON TB_PRODUTO.ID = TB_FOTOS_PRODUTO.PRODUTO_ID WHERE TB_PRODUTO.ID = ?");
$sql->bind_param("i", $_GET['id']);
$sql->execute();
$result = $sql->get_result();
if ($row = $result->fetch_assoc()) {
    $produto = new Produto(null, $row['NOME'], $row['DESCRICAO'],
     $row['VALOR'], $row['QUANTIDADE'], $row['CAMINHO']);
} else {
    die('Erro 404. Página não encontrada :(');
}

$conn->close();