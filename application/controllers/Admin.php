<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

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
		$this->load->model('Motivation_model');
		
	}
	public function index()
	{
			if(!$this->session->userdata('userdetails'))
			{ 
			$header['currentURL'] = current_url();
			$this->load->view('html/header',$header);
				$this->load->view('html/login');
				$this->load->view('html/footer');
				
			}else{
				redirect('motivation/admin');
			}
	}
	public function loginpost()
	{
			$post=$this->input->post();
			$check_login=$this->Motivation_model->check_login_details($post['email'],md5($post['password']));
				if(count($check_login)>0){
					$this->session->set_userdata('userdetails',$check_login);
					redirect('motivation/lists');
				}else{
					$this->session->set_flashdata('error',"Login Details are wrong. Plase try again");
					redirect('admin');
				}	
	}
	
	
}
