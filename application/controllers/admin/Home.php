<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model("admin/home_model");
		$this->load->model("validacao_model"); // Carrega o Model *Importantíssimo para Sessões*
	}

	public function index()
	{
		$contas_ativas = $this->home_model->contar_total_contas();
		$jogos_ativos = $this->home_model->contar_total_jogos();
		$estilos_ativos = $this->home_model->contar_total_estilos();
		$desenvolvedoras_ativas = $this->home_model->contar_total_desenvolvedoras();

		$total_sessions = $this->home_model->contar_total_sessions();
		$total_administradores = $this->home_model->contar_total_administradores();
		$total_usuarios = $this->home_model->contar_total_usuarios();

		$dados = array(
			'total_contas' => $contas_ativas,
			'total_jogos' => $jogos_ativos,
			'total_estilo' => $estilos_ativos,
			'total_desenvolvedoras' => $desenvolvedoras_ativas,
			'total_sessions' => $total_sessions,
			'total_administradores' => $total_administradores,
			'total_usuarios' => $total_usuarios
		);

		$this->load->view('template/header');
		$this->load->view('template/menuAdmin');
		$this->load->view('template/topNavegacao');
		$this->load->view('admin/home', $dados);
		$this->load->view('template/footer');
	}
	
}
