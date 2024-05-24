<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends CI_Model {

	public function insert_property($property)
	{
		$this->db->insert("properties", $property);

		$this->db->select_max('propertyid');  
		$id = $this->db->get('properties')->row_array()['propertyid'];
		return $id;
	}
	public function insert_images($uploadData) 
	{
		$this->db->insert("images", $uploadData);
	}
}  