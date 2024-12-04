<?php
$titulo = 'Alterar';
$breadcrumb_items = [
    ['nome' => 'Início', 'ref' => '../index.php'],
    ['nome' => 'Listagem', 'ref' => '../list.php'],
    ['nome' => 'Alterar', 'ref' => '#']
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JVinis</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">
        <?php include('detalhar_cliente.php') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php include('../includes/components/breadcrumb.php') ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="card card-outline card-warning w-100">
                            <div class="card-header">
                                <h3 class="card-title">Alterar dados do usuário</h3>
                            </div>
                            <form action="editar_cliente.php" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nome">Nome Completo</label>
                                        <input type="text" class="form-control" id="nome" name="cliente[nome]"
                                        value="<?=$cliente['NOME']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="documento">Documento <small>(sem pontos e traços)</small></label>
                                        <input type="text" class="form-control" id="documento" name="cliente[documento]"
                                        value="<?= $cliente['DOCUMENTO']?>">
                                    </div>
                                    <div class="form-group">
                                        <input disabled type="radio" name="cliente[tipo_documento]" id="pf" value="1"
                                        <?php if ($cliente['TIPO_USUARIO'] === '1') echo 'checked'; ?>>
                                        <label style="padding-right: 15px" for="pf">Pessoa Física</label>
                                        <input disabled type="radio" name="cliente[tipo_documento]" id="pj" value="2"
                                        <?php if ($cliente['TIPO_USUARIO'] === '2') echo 'checked'; ?>>
                                        <label style="padding-right: 15px" for="pj">Pessoa Jurídica</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Endereço de email</label>
                                        <input type="email" class="form-control" id="email" name="cliente[email]"
                                        value="<?= $cliente['EMAIL']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="senha">Senha</label>
                                        <input type="password" class="form-control" id="senha" name="cliente[senha]"
                                        value="<?=$cliente['SENHA']?>">
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label for="logradouro">Logradouro <small>(com número da residência)</small></label>
                                        <input type="text" class="form-control" id="logradouro" name="endereco[logradouro]"
                                        value="<?= $cliente['RUA']?>">
                                    </div>
                                    <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="complemento">Complemento</label>
                                        <input type="text" class="form-control" id="complemento" name="endereco[complemento]"
                                        value="<?= $cliente['COMPLEMENTO']?>">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="bloco">Bloco</label>
                                        <input type="text" class="form-control" id="bloco" name="endereco[bloco]"
                                        value="<?= $cliente['BLOCO']?>">
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="bairro">Bairro</label>
                                        <input type="text" class="form-control" id="bairro" name="endereco[bairro]"
                                        value="<?= $cliente['BAIRRO']?>">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="cidade">Cidade</label>
                                        <input type="text" class="form-control" id="cidade" name="endereco[cidade]"
                                        value="<?= $cliente['CIDADE']?>">
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="estado">Estado</label>
                                            <input type="text" maxlength="2" class="form-control" id="estado" name="endereco[estado]"
                                            value="<?= $cliente['ESTADO']?>">
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="CEP">CEP</label>
                                            <input type="text" maxlength="8" class="form-control" id="CEP" name="endereco[cep]"
                                            value="<?= $cliente['CEP']?>">
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="telefone">Telefone</label>
                                            <input type="text" class="form-control" id="telefone" name="endereco[telefone]"
                                            value="<?= $cliente['TELEFONE']?>">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="foto">Foto de perfil</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto">
                                                <label class="custom-file-label" for="foto">Escolha o arquivo</label>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- /.card-body -->
                                <input type="hidden" name="endereco[cliente_id]" value="<?=$cliente['CLIENTE_ID']?>">
                                <div class="card-footer text-center">
                                <button type="submit" class="btn btn-warning">Alterar</button>
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
        <?php include('../includes/components/footer.php') ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../adminlte/dist/js/adminlte.min.js"></script>

</body>

</html>