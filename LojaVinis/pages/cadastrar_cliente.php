<?php
include('../libraries/db_connection.php');

$nome = $_POST['cliente']['nome'];
$email = $_POST['cliente']['email'];
$senha = $_POST['cliente']['senha'];
$documento = $_POST['cliente']['documento'];
$tipo_documento = $_POST['cliente']['tipo_documento'];

$rua = $_POST['endereco']['logradouro'];
$complemento = $_POST['endereco']['complemento'];
$bloco = $_POST['endereco']['bloco'];
$bairro = $_POST['endereco']['bairro'];
$cidade = $_POST['endereco']['cidade'];
$estado = $_POST['endereco']['estado'];
$cep = $_POST['endereco']['cep'];
$telefone = $_POST['endereco']['telefone'];


// required nos campos e apagar tudo
if ($tipo_documento === '') {
    die('<script>alert("Selecione qual o tipo de pessoa.")</script>');
} 

if ($tipo_documento === '1') {
    if (strlen($documento) != 11) {
        die('<script>alert("Digite o CPF corretamente.")</script>');
    }
} else if ($tipo_documento === '2') {
    if (strlen($documento) != 14) {
        die('<script>alert("Digite o CNPJ corretamente.")</script>');
    }
}

$sql = "INSERT INTO TB_CLIENTE (NOME, DOCUMENTO, TIPO_USUARIO, EMAIL, SENHA) 
VALUES ('$nome', '$documento', '$tipo_documento', '$email', '$senha');";

if ($conn->query($sql) === TRUE) {
    echo "Novo usuário criado com sucesso!";
} else {
    die("Error: " . $sql . "<br>" . $conn->error);
}

$cliente_id = $conn->insert_id;

$sql = "INSERT INTO TB_ENDERECO (RUA, COMPLEMENTO, BLOCO, TELEFONE, BAIRRO, CIDADE, ESTADO, CEP, CLIENTE_ID) 
VALUES ('$rua', '$complemento', '$bloco', '$telefone', '$bairro', '$cidade', '$estado', '$cep', '$cliente_id');";

if ($conn->query($sql) === TRUE) {
    echo "Endereço cadastrado!";
} else {
    die("Error: " . $sql . "<br>" . $conn->error);
}

$conn->close();

header('Location: ../list.php');