<?php
echo $this->validacao_model->sessao();

if($this->session->userdata('perfil') != 1){
    redirect('login/redirecionar');
}
?>
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile-stats">
        <div class="tile_count ">
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Usuários</span>
                <div class="count"><?php echo $total_contas ?></div>
                <span class="count_bottom"><i class="green">4% </i> DSP</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Ativos</span>
                <div class="count green"><?php echo $total_contas ?></div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>4% </i> DSP</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-gamepad"></i> Total Jogos</span>
                <div class="count"><?php echo $total_jogos ?></div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> DSP</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-bars"></i> Total Estilo</span>
                <div class="count"><?php echo $total_estilo ?></div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> DSP</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-code"></i> Total Desenvolvedoras/</br>Distribuidoras</span>
                <div class="count"><?php echo $total_desenvolvedoras ?></div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>12% </i> DSP</span>
            </div>

        </div>
    </div>

    <!-- /top tiles -->

    <div class="row">

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

    </div>

</div>
<!-- /page content -->