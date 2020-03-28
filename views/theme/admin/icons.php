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
            <h3 class="card-title">Icones</h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <ul>
              <li><i class="fad fa-abacus"></i> <span>abacus</span></li>
              <li><i class="fad fa-acorn"></i> <span>acorn</span></li>
              <li><i class="fad fa-ad"></i> <span>ad</span></li>
              <li><i class="fad fa-address-book"></i> <span>address-book</span></li>
              <li><i class="fad fa-address-card"></i> <span>address-card</span></li>
              <li><i class="fad fa-adjust"></i> <span>adjust</span></li>
              <li><i class="fad fa-adjust"></i> <span>adjust</span></li>
            </ul>
            
          </div><!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>