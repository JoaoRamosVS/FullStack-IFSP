<?php
/*
 * Obtém a extensão de um arquivo.
 * 
 * @param string file: o caminho do arquivo
 * @return string extension: retorna a extensão do arquivo
 */
function getFileExtension($file)
{
    return strtolower(pathinfo($file, PATHINFO_EXTENSION));
}

/* 
 * Verifica se um arquivo é uma imagem
 * 
 * @param string filename: o nome do arquivo
 * @return boolean  
 */
function isImage($filename)
{
    $check = getimagesize($_FILES[$filename]["tmp_name"]);
    return !!$check;
}

function exceedFileSizeLimit($filename, $size = 30000000)
{
    return $_FILES[$filename]["size"] > $size ? true : false;
}

/*
 * Verifica se o tipo de uma imagem é permitido.
 * 
 * @param string imageType: o tipo da imagem
 * @return @boolean
*/
function allowedImageType($imageType, $allowedTypes = ['png', 'jpg', 'jpeg', 'webp'])
{
    return in_array($imageType, $allowedTypes);
}