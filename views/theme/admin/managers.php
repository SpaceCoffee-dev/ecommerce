<?php $v->layout("theme/admin/_theme"); ?>

<body class="hold-transition sidebar-mini text-sm">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-3 mt-3">
          <div class="col-sm-6 pl-4">
            <h1><i class="fad fa-user-crown"></i> Administradores</h1>
          </div>
          <div class="col-sm-6 pr-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=$router->route("app.home")?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Administradores</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  <?=$user_level?>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?=$user->user_first_name . " " . $user->user_last_name?></b></h2>
                      <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                    </div>
                    <div class="col-5 text-center">
                      <img src="<?=asset("admin/dist/img/thumb.jfif")?>" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

</div>
<!-- ./wrapper -->


<?php $v->start("scripts"); ?>
<!-- Page script -->
<script>
    $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<?php $v->end(); ?>

</body>

