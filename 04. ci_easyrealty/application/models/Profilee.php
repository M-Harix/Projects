 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilee extends CI_Model {

	public function profile($id)
	{ 
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('userid',$id);
		$data = $this->db->get();
		return $data->result();
	}
	public function update($update)
	{ 
		$this->db->where('userid', $this->session->user_data);
		$this->db->update('users', $update);
/*
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('userid',$id);
		$data = $this->db->get();
		return $data->result();
*/	}
}  