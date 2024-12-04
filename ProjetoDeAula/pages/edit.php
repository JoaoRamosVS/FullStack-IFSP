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

    <?php include('edit_helper.php') ?>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <div class="row">
                <h1 class='text-center w-100 mt-3'>Atualizando dados do funcionário</h1>
            </div>
       
            <div class="row d-flex justify-content-center">
            <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary mt-5">
              <div class="card-header">
                <h3 class="card-title">Atualizar Usuário</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="edicao.php" method= "POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="pessoa[nome]" value="<?= $pessoa['nome']?>" placeholder="Digite seu nome">
                  </div>
                  <div class="form-group">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" name="pessoa[sobrenome]" id="sobrenome" value="<?= $pessoa['sobrenome']?>" placeholder="Digite seu sobrenome">
                  </div>
                  <div class="form-group">
                    <label for="CPF">CPF</label>
                    <input type="text" class="form-control" name="pessoa[CPF]" id="CPF" value="<?= $pessoa['cpf']?>" placeholder="Digite seu CPF">
                  </div>
                  <div class="form-group">
                    <label for="RG">RG</label>
                    <input type="text" class="form-control" name="pessoa[RG]" id="RG" value="<?= $pessoa['rg']?>" placeholder="Digite seu RG">
                  </div>
                  <div class="form-group">
                    <label for='data-nascimento'>Data de Nascimento</label>
                    <input type="date" class="form-control" name="pessoa[data-nascimento]" id="data-nascimento" value="<?= $pessoa['nascimento']?>" placeholder="Digite seu RG">
                </div>

                <div class="card-body">
                    <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco[rua]" value="<?= $pessoa['rua']?>" placeholder="Digite seu endereço">
                    </div>
                    <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="endereco[cidade]" id="cidade" value="<?= $pessoa['cidade']?>" placeholder="Digite sua cidade">
                    </div>
                    <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="endereco[estado]" id="estado" value="<?= $pessoa['estado']?>" placeholder="Digite seu estado">
                    </div>
                </div>

                </div>
                <!-- /.card-body -->
                <input type="hidden" name="id" value="<?= $id ?? '' ?>">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
            </div>

        </div>

        <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../adminlte/dist/js/adminlte.min.js"></script>
    </body>
</html>