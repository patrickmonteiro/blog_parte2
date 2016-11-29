<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artigos extends CI_Controller {

	public function index(){
		$this->load->model("Artigos_model");
		$artigos = $this->Artigos_model->listar();

		$dados = array("artigos" => $artigos);

		$this->load->view('artigos', $dados);
	}
}
