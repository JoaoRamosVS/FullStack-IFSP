<?php

include('../libraries/file_upload.php');

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = getFileExtension($target_file);
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    if (!isImage('fileToUpload')) {
        die("<script>alert('O arquivo não contém uma imagem.')</script>");
    }
    if (exceedFileSizeLimit('fileToUpload')) {
        die("<script>alert('O arquivo é muito grande.')</script>");
    }
    if (!allowedImageType($imageFileType)) {
        die("<script>alert('O tipo do arquivo não é permitido.')</script>");
    }
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    echo $target_file;
}

