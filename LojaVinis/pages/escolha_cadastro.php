<?php
$titulo = 'Escolha o tipo de cadastro';
$breadcrumb_items = [
    ['nome' => 'Início', 'ref' => '../index.php'],
    ['nome' => 'Escolha', 'ref' => '#']
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JVinis</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://api.fontshare.com/v2/css?f[]=satoshi@1&amp;display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../styles/style.css">

</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="padding-top: 5px">
            <!-- Content Header (Page header) -->
            <?php include('../includes/components/breadcrumb.php') ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6" style="display:flex; justify-content: center; align-items: center; height:80svh; flex-wrap: nowrap">
                            <a class="btn btn-app bg-success" href="../formProduto.php" style="width: 200px; height: 200px; display:flex; align-items: center; justify-content: center; flex-direction: column; font-size: 1rem">
                            <i class="fas fa-barcode"></i>    
                            Produtos
                            </a>
                        </div>
                        <div class="col-md-6" style="display:flex; justify-content: center; align-items: center; height:80svh">
                            <a class="btn btn-app bg-success" href="../form.php" style="width: 200px; height: 200px; display:flex; align-items: center; justify-content: center; flex-direction: column; font-size: 1rem">
                                <i class="fas fa-users"></i>
                                Usuários
                            </a>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <?php include('../includes/components/footer.php') ?>
    </div>
    <!-- ./wrapper -->

    <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../adminlte/dist/js/adminlte.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
</body>

</html>