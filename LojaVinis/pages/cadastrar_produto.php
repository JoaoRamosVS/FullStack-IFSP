<?php
include('../libraries/db_connection.php');
include('../libraries/file_upload.php');
include('../includes/classes/Produto.php');
$target_dir = "../uploads/fotosProdutos/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$imageFileType = getFileExtension($target_file);

if (isset($_POST["submit"])) {
    if (!isImage('foto')) {
        die("<script>alert('O arquivo não contém uma imagem.')</script>");
    }
    if (exceedFileSizeLimit('foto')) {
        die("<script>alert('O arquivo é muito grande.')</script>");
    }
    if (!allowedImageType($imageFileType)) {
        die("<script>alert('O tipo do arquivo não é permitido.')</script>");
    }
    $produto = new Produto(
        null,
        $_POST['produto']['nome'],
        $_POST['produto']['descricao'],
        $_POST['produto']['valor'],
        $_POST['produto']['quantidade']
    );
    $sql = $conn->prepare("INSERT INTO TB_PRODUTO (NOME, DESCRICAO, VALOR, QUANTIDADE) VALUES (? ,?, ?, ?);");
    $sql->bind_param(
        "ssdi",
        $produto->getNome(),
        $produto->getDescricao(),
        $produto->getValor(),
        $produto->getQuantidade()
    );
    if($sql->execute() === TRUE) {
        echo "Novo produto cadastrado com sucesso!";
    }
    else {
        die("Error: " . $sql . "<br>" . $conn->error);
    }

    $produto_id = $conn->insert_id;

    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    $caminho_foto = substr($target_file, 3); // tirar o "../" do caminho da foto
    
    $sql = $conn->prepare("INSERT INTO TB_FOTOS_PRODUTO (CAMINHO, CAPA, PRODUTO_ID) VALUES (?, 1, ?);");
    $sql->bind_param("si", $caminho_foto, $produto_id);
    if($sql->execute() === TRUE) {
        echo "Imagem do produto cadastrada com sucesso!";
    }
    else {
        die("Error: " . $sql . "<br>" . $conn->error);
    }

    $conn->close();
    header('Location: ../listProdutos.php');
}