<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload de Arquivos usando bibliotecas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <h2 class="text-center text-red mt-5">Form de Upload de Arquivos</h2>
        <div class="row">
            <div class="col-md-6 mx-auto">
            <div class="card card-danger mt-5">
              <div class="card-header">
                <h3 class="card-title">Cadastro de Usuário</h3>
              </div>
                <form action="pages/upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group p-3">
                        <label for="imagem">Nome da Imagem</label>
                        <input class="form-control" type="text" name="imagem" id="imagem">
                    </div>
                    <div class="form-group p-3">
                        <label for="fileToUpload">Selecione uma imagem para fazer upload:</label>
                        <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <div class="form-group p-3">
                        <input class="form-control btn btn-danger" type="submit" value="Upload Image" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
</body>

</html>