 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fulldescription extends CI_Model {

	public function description($fdid)
	{
		$this->db->select('*');
		$this->db->from('properties');
		$this->db->where('propertyid',"$fdid");
		$description = $this->db->get();
		return $description->result();
	}
	public function images($fdid)
	{
		$this->db->select('*');
		$this->db->from('images');
		$this->db->where('propertyid',"$fdid");
		$images = $this->db->get();
		return $images->result();
	}
} 