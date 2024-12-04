<?php
include('./libraries/db_connection.php');

$id = $_GET['id'];
$sql = "DELETE FROM TB_ENDERECO where CLIENTE_ID = '$id';";
$conn->query($sql);

$sql = "DELETE FROM TB_CLIENTE where ID = '$id';";
$conn->query($sql);

header('Location: ../list.php');