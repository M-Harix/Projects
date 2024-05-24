<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactdata extends CI_Model {

	public function contact($contact)
	{
		$this->db->insert("contact", $contact);
		
	}
}  