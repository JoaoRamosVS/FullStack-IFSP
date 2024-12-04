<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?=$titulo?><small></small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <?php foreach ($breadcrumb_items as $item): ?>
                    <li class="breadcrumb-item"><a href=<?=$item['ref']?> ><?=$item['nome']?></a></li>
                <?php endforeach ?>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>