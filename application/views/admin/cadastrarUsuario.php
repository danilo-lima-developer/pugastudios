<?php
echo $this->validacao_model->sessao();

if($this->session->userdata('perfil') != 1){
    redirect('login/redirecionar');
}
?>

<script>
    $(document).ready(function() {
      $('#fone').mask('(00) 0.0000-0000');
    });
  </script>

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cadastro Usuário <small>*</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" name="demo-form" method="post" action="cadastrar_usuario" data-parsley-validate>
                        <div class="form-group">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <label for="nome">Nome Completo * :</label>
                                <input type="text" id="nome" class="form-control" placeholder="Nome completo" name="nome" required />
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <label for="nickname">Nickname * :</label>
                                <input type="nickname" id="nickname" class="form-control" placeholder="Nickname" name="nickname" data-parsley-trigger="change" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label for="email">E-mail * :</label>
                                <input type="email" id="email" class="form-control" placeholder="E-mail" name="email" data-parsley-trigger="change" required />
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <label for="senha">Senha * :</label>
                                <input type="password" id="senha" class="form-control" placeholder="Senha" name="senha" data-parsley-trigger="change" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <label for="fone">Telefone * :</label>
                                <input type="text" id="fone" class="form-control" placeholder="Telefone" name="fone" data-parsley-trigger="change" required />
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <label for="id_tipo_usuario">Perfil Usuário *:</label>
                                <select id="id_tipo_usuario" name="id_tipo_usuario" class="form-control" required>
                                    <option value="0">Selecione..</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Usuário</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">    
                            <div class="col-md-12">             
                                <br />
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                    <!-- end form for validations -->

                </div>
            </div>
        </div>
    </div>
</div>