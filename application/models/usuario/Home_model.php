<?php

class Home_model extends CI_model
{

	public function contar_total_contas($id = null)
	{
		$query = $this->db->query("SELECT count(id_usuario) as num FROM tb_usuario", array($id));

		$row = $query->row();
	
		return $row->num;
	}

	public function contar_total_jogos($id=null)
	{
		$id_usuario = $this->session->userdata('usuario_id');
		$query = $this->db->query("SELECT count(id_jogo) as num FROM tb_jogos WHERE id_usuario = $id_usuario", array($id));

		$row = $query->row();

		return $row->num;
	}

	public function contar_total_estilos($id=null)
	{
		$query = $this->db->query("SELECT count(id_estilo) as num FROM tb_estilo", array($id));

		$row = $query->row();

		return $row->num;
	}
	
	public function contar_total_desenvolvedoras($id=null)
	{
		$query = $this->db->query("SELECT count(id_desenvolvedora_distribuidora) as num FROM tb_desenvolvedora_distribuidora", array($id));

		$row = $query->row();

		return $row->num;
	}

	public function contar_total_sessions($id=null)
	{
		$query = $this->db->query("SELECT count(id) as num FROM ci_sessions", array($id));

		$row = $query->row();

		return $row->num;
	}

	public function contar_total_administradores($id=null)
	{
		$query = $this->db->query("SELECT count(id_usuario) as num FROM tb_usuario WHERE id_tipo_usuario = 1", array($id));

		$row = $query->row();

		return $row->num;
	}

	public function contar_total_usuarios($id=null)
	{
		$query = $this->db->query("SELECT count(id_usuario) as num FROM tb_usuario WHERE id_tipo_usuario = 2", array($id));

		$row = $query->row();

		return $row->num;
	}

	public function listar_jogos()
	{
		
		$this->db->select('tb_jogos.id_jogo as id_jogo,
			tb_jogos.titulo as titulo,
			tb_jogos.ano_publicacao as ano_publicacao,
			tb_jogos.nota as nota
		');
		$this->db->from('tb_jogos');
		$this->db->where('id_usuario', $this->session->userdata('usuario_id'));
		return $this->db->get()->result_array();
	}

}
