<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyy extends CI_Model {

	public function buy()
	{ 
		$this->db->select('*');
		$this->db->from('properties');
		$this->db->where('purpose',"forsale");
		$this->db->join('images','properties.propertyid=images.propertyid');
		$buy = $this->db->get();
		return $buy->result();
	} 
}   