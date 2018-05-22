<?php

class Prenotazioni_model extends CI_Model
{
	public function vedi_prenotazioni_in_range($inizio, $fine)
	{
	    return $this->db->where("inizio >=", $inizio)->where("fine <=", $fine)->get("prenotazioni");
	}

	public function aggiungi_prenotazione($data)
	{
	    $this->db->insert("prenotazioni", $data);
	}

	public function vedi_prenotazione($id)
	{
	    return $this->db->where("ID", $id)->get("prenotazioni");
	}

	public function aggiorna_prenotazione($id, $data)
	{
	    $this->db->where("ID", $id)->update("prenotazioni", $data);
	}

	public function cancella_prenotazione($id)
	{
	    $this->db->where("ID", $id)->delete("prenotazioni");
	}

}