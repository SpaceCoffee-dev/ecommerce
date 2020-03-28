<?php $v->layout("theme/admin/_theme"); ?>

<body class="hold-transition sidebar-mini text-sm">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pagina Inicial</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Lista de Módulos</h3>

                <div class="card-tools">
                  <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Adicionar Novo Módulo</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <?php foreach ($module as $mod): 
                      if(empty($mod->module_father_id)): ?>
                  <table class="table m-0">
                    <thead>
                    <tr class="title">
                      <th width="100%"><?=$mod->module_name; ?></th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($submodule as $key): ?>
                        <?php if ($key->module_father_id == $mod->module_id): ?>
                          <tr>
                            <td><?=$key->module_name;?></td>
                            <td><span class="badge badge-success">Shipped</span></td>
                            <td>
                              <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                            </td>
                          </tr>
                        <?php endif ?>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                <?php endif; endforeach; ?>
                </div>
                <!-- /.table-responsive -->
              </div>
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

</body>
</html>



<!-- <?php foreach ($module as $key): ?>
                        <?php if ($key->module_father_id == null): ?>
                        <tr>
                          <td><i class="fad <?=$key->module_icon?>"></i> <?=$key->module_name; ?></td>
                          <td><?="teste"?></td>
                          <td><span class="badge badge-success">Ativo</span></td>
                          <td class="text-left py-0 align-middle">
                          <div class="btn-group btn-group-sm">
                              <a href="#" class="btn btn-info"><i class="fal fa-pencil"></i></a>
                              <a href="#" class="btn btn-danger"><i class="fal fa-trash"></i></a>
                            </div>
                          </td>
                        </tr>
                        <?php endif ?>
                        <?php if ($key->module_father_id != null): ?>
                          <tr style="background-color: #efefef">
                            <td><i class="fad <?=$key->module_icon?>"></i> <?=$key->module_name; ?></td>
                            <td><?=date("d/m/Y", $key->created_at)?></td>
                            <td><span class="badge badge-<?=($key->module_status == '0' ? 'danger' : ($key->module_status == '2') ? 'warning' : 'success')?>"><?=($key->module_status == 0 ? 'Inativo' : ($key->module_status == 2) ? 'Em Espera' : 'Ativo')?></span></td>
                            <td class="text-left py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fal fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fal fa-trash"></i></a>
                              </div>
                            </td>
                          </tr>
                        <?php endif ?>
                      <?php endforeach;?> -->






                <!--       <div class="card-body p-0">
                <div class="table-responsive">
                      <?php foreach ($module as $mod): 
                      if(empty($mod->module_father_id)): ?>
                        <table class="table table-hover text-nowrap">
                          <thead>
                            <tr><?=$mod->module_name?></tr>
                          </thead>
                          <tbody>

                            <?php foreach ($submodule as $key): ?>
                              <?php if ($key->module_father_id == $mod->module_id): ?>
                                <tr><?=$key->module_name?></tr>
                              <?php endif ?>
                            <?php endforeach;?>

                          </tbody>
                        </table>
                  <?php endif; endforeach; ?>
                </div>
              </div> -->