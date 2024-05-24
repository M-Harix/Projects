<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function index()
	{
		$this->load->view('signin');
	}
	public function signin()   
	{
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('email','Email','required');
		//$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run())
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->load->model('Login');
			$query = $this->Login->can_login($email, $password);
			foreach ($query->result() as $row)  
			//Iterate through results
		    {
		       $id   = $row->userid;
		       $role = $row->role;
		    }
			if($query->num_rows() > 0)
			{
				/*$session_data = array(
					'email' => $email
				);
				$this->session->set_userdata($session_data);
				*/
				$this->session->user_data = $id;
				
				if($role === 'admin')
				{
					$this->session->user_role = $role;
					redirect(base_url()."approval");	
				}
				/*else if($role === 'user')
				{
					redirect(base_url()."Home");
				}*/
				else
				{
					redirect(base_url()."Home");
				}
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Email and Password');
				redirect(base_url()."Signin");
			}
		}
		else
		{
			redirect(base_url() . "Signin");
		}
	}
	function enter()
	{
		if($this->session->user_data != '')
		{
			echo "<h2>Welcome ".$this->session->user_data."</h2>";
			echo "<a href = '".base_url()."signin/logout'>logout</a>";
		}
		else
		{
			redirect(base_url()."Signin");
		}
	}
	function logout()
	{
		$this->session->unset_userdata('user_data');
		$this->session->unset_userdata('user_role');
		redirect(base_url()."Home");
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
