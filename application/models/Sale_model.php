<?php

class Sale_model extends CI_Model {

	function elenco_sale() {

		// Ritorna l'intero contenuto della tabella 'sale'

		$this->db->select('*');
		$this->db->from('sale');
		$q = $this->db->get();

		if($q->num_rows() > 0){
			return $q->result();
		}

	}

	function dati_sala ($id_sala) {

		// Ritorna i dati relativi alla sala con ID passato come parametro

		$this->db->select('*');
		$this->db->from('sale');
		$this->db->where('ID', $id_sala);	
		$q = $this->db->get();

		if($q->num_rows() > 0){
			return $q->result();
		}
	}

}