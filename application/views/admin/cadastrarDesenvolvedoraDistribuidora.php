<?php
echo $this->validacao_model->sessao();

if($this->session->userdata('perfil') != 1){
    redirect('login/redirecionar');
}
?>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cadastro Desenvolvedora/Distribuidora <small>*</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" name="demo-form" method="post" action="cadastrar_desenvolvedora_distribuidora" data-parsley-validate>
                        <div class="form-group">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <label for="descricao">Descrição Desenvolvedora/Distribuidora * :</label>
                                <input type="text" id="descricao" class="form-control" placeholder="Descrição" name="descricao" required />
                            </div>
                        </div>
                        
                        <div class="form-group">    
                            <div class="col-md-12">             
                                <br />
                                <button type="submit" class="btn btn-success btn-xs">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                    <!-- end form for validations -->

                </div>
            </div>
        </div>
    </div>
</div>