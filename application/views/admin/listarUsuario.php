<?php
echo $this->validacao_model->sessao();

if($this->session->userdata('perfil') != 1){
    redirect('login/redirecionar');
}
?>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Usuários</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Nickname</th>
                                <th>Fone</th>
                                <th>Perfil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($usuarios as $usuario) : ?>
                                <tr>
                                    <th scope="row"><?= $usuario["id_usuario"] ?></th>
                                    <td><?= $usuario["nome"] ?></td>
                                    <td><?= $usuario["nickname"] ?></td>
                                    <td><?= $usuario["fone"] ?></td>
                                    <td><?= $usuario["id_tipo_usuario"] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>