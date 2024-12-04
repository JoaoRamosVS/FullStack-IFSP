<?php
$titulo = 'Produtos';
$breadcrumb_items = [
    ['nome' => 'Início', 'ref' => 'index.php'],
    ['nome' => 'Produtos', 'ref' => 'listProdutos.php']
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JVinis</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">
        <?php include('includes/components/navbar.php') ?>
        <?php include('includes/components/sidebar.php') ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php include('includes/components/breadcrumb.php') ?>
            <!-- /.content-header -->
            <?php include('pages/listar_produtos.php') ?>
            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row" style="gap: 20px; justify-content: center;">
                        <?php foreach ($produtos as $produto): ?>
                            <a href="produto.php?id=<?= $produto->getId();?>">
                                <div class="card card-widget widget-user-2" style="width: 232px; height: 307px;">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header mx-auto">
                                        <div class="widget-user-image" style="width: 200px; height: 200px">
                                            <img style="width: 200px; height: 200px"
                                                src="<?= $produto->getCaminhoFotoCapa(); ?>" alt="User Avatar">
                                        </div>
                                    </div>
                                    <div class="card-footer p-0"
                                        style="display: flex; flex-direction: column; text-align: center; max-width: 232px;">
                                        <span class="nomeProduto p-2"
                                            style="color:#000; font-size: 1rem; text-wrap: nowrap; overflow: hidden; text-overflow:ellipsis"><?= $produto->getNome(); ?></span>
                                        <span class="preco p-2" style="color:#f14747; font-weight: bold">R$
                                            <?= $produto->getValor(); ?></span>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach ?>
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