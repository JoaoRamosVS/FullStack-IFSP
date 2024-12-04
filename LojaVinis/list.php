<?php
$titulo = 'Listagem';
$breadcrumb_items = [
    ['nome' => 'Início', 'ref' => 'index.php'],
    ['nome' => 'Listagem', 'ref' => 'list.php']
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
    <link rel="stylesheet" href="styles\style.css">
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
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
            <?php include('pages/listar_clientes.php') ?>
            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row" style="gap: 15px">
                        <?php foreach ($data as $cliente): ?>
                            <div class="card card-widget widget-user-2">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-info">
                                    <div class="widget-user-image">
                                        <img class="img-circle" src="assets/useravatar.png" alt="User Avatar">
                                    </div>
                                    <!-- /.widget-user-image -->
                                    <h3 class="widget-user-username"><?= $cliente['NOME'] ?></h3>
                                    <h5 class="widget-user-desc">
                                        <small><?= $cliente['BAIRRO'] . ', ' . $cliente['ESTADO'] ?></small>
                                    </h5>
                                    <h6 class="widget-user-desc"><small><?= $cliente['EMAIL'] ?></small></h6>
                                </div>
                                <div class="card-footer p-0">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="pages/details.php?id=<?= $cliente['CLIENTE_ID'] ?>" class="nav-link"
                                                style="color: #4D4D4F">
                                                Detalhes <i class="nav-icon fas fa-book float-right"
                                                    style="padding-right: 5px; padding-top: 3px"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/edit.php?id=<?= $cliente['CLIENTE_ID'] ?>" class="nav-link"
                                                style="color: #FFC107">
                                                Alterar <i class="nav-icon fas fa-edit float-right"
                                                    style="padding-top: 3px"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" onclick="confirmarDelecao(event)" class="nav-link"
                                                style="color: #DC3545">
                                                Deletar <i class="nav-icon fas fa-trash float-right"
                                                    style="padding-right: 5px; padding-top: 3px"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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

    <script>
        function confirmarDelecao(event) {
            event.preventDefault();
            const confirma = confirm("Você tem certeza que deseja deletar este usuário?");
            if (confirma) {
                window.location.href = 'pages/apagar_cliente.php?id=<?= $cliente['CLIENTE_ID'] ?>';
            }
        }
    </script>

</body>

</html>