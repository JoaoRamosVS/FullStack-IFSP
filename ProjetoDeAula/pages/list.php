<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Working with forms</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">
    </head>

    <?php include('list_helper.php') ?>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <div class="row">
                <h1 class='text-center w-100 mt-3'>Lista de Usuários</h1>
            </div>

            <table class="table">
                <thead>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Nascimento</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach ($data as $pessoa): ?> 
                        <tr>
                            <td><?= $pessoa['nome'] ?></td>
                            <td><?= $pessoa['sobrenome'] ?></td>
                            <td><?= $pessoa['nascimento'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $pessoa['id'] ?>">
                                    <i class="fas fa-edit mr-3 text-primary"></i>
                                </a>
                                <a href="delete.php?id=<?= $pessoa['id'] ?>">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

            </div>

<script src="../adminlte/plugins/jquery/jquery.min.js"></script>
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>