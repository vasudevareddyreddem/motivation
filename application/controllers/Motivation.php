<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Motivation extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
		$this->load->library('zend');
		$this->load->model('Dashboard_model');
		
	}
	public function index()
	{
			$this->load->view('html/header');
			$this->load->view('html/index');
			$this->load->view('html/footer');
	}
	public function admin()
	{
			$this->load->view('html/header');
			$this->load->view('html/admin');
			$this->load->view('html/footer');
	}
	
	
	
	
	
	
}
