<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approvee extends CI_Model {

	public function accept($id)
	{
		$this->db->set("status","online");
    	$this->db->where("propertyid", $id);
    	$this->db->update("properties");
	}
	public function reject($id)
	{
    	$this->db->where("propertyid", $id);
    	$this->db->delete("properties");
	}
}