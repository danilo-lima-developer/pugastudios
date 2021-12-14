<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model("admin/admin_model");
		$this->load->model("validacao_model"); // Carrega o Model *Importantíssimo para Sessões*
	}

	public function pagina_cadastro_usuario()
	{
		//$dados["usuarios"] = $this->admin_model->listar_usuarios();

		$this->load->view('template/header');
		$this->load->view('template/menuAdmin');
		$this->load->view('template/topNavegacao');
		//$this->load->view('admin/listarUsuario', $dados);
		$this->load->view('admin/cadastrarUsuario');
		$this->load->view('template/footer');
	}
	
	public function cadastrar_usuario()
	{
		$dados = array(
		'nome'=> $this->input->post('nome'),
		'nickname'=> $this->input->post('nickname'),
		'email'=> $this->input->post('email'),
		'senha'=> md5($this->input->post('senha')),
		'fone'=> $this->input->post('fone'),
		'id_tipo_usuario'=> $this->input->post('id_tipo_usuario')
		);

		$dados["user_id"] = $_SESSION["logged_user"]["id_usuario"];
		$this->admin_model->cadastrar_usuario($dados);

		$this->admin_model->enviar_email($dados);
		
		redirect('admin/home');
	}

	public function pagina_cadastro_estilo()
	{
		$this->load->view('template/header');
		$this->load->view('template/menuAdmin');
		$this->load->view('template/topNavegacao');
		$this->load->view('admin/cadastrarEstilo');
		$this->load->view('template/footer');
	}

	public function cadastrar_estilo()
	{
		$dados = array(
		'descricao'=> $this->input->post('descricao')
		);

		$this->admin_model->cadastrar_estilo($dados);
		
		redirect('admin/home');
	}

	public function pagina_cadastro_desenvolvedora_distribuidora()
	{
		$this->load->view('template/header');
		$this->load->view('template/menuAdmin');
		$this->load->view('template/topNavegacao');
		$this->load->view('admin/cadastrarDesenvolvedoraDistribuidora');
		$this->load->view('template/footer');
	}
	
	public function cadastrar_desenvolvedora_distribuidora()
	{
		$dados = array(
		'descricao'=> $this->input->post('descricao')
		);

		$this->admin_model->cadastrar_desenvolvedora_distribuidora($dados);
		
		redirect('admin/home');
	}
	
}
