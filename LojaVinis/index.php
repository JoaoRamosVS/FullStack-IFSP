<?php
$titulo = '';
$breadcrumb_items = [
  ['nome' => '', 'ref' => '']
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
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="styles\style.css">

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
            <div class="carousel-container">
              <div class="carousel">
                <div class="item active">
                  <img src="https://i.pinimg.com/originals/4d/70/b0/4d70b0e2acf46a582691b25881f2011c.jpg"
                    alt="Cantor Djavan" />
                  <p class="caption">Discos do DJAVAN</p>
                </div>
                <div class="item">
                  <img src="https://www.revistadue.com/wp-content/uploads/2016/11/monte-marisa-5489c9007c3a2.jpg"
                    alt="Cantora Marisa Monte" />
                  <p class="caption">Discos da MARISA MONTE</p>
                </div>
                <div class="item">
                  <img
                    src="https://i0.wp.com/blog.bileskydiscos.com.br/wp-content/uploads/2017/09/jorge-ben.jpg?fit=1920%2C1200&ssl=1"
                    alt="Cantor Jorge Ben Jor" />
                  <p class="caption">Discos do JORGE BEN JOR</p>
                </div>
              </div>
              <button class="btn prev"><</button>
                  <button class="btn next">></button>
                  <div class="dots"></div>
            </div>
          </div>
          <!-- /.row -->

          <div class="row">
            <h3 class="mt-4 mb-4 mx-auto"><br><br>CATEGORIAS</h3>
          </div>
          <div class="row">
            <table class="tableCards">
              <tr>
                <td>
                  <a href="listProdutos.php">
                    <img src="assets/HomeCard-1.png" alt="">
                  </a>
                </td>
                <td>
                  <a href="listProdutos.php">
                    <img src="assets/HomeCard-2.png" alt="">
                  </a>
                </td>
                <td>
                  <a href="listProdutos.php">
                    <img src="assets/HomeCard-3.png" alt="">
                  </a>
                </td>
              </tr>
            </table>
          </div>
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
  <script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
  <script src="scripts/carousel.js"></script>
</body>

</html>