<?php
$titulo = 'Cadastro';
$breadcrumb_items = [
    ['nome' => 'Início', 'ref' => 'index.php'],
    ['nome' => 'Cadastro', 'ref' => 'form.php']
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
                            <div class="card-header">
                                <h3 class="card-title">Novo Usuário</h3>
                            </div>
                            <form action="pages/cadastrar_cliente.php" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nome">Nome Completo</label>
                                        <input type="text" class="form-control" id="nome" name="cliente[nome]"
                                            placeholder="Digite o nome completo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="documento">Documento <small>(sem pontos e traços)</small></label>
                                        <input type="text" class="form-control" id="documento" name="cliente[documento]"
                                            placeholder="Digite o documento" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="cliente[tipo_documento]" id="pf" value="1">
                                        <label style="padding-right: 15px" for="pf">Pessoa Física</label>
                                        <input type="radio" name="cliente[tipo_documento]" id="pj" value="2">
                                        <label style="padding-right: 15px" for="pj">Pessoa Jurídica</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Endereço de email</label>
                                        <input type="email" class="form-control" id="email" name="cliente[email]"
                                            placeholder="Digite o email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="senha">Senha</label>
                                        <input type="password" class="form-control" id="senha" name="cliente[senha]"
                                            placeholder="Digite a senha" required>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label for="logradouro">Logradouro <small>(com número da
                                                residência)</small></label>
                                        <input type="text" class="form-control" id="logradouro"
                                            name="endereco[logradouro]" placeholder="Digite o logradouro" required>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="complemento">Complemento</label>
                                            <input type="text" class="form-control" id="complemento"
                                                name="endereco[complemento]" placeholder="Digite o complemento">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="bloco">Bloco</label>
                                            <input type="text" class="form-control" id="bloco" name="endereco[bloco]"
                                                placeholder="Digite o bloco">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="bairro">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="endereco[bairro]"
                                                placeholder="Digite o bairro" required>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="cidade">Cidade</label>
                                            <input type="text" class="form-control" id="cidade" name="endereco[cidade]"
                                                placeholder="Digite o cidade" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="estado">Estado</label>
                                            <input type="text" maxlength="2" class="form-control" id="estado"
                                                name="endereco[estado]" placeholder="Digite o estado" required>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="CEP">CEP</label>
                                            <input type="text" maxlength="8" class="form-control" id="CEP"
                                                name="endereco[cep]" placeholder="Digite o CEP" required>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="telefone">Telefone</label>
                                            <input type="text" class="form-control" id="telefone"
                                                name="endereco[telefone]" placeholder="Digite o telefone" required>
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

                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
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