 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approvall extends CI_Model {

	public function approvall()
	{ 
		$this->db->select('*');
		$this->db->from('properties');
		$this->db->where('status',"offline");
		$this->db->join('images','properties.propertyid=images.propertyid');
		$approve = $this->db->get();
		return $approve->result();
	}
} 