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
        <div class="card card-default card-outline">
          <div class="card-header">
            <h3 class="card-title">Font Awesome</h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <blockquote>
              <p>Com esse template você pode usar qualquer icone do FontAwesome!</p>
              <a href="https://fontawesome.com/" target="_blank">FontAwesome - Pro</a> 
            </blockquote> 
          </div><!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>