<?php

class Admin_model extends CI_model
{

	public function cadastrar_usuario($user)
	{
		$this->db->set('nome', $user['nome']);
		$this->db->set('nickname', $user['nickname']);
		$this->db->set('email', $user['email']);
		$this->db->set('senha', $user['senha']);
		$this->db->set('fone', $user['fone']);
		$this->db->set('id_tipo_usuario', $user['id_tipo_usuario']);
		$this->db->set('id_criador', $user['user_id']);
		$this->db->set('ativo', 1);
		$this->db->insert("tb_usuario");
	}

	public function enviar_email($dados)
	{
		$this->load->library('email');
		$this->email->clear();

		$this->email->from('sace.desenvolvimento@gmail.com', 'Puga Studios');
		$this->email->to($dados['email'], $dados['nome']);
		$this->email->subject('Dados de acesso aos Puga Studios');

		$mensagem = "Use os dados abaixo para acessar o sistema <br>";	
		$mensagem .= "Login: ".$dados['nickname']."<br>";
		$mensagem .= "Link: <a href='http://localhost/pugastudios'>http://localhost/pugastudios</a> <br><br><br>";
		$mensagem .= "Este é um e-mail automatico, não deve ser respondido. <br>";
		$mensagem .= "<H4>© Copyright Puga Studios Avaliação - www.pugastudios.com/</H4> <br>";

		$this->email->message($mensagem, TRUE);

		$this->email->send();
	}

	public function cadastrar_estilo($dados)
	{
		$this->db->set('descricao', $dados['descricao']);

		$this->db->insert("tb_estilo");
	}

	public function cadastrar_desenvolvedora_distribuidora($dados)
	{
		$this->db->set('descricao', $dados['descricao']);

		$this->db->insert("tb_desenvolvedora_distribuidora");
	}

	public function listar_usuarios()
	{
		$this->db->select('tb_usuario.id_usuario as id_usuario, 
			tb_usuario.nome as nome,
			tb_usuario.nickname as nickname,
			tb_usuario.email as email,
			tb_usuario.fone as fone,
			tb_usuario.id_tipo_usuario as id_tipo_usuario');
			
		$this->db->from('tb_usuario');
		$this->db->order_by("tb_usuario.id_usuario", "DESC");
		return $this->db->get()->result_array();
	}


}
