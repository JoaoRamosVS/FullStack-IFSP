<?php
include('./libraries/db_connection.php');

$sql = 'SELECT * FROM TB_CLIENTE INNER JOIN TB_ENDERECO ON TB_CLIENTE.ID = TB_ENDERECO.CLIENTE_ID;';
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}