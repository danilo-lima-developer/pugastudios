<?php

class Login_model extends CI_Model
{
	public function validar($nickname, $senha)
	{
		//$this->db->select('id');
		$this->db->where("nickname", $nickname);
		$this->db->where("senha", $senha);
		$dados = $this->db->get("tb_usuario")->row_array();
		return $dados;
	}

	public function cadastrar_usuario($dados)
	{
		$this->db->set('nome', $dados['nome']);
		$this->db->set('nickname', $dados['nickname']);
		$this->db->set('email', $dados['email']);
		$this->db->set('senha', $dados['senha']);
		$this->db->set('fone', $dados['fone']);
		$this->db->set('id_tipo_usuario', 2);
		$this->db->set('ativo', 1);
		$this->db->insert("tb_usuario");

	}

}
