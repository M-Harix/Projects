<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adds extends CI_Model {

	public function ads($id)
	{ 
		$this->db->select('*');
		$this->db->from('properties');
		$this->db->where('userid',$id);
		$this->db->join('images','properties.propertyid=images.propertyid');
		$buy = $this->db->get();
		return $buy->result();
	} 
}   