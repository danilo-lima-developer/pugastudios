<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url'); //exclua
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function cadastrar()
	{
		$dados = array(
		'nome'=> $this->input->post('nome'),
		'nickname'=> $this->input->post('nickname'),
		'email'=> $this->input->post('email'),
		'senha'=> md5($this->input->post('senha')),
		'fone'=> $this->input->post('fone')

		);

		$this->login_model->cadastrar_usuario($dados);

		redirect("login");
	}

	public function validar()
	{
		$nickname = $_POST['nickname'];
		// $cpf = str_replace(['-','.'],'',$cpf);
		$senha = md5($_POST['senha']);

		$usuario = $this->login_model->validar($nickname, $senha);
		
		if($usuario){
			$this->session->set_userdata("logged_user", $usuario); 
			$this->session->set_userdata("usuario_nome", $usuario['nome']);
			$this->session->set_userdata("usuario_id", $usuario['id_usuario']);
			$this->session->set_userdata("perfil", $usuario['id_tipo_usuario']);
			$this->session->set_userdata("logado", true);
			if($usuario['id_tipo_usuario'] == 1){ // Administrador
				redirect("admin/home");
			}
			else if($usuario['id_tipo_usuario'] == 2){ // Usuário
				redirect("usuario/home");
			}
			
		}else{
			redirect("login");
		}
	}

	public function sair(){
		$this->session->sess_destroy();
		redirect('login');
	}

	public function redirecionar()
	{
		if($this->session->userdata('perfil') == 1){ // Administrador
			redirect("admin/home");
		}
		else if($this->session->userdata('perfil') == 2){ // Usuário
			redirect("usuario/home");
		}
	}

}
