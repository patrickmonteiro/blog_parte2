<?php

class Artigos_model extends CI_Model{

	public function listar(){
		$this->load->database(); //carrego a library de banco de dados

		return $this->db->get('tb_artigos')->result_array(); //retorna os nossos
	}


}