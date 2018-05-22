<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestoreprenotazioni extends CI_Controller {

	function __construct()
	{
    	parent::__construct();
	}

	function inizia_prenotazione ($id_sala = NULL) {
	
		// Visualizzazione dei dati relativi a una sala
    	if($id_sala == null)
    	{
							// Se l'id non è stato passato correttamente ricarico tutta la view con l'elenco delle sale
							$data['sale'] = $this->Sale_model->elenco_sale();
							$data['content'] = 'elenco_sale';
							$this->load->view('includes/template', $data);	
     	}

		$data['dati_sala'] = $this->Sale_model->dati_sala($id_sala);
		$data['servizi'] = $this->Serviziaccessori_model->elenco_servizi($id_sala);

		// Qui vanno aggiunti i dati del calendario per quella sala (da recuperare dal DB), da passare  
		// alla view così inserisce un oggetto calendar nella pagina e lo riempie con questi dati 

		$data['content'] = 'prenota_sala';
		$this->load->view('includes/template', $data);
	}

 public function get_events()
 {
     // inizio e fine range di ricerca eventi
     $inizio = $this->input->get("inizio");
     $fine = $this->input->get("fine");

     $iniziodt = new DateTime('now'); // setup a local datetime
     $iniziodt->setTimestamp($inizio); // Set the date based on timestamp
     $inizio_format = $iniziodt->format('Y-m-d H:i:s');

     $finedt = new DateTime('now'); // setup a local datetime
     $finedt->setTimestamp($fine); // Set the date based on timestamp
     $fine_format = $finedt->format('Y-m-d H:i:s');

     $events = $this->prenotazioni_model->vedi_prenotazioni_in_range($inizio_format, $fine_format);

     $data_events = array();

     foreach($events->result() as $r) {

         $data_events[] = array(
             "id" => $r->ID,
             "id_sala" => $r->ID_sala,
             "inizio" => $r->inizio,
             "fine" => $r->fine,             
             "nome" => $r->nome,
             "cognome" => $r->cognome,
             "contatto" => $r->contatto,
             "descrizioneevento" => $r->descrizioneevento

         );
     }

     echo json_encode(array("events" => $data_events));
     exit();
 }




}