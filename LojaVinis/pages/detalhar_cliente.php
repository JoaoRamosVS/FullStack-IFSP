<?php 
include('../libraries/db_connection.php');

$id = $_GET['id'];
$sql = "SELECT * FROM TB_CLIENTE INNER JOIN TB_ENDERECO ON TB_CLIENTE.ID = TB_ENDERECO.CLIENTE_ID
WHERE TB_CLIENTE.ID = '$id'";

$result = $conn->query($sql);
$cliente = $result->fetch_assoc();

$conn->close();