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
            <h1><i class="fad fa-user-astronaut"></i> Adicionar Usuário</h1>
          </div>
          <div class="col-sm-6 pr-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=$router->route("app.home")?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Cadastro</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <?=flash();?>
        <div class="card">

          <div class="card-header p-4 cad-head">
            <h3 class="card-title">Cadastro de Usuários!</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="post" class="form-horizontal" action="<?=$router->route("auth.register")?>">
              <div class="row">
              <div class="col-md-3">
                
               <div class="card card-default card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="<?=asset("admin/dist/img/thumb.jfif")?>" alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center">Foto de Perfil</h3>

                  <p class="text-muted text-center">Esolha sua imagem</p>

                  <a href="#" class="btn btn-outline-primary btn-block btn-flat"><b>Editar</b></a>
                </div>
                <!-- /.card-body -->
              </div>
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" >Nome:</label>
                  <div class="col-sm-10 input-group mb-3">
                    <input type="text" class="form-control rounded-0" placeholder="Nome" id="name" name="name">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" >Sobrenome:</label>
                  <div class="col-sm-10 input-group mb-3">
                    <input type="text" class="form-control rounded-0" placeholder="Sobrenome" id="lastName" name="lastName">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Senha:</label>
                  <div class="col-sm-10 input-group mb-3">
                    <input type="password" class="form-control rounded-0" placeholder="******" placeholder="password" name="password">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">E-mail:</label>
                  <div class="col-sm-10 input-group mb-3">
                    <input type="email" class="form-control rounded-0" placeholder="exemplo@gmail.com" id="email" name="email">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="level">Nivel de Acesso</label>
                  <div class="input-group col-sm-10 mb-3">
                    <select class="select2" name="level" style="width: 100%;">
                      <option value="3">Administrador</option>
                      <option value="2">Cliente</option>
                      <option value="1">Usuário</option>
                    </select>
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
                  <label class="col-sm-2 col-form-label">Descrição</label>
                  <div class="col-sm-10">
                    <textarea class="col-md-12 form-control rounded-0" rows="3" placeholder="Algo sobre mim"></textarea>
                  </div>
                </div>

              </div>
            </div>
            <!-- /.row -->
            <div class="card-footer">
            <button type="submit" class="btn btn-outline-primary btn-flat">Cadastrar</button>
            <button type="submit" class="btn btn-outline-secondary btn-flat">voltar</button>
          </div>
            </form>
          </div>

          
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

</body>

