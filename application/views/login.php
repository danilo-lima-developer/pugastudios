<?php if($this->session->userdata('logado') == true){
  redirect('login/redirecionar');
}?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PUGA STUDIOS | LOGIN </title>
    <link rel="shortcut icon" href="<?php BASE_URL()?>assets/imagens/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="<?php BASE_URL()?>template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php BASE_URL()?>template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php BASE_URL()?>template/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php BASE_URL()?>template/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php BASE_URL()?>template/build/css/custom.min.css" rel="stylesheet">

    <!-- add by Danilo -->
    <script src="<?= BASE_URL() ?>assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?= BASE_URL() ?>assets/js/jquery.mask.js"></script>
  </head>
  <script>
     $(document).ready(function() {
       $('#fone').mask('(00) 0.0000-0000');
     });
  </script>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="loginForm" method="post" action="<?= base_url() ?>login/validar">
              <h1>Puga Login</h1>
              <div>
                <input id="nickname" name="nickname" type="text" class="form-control" placeholder="Nome de Usuário" required="required" />
              </div>
              <div>
                <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha" required="required" />
              </div>
              <div>
                <button type="submit" class="btn btn-success">Entrar</button>
                <!-- <a class="reset_pass" href="#">Esqueceu sua senha?</a> -->
              </div>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Novo no site?
                  <a href="#signup" class="to_register"> Criar Conta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-gamepad"></i> PUGA</h1>
                  <p>Avaliação PUGA Studios por <a href="https://www.linkedin.com/in/danilolimas/" target="_blank">DANILO LIMA</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form id="registerForm" method="post" action="<?= base_url() ?>login/cadastrar">
              <h1>Criar Conta</h1>
              <div>
                <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome" required="" />
              </div>
              <div>
                <input id="nickname" name="nickname" type="text" class="form-control" placeholder="Nome de Usuário" required="" />
              </div>
              <div>
                <input id="email" name="email" type="email" class="form-control" placeholder="E-mail" required="" />
              </div>
              <div>
              <div>
                <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha" minlength="6" required="" />
              </div>
              <div>
                <input id="fone" name="fone" type="text" class="form-control" placeholder="Fone" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-success">Cadastrar</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Já está registrado ?
                  <a href="#signin" class="to_register"> Entrar </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-gamepad"></i> PUGA</h1>
                  <p>Avaliação PUGA Studios por <a href="https://www.linkedin.com/in/danilolimas/" target="_blank">DANILO LIMA</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
