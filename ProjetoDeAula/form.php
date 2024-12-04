<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Working with forms</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <div class="row">
                <h1 class='text-center w-100 mt-3'>Enviado dados do funcionário</h1>
            </div>
       
            <div class="row d-flex justify-content-center">
            <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary mt-5">
              <div class="card-header">
                <h3 class="card-title">Cadastro de Usuário</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="pages/cadastro.php" method= "POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="pessoa[nome]" placeholder="Digite seu nome">
                  </div>
                  <div class="form-group">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" name="pessoa[sobrenome]" id="sobrenome" placeholder="Digite seu sobrenome">
                  </div>
                  <div class="form-group">
                    <label for="CPF">CPF</label>
                    <input type="text" class="form-control" name="pessoa[CPF]" id="CPF" placeholder="Digite seu CPF">
                  </div>
                  <div class="form-group">
                    <label for="RG">RG</label>
                    <input type="text" class="form-control" name="pessoa[RG]" id="RG" placeholder="Digite seu RG">
                  </div>
                  <div class="form-group">
                    <label for='data-nascimento'>Data de Nascimento</label>
                    <input type="date" class="form-control" name="pessoa[data-nascimento]" id="data-nascimento" placeholder="Digite seu RG">
                </div>

                <div class="card-body">
                    <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco[rua]" placeholder="Digite seu endereço">
                    </div>
                    <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="endereco[cidade]" id="cidade" placeholder="Digite sua cidade">
                    </div>
                    <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="endereco[estado]" id="estado" placeholder="Digite seu estado">
                    </div>
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

    </body>
</html>