<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->ion_auth->logged_in()){
			$this->session->get_flashdata('info', 'Sua sessão expirou!');
		redirect ('login');
		}
	}
	
}

public function index()
{
	$data = array{
		'titulo' => 'Produtos cadastrados',
		
	},
	'produtos' => $this->core_model->get_all('produtos'),
};
  $this->load->view('layout/header', $data);
  $this->load->view('produtos/index');
  $this->load->view('layout/footer');

}
}