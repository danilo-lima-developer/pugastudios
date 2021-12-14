<?php

class Jogo_model extends CI_model
{

	public function cadastrar_jogo($dados)
	{
		$this->db->set('titulo', $dados['titulo']);
		$this->db->set('ano_publicacao', $dados['ano_publicacao']);
		$this->db->set('id_estilo', $dados['id_estilo']);
		$this->db->set('id_desenvolvedora_distribuidora', $dados['id_desenvolvedora_distribuidora']);
		$this->db->set('nota', $dados['nota']);
		$this->db->set('id_usuario', $this->session->userdata('usuario_id'));

		$this->db->insert("tb_jogos");
	}

    public function buscarEstilos()
	{
		$this->db->select('*');
		$this->db->from('tb_estilo');
		return $this->db->get()->result_array();
	}

	public function buscarDesenvolvedoras()
	{
		$this->db->select('*');
		$this->db->from('tb_desenvolvedora_distribuidora');
		return $this->db->get()->result_array();
	}

}
