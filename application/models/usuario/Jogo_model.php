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

	public function editar_jogo($id_jogo, $dados)
	{
			$this->db->where("id_jogo", $id_jogo);
			$this->db->set('titulo', $dados['titulo']);
			$this->db->set('ano_publicacao', $dados['ano_publicacao']);
			$this->db->set('id_estilo', $dados['id_estilo']);
			$this->db->set('id_desenvolvedora_distribuidora', $dados['id_desenvolvedora_distribuidora']);
			$this->db->set('nota', $dados['nota']);
			$this->db->set('id_usuario', $this->session->userdata('usuario_id'));
			return $this->db->update("tb_jogos", $dados);
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

	public function destroy($id_jogo)
	{
			$this->db->where('id_jogo', $id_jogo);
			$this->db->where("id_usuario", $this->session->userdata('usuario_id'));
			$this->db->delete('tb_jogos');
	}

	public function show($id_jogo)
	{
			$this->db->select("tb_jogos.id_jogo, 
			tb_jogos.titulo, 
			tb_jogos.ano_publicacao, 
			tb_jogos.id_estilo, 
			tb_jogos.id_desenvolvedora_distribuidora, 
			tb_jogos.nota");
			$this->db->where('id_usuario', $this->session->userdata('usuario_id'));
			return $this->db->get_where("tb_jogos", array(
					"id_jogo" => $id_jogo
			))->row_array();
	}


}
