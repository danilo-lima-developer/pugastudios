<?php
echo $this->validacao_model->sessao();

if($this->session->userdata('perfil') != 2){
    redirect('login/redirecionar');
}
?>
  <script>
     $(document).ready(function() {
       $('#nota').mask('0.00');
     });
  </script>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cadastro Jogo <small>*</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" name="demo-form" method="post" action="cadastrar_jogo" data-parsley-validate>
                        <div class="form-group">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <label for="titulo">Título Jogo * :</label>
                                <input type="text" id="titulo" class="form-control" placeholder="Título jogo" name="titulo" required />
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <label for="ano_publicacao">Ano Publicação * :</label>
                                <input type="text" id="ano_publicacao" class="form-control" placeholder="Ano Publicação" name="ano_publicacao" minlength="4" maxlength="4" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <label for="id_estilo">Estilo do Jogo *:</label>
                                <select id="id_estilo" name="id_estilo" class="form-control" required>
                                    <option value="" selected disabled>Selecione..</option>
                                    <?php foreach ($estilos as $key => $value) { ?>
                                        <option value="<?php echo $value['id_estilo'] ?>"><?php echo $value['descricao']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>  
                        <div class="form-group">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <label for="id_desenvolvedora_distribuidora">Desenvolvedora/Distribuidora *:</label>
                                <select id="id_desenvolvedora_distribuidora" name="id_desenvolvedora_distribuidora" class="form-control" required>
                                    <option value="" selected disabled>Selecione..</option>
                                    <?php foreach ($desenvolvedoras as $key => $value) { ?>
                                        <option value="<?php echo $value['id_desenvolvedora_distribuidora'] ?>"><?php echo $value['descricao']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <label for="nota">Nota * :</label>
                                <input type="text" id="nota" class="form-control" placeholder="Nota" name="nota" required />
                            </div>

                        </div>  

                        <div class="form-group">    
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label for="imagem">Imagem * :</label>
                                <input type="file" id="imagem" class="form-control" placeholder="imagem" name="imagem" accept="image/*" required />
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