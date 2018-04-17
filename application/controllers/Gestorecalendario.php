<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestorecalendario extends CI_Controller {

	function __construct()
	{
    	parent::__construct();
	}

	public function display() {

		echo $this->calendar->generate();
	}





}
