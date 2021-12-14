<?php
echo $this->validacao_model->sessao();

if($this->session->userdata('perfil') != 2){
    redirect('login/redirecionar');
}
?>
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile-stats">
        <div class="tile_count ">
            <!-- <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Usuários</span>
                <div class="count"><?php echo $total_contas ?></div>
                <span class="count_bottom"><i class="green">4% </i> DSP</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Ativos</span>
                <div class="count green"><?php echo $total_contas ?></div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>4% </i> DSP</span>
            </div> -->
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-gamepad"></i> Total Jogos</span>
                <div class="count"><?php echo $total_jogos ?></div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> DSP</span>
            </div>
            <!-- <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-bars"></i> Total Estilo</span>
                <div class="count"><?php echo $total_estilo ?></div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> DSP</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-code"></i> Total Desenvolvedoras/</br>Distribuidoras</span>
                <div class="count"><?php echo $total_desenvolvedoras ?></div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>12% </i> DSP</span>
            </div> -->

        </div>
    </div>

    <!-- /top tiles -->

    <!-- <div class="row">

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-file"></i>
                </div>
                <div class="count"><?php echo $total_sessions ?></div>

                <h3>Sessions</h3>
                <p>Sessions ativas no sistema.</p>
            </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-linux"></i>
                </div>
                <div class="count"><?php echo $total_administradores ?></div>

                <h3>Administradores</h3>
                <p>Administradores ativos no sistema.</p>
            </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i>
                </div>
                <div class="count"><?php echo $total_usuarios ?></div>

                <h3>Usuários</h3>
                <p>Usuários ativos no sistema.</p>
            </div>
        </div>

    </div> -->

        <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3> Meus Jogos <small> </small> </h3>
            </div>

            <div class="title_right">
            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Título jogo...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Buscar</button>
                </span>
                </div>
            </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                <h2>Listagem </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                </ul>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">

                <div class="row">
                    <?php foreach($jogos as $jogo) : ?>
                        <div class="col-md-55">
                        <div class="thumbnail">
                            <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="<?= BASE_URL()?>assets/imagens/media.jpg" alt="image" />
                            <div class="mask no-caption">
                                <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:goDelete(<?= $jogo['id_jogo'] ?>)"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            </div>
                            <div class="caption">
                            <p><strong><?= $jogo["titulo"]?></strong>
                            </p>
                            <p><strong>Nota: </strong><?= $jogo["nota"]?></p>
                            </div>
                        </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

</div>
<!-- /page content -->
<script>
	function goDelete(id) {
		if (confirm("Deseja apagar este Jogo?")) {
			window.location.href = 'jogo/destroy/' + id;
			redirect("usuario/home");
		}
	}
</script>