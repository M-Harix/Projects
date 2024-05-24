<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Model {

	public function signup($signup)
	{
		$this->db->insert("users", $signup);
		
	}
} 