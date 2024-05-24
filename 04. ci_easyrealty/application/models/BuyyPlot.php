 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyyPlot extends CI_Model {

	public function buy()
	{ 
		$this->db->select('*');
		$this->db->from('properties');
		$this->db->where('purpose',"forsale");
		$this->db->where('category',"plot");
		$this->db->join('images','properties.propertyid=images.propertyid');
		$rent = $this->db->get();
		return $rent->result();
	}
} 