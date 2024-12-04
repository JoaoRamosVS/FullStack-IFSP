<?php 
include('../libraries/db_connection.php');

$nome = $_POST['cliente']['nome'];
$email = $_POST['cliente']['email'];
$senha = $_POST['cliente']['senha'];
$documento = $_POST['cliente']['documento'];

$rua = $_POST['endereco']['logradouro'];
$complemento = $_POST['endereco']['complemento'];
$bloco = $_POST['endereco']['bloco'];
$bairro = $_POST['endereco']['bairro'];
$cidade = $_POST['endereco']['cidade'];
$estado = $_POST['endereco']['estado'];
$cep = $_POST['endereco']['cep'];
$telefone = $_POST['endereco']['telefone'];
$cliente_id = $_POST['endereco']['cliente_id'];

if ($nome === '') {
    die('<script>alert("Preencha o campo Nome Completo.")</script>');
} else if ($email === '') {
    die('<script>alert("Preencha o campo Endereço de email.")</script>');
} else if ($senha === '') {
    die('<script>alert("Preencha o campo Senha.")</script>');
} else if ($documento === '') {
    die('<script>alert("Preencha o campo Documento.")</script>');
} else if ($rua === '') {
    die('<script>alert("Preencha o campo Logradouro.")</script>');
} else if ($bairro === '') {
    die('<script>alert("Preencha o campo Bairro.")</script>');
} else if ($cidade === '') {
    die('<script>alert("Preencha o campo Cidade.")</script>');
} else if ($estado === '') {
    die('<script>alert("Preencha o campo Estado.")</script>');
} else if ($cep === '') {
    die('<script>alert("Preencha o campo CEP.")</script>');
} else if ($telefone === '') {
    die('<script>alert("Preencha o campo Telefone.")</script>');
}

$sql = "UPDATE TB_CLIENTE SET NOME = '$nome', DOCUMENTO = '$documento', EMAIL = '$email', 
SENHA = '$senha', ATUALIZADO_EM = NOW() WHERE ID = '$cliente_id';";

if ($conn->query($sql) === TRUE) {
    echo "Cliente atualizado com sucesso";
  } else {
    die("Error: " . $sql . "<br>" . $conn->error);
}

$sql = "UPDATE TB_ENDERECO SET RUA = '$rua', COMPLEMENTO = '$complemento', BLOCO = '$bloco', 
TELEFONE = '$telefone', BAIRRO = '$bairro', CIDADE = '$cidade', ESTADO = '$estado', CEP = '$cep' WHERE CLIENTE_ID = '$cliente_id';";

if ($conn->query($sql) === TRUE) {
    echo "Endereco atualizado com sucesso";
  } else {
    die("Error: " . $sql . "<br>" . $conn->error);
}

$conn->close();

header('Location: ../list.php');
