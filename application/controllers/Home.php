<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
    	parent::__construct();
	}



	public function index()
	{
	
		$data['content'] = 'pagina_iniziale';
		$this->load->view('includes/template', $data);

	}


	public function faiPrenotazione() {

		$data['content'] = 'inizia_prenotazione';
		$this->load->view('includes/template', $data);		
	}

	public function modificaPrenotazione() {

		
	}

	public function cancellaPrenotazione() {

		
	}		


}