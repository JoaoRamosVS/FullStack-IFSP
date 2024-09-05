<?php

$rs = [
    ['id' => 11, 'nome' => 'Maria', 'snome' => 'Silva', 'idade' => 22, 'genero' => 'feminino'],
    ['id' => 12, 'nome' => 'Ana', 'snome' => 'Motta', 'idade' => 18, 'genero' => 'feminino'],
    ['id' => 13, 'nome' => 'Bia', 'snome' => 'Oliveira', 'idade' => 29, 'genero' => 'feminino'],
    ['id' => 14, 'nome' => 'Eva', 'snome' => 'Braun', 'idade' => 42, 'genero' => 'feminino'],
    ['id' => 15, 'nome' => 'Julia', 'snome' => 'Fateau', 'idade' => 62, 'genero' => 'feminino'],
];

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <?php include('includes/component/top-navbar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php include('includes/component/breadcrumb2.php') ?>

        <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Nome</th>
                      <th>Sobrenome</th>
                      <th>Idade</th>
                      <th style="width: 40px">Sexo</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach($rs as $pessoa):   ?>

                        <tr>
                            <td><?= $pessoa['id']?></td>
                            <td><?= $pessoa['nome']?></td>
                            <td><?= $pessoa['snome']?></td>
                            <td><?= $pessoa['idade']?></td>
                            <td><?= $pessoa['genero']?></td>
                        </tr>

                    <?php endforeach ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            <!-- /.card -->