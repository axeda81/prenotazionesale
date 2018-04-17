<?php

class Serviziaccessori_model extends CI_Model {

	// Torna le informazioni del servizio ID_servizio
	function descrizione_servizio($ID_servizio)
	{
		$this->db->select('*');
		$this->db->from('serviziaccessori');
		$this->db->where('ID', $ID_servizio);	
		$q = $this->db->get();

		if($q->num_rows() > 0){
			return $q->result();
		}
	}

	// Torna l'elenco dei servizi disponibili per una data sala 
	function elenco_servizi($ID_sala){

		$this->db->select('*');
		$this->db->from('serviziaccessori');
		$this->db->where('ID_sala', $ID_sala);	
		$q = $this->db->get();

		if($q->num_rows() > 0){
			return $q->result();
		}

	}
	
}