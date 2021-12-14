<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jogo extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model("admin/jogo_model");
		$this->load->model("validacao_model"); // Carrega o Model *Importantíssimo para Sessões*
	}

	public function pagina_cadastro_jogo()
	{
		$dados['estilos'] = $this->jogo_model->buscarEstilos();
		$dados['desenvolvedoras'] = $this->jogo_model->buscarDesenvolvedoras();

		$this->load->view('template/header');
		$this->load->view('template/menuAdmin');
		$this->load->view('template/topNavegacao');
		$this->load->view('admin/cadastrarJogo', $dados);
		$this->load->view('template/footer');
	}

	public function cadastrar_jogo()
	{
		$dados = array(
		'titulo'=> $this->input->post('titulo'),
		'ano_publicacao'=> $this->input->post('ano_publicacao'),
		'id_estilo'=> $this->input->post('id_estilo'),
		'id_desenvolvedora_distribuidora'=> $this->input->post('id_desenvolvedora_distribuidora'),
		'nota'=> $this->input->post('nota')

		);

		$this->jogo_model->cadastrar_jogo($dados);
		
		redirect('admin/home');
	}
	
}
