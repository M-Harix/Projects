<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RenttPlot extends CI_Model {

	public function rent()
	{
		$this->db->select('*');
		$this->db->from('properties');
		$this->db->where('purpose',"rent");
		$this->db->where('category',"plot");
		$this->db->join('images','properties.propertyid=images.propertyid');
		$rent = $this->db->get();
		return $rent->result();
	}
}