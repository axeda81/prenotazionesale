<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestoreprenotazioni extends CI_Controller {

	function __construct()
	{
    	parent::__construct();
	}

	function prenota ($id_sala = NULL) {
	
		// Visualizzazione dei dati relativi a una sala
    	if($id_sala == null)
    	{
			// Se l'id non è stato passato correttamente ricarico tutta la view con l'elenco delle sale
			$data['sale'] = $this->Sale_model->elenco_sale();
			$data['content'] = 'inizia_prenotazione';
			$this->load->view('includes/template', $data);	
     	}

		$data['dati_sala'] = $this->Sale_model->dati_sala($id_sala);
		$data['servizi'] = $this->Serviziaccessori_model->elenco_servizi($id_sala);
		$data['content'] = 'prenota_sala';
		$this->load->view('includes/template', $data);
	}




}