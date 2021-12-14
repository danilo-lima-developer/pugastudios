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
		$query = $this->db->query("SELECT count(id_jogo) as num FROM tb_jogos", array($id));

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


}
