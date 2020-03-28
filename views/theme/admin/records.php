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
            <h1><i class="fad fa-users"></i> Todos os Usuários</h1>
          </div>
          <div class="col-sm-6 pr-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=$router->route("app.home")?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Usuários</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?=$users?> Usuário(s) registrados!</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Nivel</th>
                  <th>Registrado</th>
                  <th>E-mail</th>
                  <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($regs as $userss):

                      $level = $userss->user_level;
                      switch ($level) {
                        case 1:
                          $level = 'Usuário';
                          break;
                        case 2:
                          $level = 'Cliente';
                          break;
                        case 3:
                          $level = 'Administrador';
                          break;
                        
                        default:
                          $level = 'Usuário';
                          break;
                      }
                    ?>
                  <tr>
                    <td><?=$userss->user_id?></td>
                    <td><?=$userss->user_first_name ." ". $userss->user_last_name;?></td>
                    <td><?=$level;?></td>
                    <td><?=$userss->created_at;?></td>
                    <td><?=$userss->user_email;?></td>
                    <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fal fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fal fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
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

