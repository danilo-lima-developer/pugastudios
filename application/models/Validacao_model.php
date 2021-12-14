<?php

class Validacao_model extends CI_Model
{
    public function sessao()
	{
		if($this->session->userdata('logado') !== true)
		{
			redirect(site_url('login'));
		}
	}
	
}