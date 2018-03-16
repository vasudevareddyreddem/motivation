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
	public function signup()
	{
			if(!$this->session->userdata('userdetails'))
			{ 
			$header['currentURL'] = current_url();
			$this->load->view('html/header',$header);
				$this->load->view('html/signup');
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
	public function singuppostpost()
	{
			$post=$this->input->post();
			$email_check=$this->Motivation_model->email_uniuque($post['email']);
			$mobile_check=$this->Motivation_model->mobile_uniuque($post['mobile']);
			if(count($email_check)==0 && count($mobile_check)==0){
				$signup=array(
				'email'=>$post['email'],
				'mobile'=>$post['mobile'],
				'password'=>md5($post['confirmpassword']),
				'name'=>$post['name'],
				'status'=>1,
				'create_at'=>date('Y-m-d H:i:s')
				);
				$register=$this->Motivation_model->save_user($signup);
				if(count($register)>0){
					$details=$this->Motivation_model->get_user_details($register);
					$this->session->set_userdata('userdetails',$details);
					redirect('motivation/lists');
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('admin/signup');
				}
				
			}else{
				if(count($email_check)>0 && count($mobile_check)>0){
					$this->session->set_flashdata('error',"Email address and Mobile Number already exits. please use another Email address and Mobile Number");	
				}else if(count($email_check)>0){
					$this->session->set_flashdata('error',"Email address already exits. please use another Email address");	
				}else if(count($mobile_check)>0){
				$this->session->set_flashdata('error',"Mobile Number already exits. please use another Mobile Number");	
				}
				
				redirect('admin/signup');
			}

			echo '<pre>';print_r($post);exit;
				
	}
	
	
}
