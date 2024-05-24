 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memberss extends CI_Model {

	public function memberss()
	{ 
		$this->db->select('*');
		$this->db->from('users');
		//$this->db->where('purpose',"forsale");
		$mem= $this->db->get();
		return $mem->result();
	}
} 