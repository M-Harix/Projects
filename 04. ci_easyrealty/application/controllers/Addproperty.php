<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addproperty extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(! $this->session->user_data)
		{
			return redirect('signin');
		}
	}
	public function index() 
	{  
		$this->load->view('addproperty');
	}
	public function insertproperty()  
	{ 
		$this->load->model('Property');
		$property['purpose']     = $this->input->post('purpose');
		$property['address']     = $this->input->post('address');
		$property['category']    = $this->input->post('category');
		$property['description'] = $this->input->post('description');
		$property['price']       = $this->input->post('price');
		$property['area']        = $this->input->post('area');
		$property['whatsapp']    = $this->input->post('whatsapp');
		$property['status']		 = "offline";
		$property['userid']		 = $this->session->user_data;
		$id = $this->Property->insert_property($property);
	
		//if(!empty($_FILES['imagename']['name']) && count(array_filter($_FILES['imagename']['name'])) > 0 )

			$ori_filename = $_FILES['imagename']['name'];
			$fileCount = count($ori_filename);
			for($i=0 ; $i<$fileCount; $i++)
			{
				$_FILES['image']['name'] = $_FILES['imagename']['name'][$i];
				$_FILES['image']['type'] = $_FILES['imagename']['type'][$i];
				$_FILES['image']['tmp_name'] = $_FILES['imagename']['tmp_name'][$i];
				$_FILES['image']['error'] = $_FILES['imagename']['error'][$i];
				$_FILES['image']['size'] = $_FILES['imagename']['size'][$i];

				$uploadPath = 'C:/xampp/htdocs/ci_easyrealty/assets/images/databaseimages';

				$config = [
					'upload_path' => 'C:/xampp/htdocs/ci_easyrealty/assets/images/databaseimages',
					'allowed_types' => 'gif|jpg|jpeg|png',
				];

				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ( ! $this->upload->do_upload('image'))
		        {
			            $imageError = array('imageError' => $this->upload->display_errors());
			            $this->load->view('addproperty', $imageError);
			    }
			    else
			    {
			       	$fileData = $this->upload->data();
			       	
		        	$uploadData = [
			        	'propertyid' => $id,
			        	'imagename' => $_FILES['image']['name'],
		        	];
		        	$this->Property->insert_images($uploadData);
			    }
			}
		if($this->session->user_role)
		{
			redirect(base_url()."approval");
		}
		else
		{ 
			redirect(base_url()."Home");
		}        
	}
	//  EXTRA____________________FOLLOWING CODE IS NOT RELATED TO PROJECT LOGIC
//  PURPOSE OF THIS CODE IS TO RUN PROJECT EVEN IF CODEIGNITER 3 IS DEPRECATED..
public $benchmark = null;
public $codeigniter = null;
public $common = null;
public $config = array();
public $controller = null;
public $exceptions = null;
public $hooks = array();
public $input = null;
public $lang = null;
public $loader = null;	
public $log = array();
public $model = null;
public $output = null;
public $router = array();
public $security = array();
public $uri = array();
public $utf8 = array();
public $db = null;
public $load = null;

public function __get($name) {
	
	if ($name === 'benchmark') {
		return $this->benchmark;
	}
	if ($name === 'codeigniter') {
		return $this->codeigniter;
	}
	if ($name === 'common') {
		return $this->common;
	}
	if ($name === 'config') {
		return $this->config;
	}
	if ($name === 'controller') {
		return $this->controller;
	}
	if ($name === 'exceptions') {
		return $this->exceptions;
	}
	if ($name === 'hooks') {
		return $this->hooks;
	}
	if ($name === 'input') {
		return $this->input;
	}
	if ($name === 'lang') {
		return $this->lang;
	}
	if ($name === 'loader') {
		return $this->loader;
	}
	if ($name === 'log') {
		return $this->log;
	}
	if ($name === 'model') {
		return $this->model;
	}
	if ($name === 'output') {
		return $this->output;
	}
	if ($name === 'router') {
		return $this->router;
	}
	if ($name === 'security') {
		return $this->security;
	}
	if ($name === 'uri') {
		return $this->uri;
	}
	if ($name === 'utf8') {
		return $this->utf8;
	}
	if ($name === 'db') {
		return $this->db;
	}
	if ($name === 'load') {
		return $this->load;
	}
	return null;
}

public function __set($name, $value) {
	if ($name === 'benchmark') {
		$this->benchmark = $value;
	}
	if ($name === 'codeigniter') {
		$this->codeigniter = $value;
	}
	if ($name === 'common') {
		$this->common = $value;
	}
	if ($name === 'config') {
		$this->config = $value;
	}
	if ($name === 'controller') {
		$this->controller = $value;
	}
	if ($name === 'exceptions') {
		$this->exceptions = $value;
	}
	if ($name === 'hooks') {
		$this->hooks = $value;
	}
	if ($name === 'input') {
		$this->input = $value;
	}
	if ($name === 'lang') {
		$this->lang = $value;
	}
	if ($name === 'loader') {
		$this->loader = $value;
	}
	if ($name === 'log') {
		$this->log = $value;
	}
	if ($name === 'model') {
		$this->model = $value;
	}
	if ($name === 'output') {
		$this->output = $value;
	}
	if ($name === 'router') {
		$this->router = $value;
	}
	if ($name === 'security') {
		$this->security = $value;
	}
	if ($name === 'uri') {
		$this->uri = $value;
	}
	if ($name === 'utf8') {
		$this->utf8 = $value;
	}
	if ($name === 'db') {
		$this->db = $value;
	}
	if ($name === 'load') {
		$this->load = $value;
	}
}

}
