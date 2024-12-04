<?php
$titulo = 'Cadastro de Produtos';
$breadcrumb_items = [
    ['nome' => 'Início', 'ref' => 'index.php'],
    ['nome' => 'Cadastro de Produtos', 'ref' => 'formProduto.php']
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles\style.css">
    <title>JVinis</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
</head>

<style>
    input[type=number]::-webkit-inner-spin-button {
        appearance: none;
    }
</style>

<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">
        <?php include('includes/components/navbar.php') ?>
        <?php include('includes/components/sidebar.php') ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php include('includes/components/breadcrumb.php') ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="card card-primary w-100">
                            <div class="card-header bg-info">
                                <h3 class="card-title">Novo Produto</h3>
                            </div>
                            <form action="pages/cadastrar_produto.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nome">Nome do produto</label>
                                        <input type="text" class="form-control" id="nome" name="produto[nome]"
                                            placeholder="Digite o nome do produto" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="descricao">Descrição do produto</label>
                                        <textarea class="form-control" rows="3" id="descricao" name="produto[descricao]"
                                            placeholder="Digite a descrição" required style="resize: none;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="valor">Valor do produto</label>
                                        <input type="number" class="form-control" id="valor" name="produto[valor]"
                                            placeholder="Digite o valor do produto" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="quantidade">Quantidade em estoque</label>
                                        <input type="number" class="form-control" id="quantidade"
                                            name="produto[quantidade]" placeholder="Digite a quantidade de itens"
                                            required step="any">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="form-group p-3">
                                                <label for="foto">Foto do produto</label>
                                                <input class="form-control" type="file" name="foto"
                                                    id="foto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer text-right">
                                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php include('includes/components/footer.php') ?>
    </div>
    <!-- ./wrapper -->

    <script src="adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="adminlte/dist/js/adminlte.min.js"></script>

</body>

</html>