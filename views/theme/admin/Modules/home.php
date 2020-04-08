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
            <h1> Cadastro de Módulos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Criar Módulo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <!-- <div class="card card-secondary"></div> -->
            <div class="card">
              <div class="card-header p-4 cad-head">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#regs" data-toggle="tab">Módulos</a></li>
                  <li class="nav-item"><a class="nav-link" href="#cad" data-toggle="tab">Criar Módulo</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="regs">
                    <div class="table-responsive">
                      <?php foreach ($module as $mod): 
                          if(empty($mod->module_father_id)): ?>
                      <table class="table m-0" style="table-layout: fixed;" >
                        <thead>
                        <tr class="title">
                          <th colspan="6"><i class="fas <?=$mod->module_icon?>"></i> <?=$mod->module_name; ?></th>
                          <th class="text-center py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                              <a href="#" class="btn btn-outline-secondary"><i class="fal fa-pencil"></i></a>
                              <a href="#" class="btn btn-outline-danger" data-confirm='Tem certeza que deseja apagar o módulo?'><i class="fal fa-trash"></i></a>
                            </div>
                          </th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($submodule as $key): ?>
                            <?php if ($key->module_father_id == $mod->module_id): ?>
                              <tr>
                                <td colspan="6"><i class="fas <?=$key->module_icon?>"></i> <?=$key->module_name;?></td>
                                <td class="text-center py-0 align-middle">
                                  <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-outline-secondary"><i class="fal fa-pencil"></i></a>
                                    <a href="<?=$router->route("app.modremove", ['id'=>$key->module_id])?>" class="btn btn-outline-danger" data-confirm='Tem certeza que deseja apagar o módulo?'><i class="fal fa-trash"></i></a>
                                  </div>
                                </td>
                              </tr>
                            <?php endif ?>
                          <?php endforeach;?>
                        </tbody>
                      </table>
                        <?php endif; endforeach; ?>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="cad">
                    <form class="form-horizontal" action="" method="POST">

                      <div class="form-group row">
                        <label for="icon" class="col-sm-2 col-form-label">Nome do Módulo</label>
                        <div class="col-sm-10 input-group">
                          <input type="email" class="form-control rounded-0" id="icon" placeholder="Ferramentas...">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Icone</label>
                        <div class="col-sm-10 input-group">
                          <input type="email" class="form-control rounded-0" id="inputEmail" placeholder="Ex.: fa fa-home ou fad fa-home">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Tipo de Módulo</label>
                        <div class="col-sm-10">
                          <select class="select2" name="level" style="width: 100%;">
                          <option value="null" selected="select">Módulo Pai</option>
                          <?php foreach ($module as $key): ?>
                            <?php if ($key->module_father_id == null): ?>
                                <option value="<?=$key->module_id?>">Filho de <?=$key->module_name?></option>
                            <?php else: ?>
                            <?php endif ?>
                          <?php endforeach ?>
                        </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control rounded-0" id="inputSkills" placeholder="app.example">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                          <div class="col-md-6 mb-3">
                          <div class="icheck-success d-inline mr-5">
                            <input type="radio" id="active" name="status" checked="checked" value="1">
                            <label for="active">
                              Ativo
                            </label>
                          </div>
                          <div class="icheck-danger d-inline ">
                              <input type="radio" id="inactive" name="status" value="2">
                              <label for="inactive">
                                Inativo
                              </label>
                            </div>
                        </div>
                        </div>
                        
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-outline-primary rounded-0">Criar Módulo</button>
                          <a href="<?=$router->route("app.modules")?>" class="btn btn-outline-secondary rounded-0">Voltar</a>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
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
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
        {
            ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
        },
        function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
        format: 'LT'
        })
        
        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })
</script>
<?php $v->end(); ?>

<!-- MODAL -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger text-white">  
            <h4 class="modal-title">Excluir Módulo</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <p>Tem certeza que deseja deletar este módulo?</p>
          </div>
          <div class="modal-footer">
            <a type="button" class="btn btn-default" data-dismiss="modal">Cancelar</a>
            <a type="button" class="btn btn-danger" id="data-confirm">Confirmar</a>
          </div>
        </div>
      </div>
    </div>
</body>



<!-- form start -->
<!--               <form role="form" id="quickForm">
                <div class="card-body">
                  <label for="#">Icone</label>
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fad fa-icons"></i></span>
                    </div>
                    <input type="text" name="icon" class="form-control rounded-0" id="icon_desc" placeholder="Ex.: fa fa-bars">
                  </div>
                  <label for="#">Nome do Módulo</label>
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" name="icon" class="form-control rounded-0" id="icon_desc" placeholder="Exemplo">
                  </div>

                  <div class="input-group mb-3">
                    <label for="level">
                      Tipo de Módulo
                    </label>
                    <select class="select2" name="level" style="width: 100%;">
                      <option value="null" selected="select">Módulo Pai</option>
                      <?php foreach ($module as $key): ?>
                        <?php if ($key->module_father_id == null): ?>
                            <option value="<?=$key->module_id?>">Filho de <?=$key->module_name?></option>
                        <?php else: ?>
                        <?php endif ?>
                      <?php endforeach ?>
                    </select>
                  </div>
                  
                  <label for="#">Link</label>
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" name="icon" class="form-control rounded-0" id="icon_desc" placeholder="app.example">
                  </div>
                  
                  
                  <div class="input-group mb-3">
                    <label for="level">
                      Nivel de Acesso
                    </label>
                    <select class="select2" name="level" style="width: 100%;">
                      <option value="3">Administrador</option>
                      <option value="2">Cliente</option>
                      <option value="1">Usuário</option>
                    </select>
                  </div>

                  <div class="form-group clearfix">
                    <label>Status</label>
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <div class="icheck-success d-inline">
                        <input type="radio" id="active" name="status" checked="checked" value="1">
                        <label for="active">
                          Ativo
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="icheck-danger d-inline">
                      <input type="radio" id="inactive" name="status" value="2">
                      <label for="inactive">
                        Inativo
                      </label>
                    </div>
                    </div>
                  </div>
                </div>

                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Criar Módulo</button>
                  <a href="<?=$router->route("app.modules")?>" type="submit" class="btn btn-outline-secondary btn-flat">voltar</a>
                </div>
              </form> -->