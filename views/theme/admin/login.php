
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=asset("admin/plugins/fontawesome-free/css/all.min.css")?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=asset("admin/dist/css/adminlte.min.css")?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Erros Style -->
    <link rel="stylesheet" href="<?=asset("admin/dist/css/message.css")?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">
        
      </p>

      <form action="<?=$router->route("auth.login")?>" method="post">
      <div class="login_form_callback">
          <?=flash();?>
          <p class="text-center">Digite seus dados abaixo para ter acesso ao painel de Controle!</p>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="E-mail" name="email" id="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Senha" name="passwd" id="passwd">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Lembrar de Mim
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button class="btn btn-green btn-large">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="<?=$router->route("app.forget")?>">Esqueci minha senha!</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<?php $v->start("scripts"); ?>
 <!-- Form JS -->
  <script src="<?=asset("admin/dist/js/form.js")?>"></script>
<?php $v->end(); ?>
</body>
</html>
