<?php $v->layout("theme/admin/_theme"); ?>
<body class="hold-transition sidebar-mini text-sm">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Icones</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=$router->route("app.home")?>">Home</a></li>
              <li class="breadcrumb-item active">Icones</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Icones</h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <p>Você pode usar qualquer biblioteca de fontes que você gosta com o AdminLTE 3.</p>
            <strong>Nós recomendamos essas:</strong>
            <div>
              <a href="https://fontawesome.com/" target="_blank">Font Awesome</a><br>
              <a href="https://useiconic.com/open/" target="_blank">Iconic Icons</a><br>
              <a href="http://ionicons.com/" target="_blank">Ion Icons</a><br>
            </div>
          </div><!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>