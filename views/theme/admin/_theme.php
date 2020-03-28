<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- <?= $head; ?> -->
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=asset("admin/plugins/fontawesome-pro/css/all.min.css")?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Data tables -->
    <link rel="stylesheet" type="text/css" href="<?=asset("admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css")?>">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?=asset("admin/plugins/daterangepicker/daterangepicker.css")?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?=asset("admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css")?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?=asset("admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")?>">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?=asset("admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?=asset("admin/plugins/select2/css/select2.min.css")?>">
    <link rel="stylesheet" href="<?=asset("admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")?>">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?=asset("admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css")?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=asset("admin/dist/css/adminlte.min.css")?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Erros Style -->
    <link rel="stylesheet" href="<?=asset("admin/dist/css/message.css")?>">
    <!-- Style Free -->
    <link rel="stylesheet" href="<?=asset("admin/dist/css/style.css")?>">

</head>

<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=$router->route("app.home")?>" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contatos</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?=asset("admin/dist/img/user1-128x128.jpg")?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="#" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?=asset("admin/dist/img/user3-128x128.jpg")?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <!-- User Configs -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-cog"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Configurações da Conta</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> <?=$user->user_email;?>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> Mais Informações
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?=$router->route("app.logout")?>" class="dropdown-item dropdown-footer">
            <i class="fal fa-toggle-off"></i>
            Desconectar
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-no-expand">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= (!empty($user->user_img_link) ? asset("{$user->user_img_link}") : asset("admin/dist/img/thumb.jfif"))?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$user->user_first_name . " " . $user->user_last_name;?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?=$router->route("app.home")?>" class="nav-link active">
              <i class="nav-icon fad fa-house"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php if ($user->user_level >= 3): 
            foreach ($module as $mod) :?>
            <?php if (empty($mod->module_father_id)): ?>
              <li class="nav-item has-treeview">
            <a href="<?=(!empty($mod->module_link) ? $router->route("{$mod->module_link}") : '')?>" class="nav-link">
              <i class="nav-icon fad <?=$mod->module_icon?>"></i>
              <p>
                <?=$mod->module_name;?>
                <?=(empty($mod->module_father_id) ? '<i class="fas fa-angle-left right"></i>' : '')?>
              </p>
            </a>
                <ul class="nav nav-treeview">
                  <?php foreach ($submodule as $key): ?>
                    <?php if ($key->module_father_id == $mod->module_id):?>
                    <li class="nav-item">
                      <a href="<?=(!empty($key->module_link) ? $router->route("{$key->module_link}") : '')?>" class="nav-link">
                        <i class="fad <?=$key->module_icon?> nav-icon fa-2x"></i>
                        <p><?=$key->module_name?></p>
                      </a>
                    </li>
                  <?php endif; endforeach; ?>
              </ul>
          </li>
          <?php
          endif;
          endforeach; 
          endif; 
          ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<main class="main_content">
    <?= $v->section("content"); ?>
</main>


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?=asset("admin/plugins/jquery/jquery.min.js");?>"></script>
<!-- Jquery UI -->
<script src="<?=asset("admin/dist/js/jquery-ui.js")?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=asset("admin/plugins/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
<!-- DataTables -->
<script src="<?=asset("admin/plugins/datatables/jquery.dataTables.js")?>"></script>
<script src="<?=asset("admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js")?>"></script>
<!-- Select2 -->
<script src="<?=asset("admin/plugins/select2/js/select2.full.min.js");?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?=asset("admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js");?>"></script>
<!-- InputMask -->
<script src="<?=asset("admin/plugins/moment/moment.min.js");?>"></script>
<script src="<?=asset("admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js");?>"></script>
<!-- date-range-picker -->
<script src="<?=asset("admin/plugins/daterangepicker/daterangepicker.js");?>"></script>
<!-- bootstrap color picker -->
<script src="<?=asset("admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js");?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=asset("admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js");?>"></script>
<!-- Bootstrap Switch -->
<script src="<?=asset("admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js");?>"></script>
<!-- AdminLTE App -->
<script src="<?=asset("admin/dist/js/adminlte.min.js");?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=asset("admin/dist/js/demo.js");?>"></script>

  <?= $v->section("scripts"); ?>

</html>
