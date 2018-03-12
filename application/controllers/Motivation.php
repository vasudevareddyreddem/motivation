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
		$this->load->model('Motivation_model');
		$loginuser_id=$this->session->userdata('userdetails');
		
	}
	public function index()
	{
			$this->load->view('html/header');
			$loginuser_id=$this->session->userdata('userdetails');
			$data['post_images']=$this->Motivation_model->get_all_post_lists($loginuser_id['id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('html/index',$data);
			$this->load->view('html/footer',$data);
	}
	public function admin()
	{
			$this->load->view('html/header');
			$loginuser_id=$this->session->userdata('userdetails');
			$data['image_list']=$this->Motivation_model->get_all_images_list($loginuser_id['id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('html/admin',$data);
			$this->load->view('html/footer');
	}
	public function addimage()
	{
		$post=$this->input->post();
		$loginuser_id=$this->session->userdata('userdetails');
		if(isset($_FILES['images1']['name']) && $_FILES['images1']['name']!=''){
					$pic=$_FILES['images1']['name'];
					$picname = str_replace(" ", "", $pic);
					$imagename=microtime().basename($picname);
					$imgname = str_replace(" ", "", $imagename);
					if(move_uploaded_file($_FILES['images1']['tmp_name'], "assets/temp/" . $imgname)){
					$filedata=array(
						'user_id'=>$loginuser_id['id'],
						'name'=>$imgname,
						'org_name'=>$_FILES['images1']['name'],
						'create_at'=>date('Y-m-d H:i:s')				
						);
						$addfile = $this->Motivation_model->save_userfile($filedata);
					if(count($addfile)>0){
						$this->session->set_flashdata('success',"File successfully Select");
						redirect('motivation/admin'); 
					}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('motivation/admin'); 	
						}
					}
		}if(isset($_FILES['images2']['name']) && $_FILES['images2']['name']!=''){
					$pic=$_FILES['images2']['name'];
					$picname = str_replace(" ", "", $pic);
					$imagename=microtime().basename($picname);
					$imgname = str_replace(" ", "", $imagename);
					if(move_uploaded_file($_FILES['images2']['tmp_name'], "assets/temp/" . $imgname)){
					$filedata=array(
						'user_id'=>$loginuser_id['id'],
						'name'=>$imgname,
						'org_name'=>$_FILES['images2']['name'],
						'create_at'=>date('Y-m-d H:i:s')				
						);
						$addfile = $this->Motivation_model->save_userfile($filedata);
					if(count($addfile)>0){
						$this->session->set_flashdata('success',"File successfully Select");
						redirect('motivation/admin'); 
					}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('motivation/admin'); 	
						}
					}
		}if(isset($_FILES['images3']['name']) && $_FILES['images3']['name']!=''){
					$pic=$_FILES['images3']['name'];
					$picname = str_replace(" ", "", $pic);
					$imagename=microtime().basename($picname);
					$imgname = str_replace(" ", "", $imagename);
					if(move_uploaded_file($_FILES['images3']['tmp_name'], "assets/temp/" . $imgname)){
					$filedata=array(
						'user_id'=>$loginuser_id['id'],
						'name'=>$imgname,
						'org_name'=>$_FILES['images3']['name'],
						'create_at'=>date('Y-m-d H:i:s')				
						);
						$addfile = $this->Motivation_model->save_userfile($filedata);
					if(count($addfile)>0){
						$this->session->set_flashdata('success',"File successfully Select");
						redirect('motivation/admin'); 
					}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('motivation/admin'); 	
						}
					}
		}
	}
	
	
	public function attchements(){
		$images=$this->input->post();
		$details=$this->Motivation_model->get_images_details_list($images['attachmentid']);
		$removedattch = $this->Motivation_model->delete_attachement($images['attachmentid']);
		unlink("assets/temp/".$details['name']);
		if(count($removedattch) > 0)
				{
				$data['msg']=1;
				echo json_encode($data);	
				}
		
	}
	public function imagepost(){
		$post=$this->input->post();
		$loginuser_id=$this->session->userdata('userdetails');
		$image_list=$this->Motivation_model->get_all_images_list(1);
		$data=array(
		'user_id'=>$loginuser_id['id'],
		'text'=>$post['content'],
		'image_count'=>count($image_list),
		'create_at'=>date('Y-m-d H:i:s')
		);
		$post_count=$this->Motivation_model->save_image_count($data);
		foreach($image_list as $list){
			rename("assets/temp/".$list['name'], "assets/files/".$list['name']);
			$filedata=array(
						'user_id'=>$loginuser_id['id'],
						'post_id'=>$post_count,
						'name'=>$list['name'],
						'org_name'=>$list['org_name'],
						'create_at'=>date('Y-m-d H:i:s'),				
						'status'=>1				
						 );
		$addfile = $this->Motivation_model->save_filepost($filedata);
		}
		if(count($addfile)>0){
			foreach($image_list as $list){
				$this->Motivation_model->delete_attachement($list['id']);
			}
			$this->session->set_flashdata('success',"File successfully Select");
			redirect('motivation/lists'); 
		}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('motivation/admin'); 	
		}
		
	}
	public function lists()
	{
			$loginuser_id=$this->session->userdata('userdetails');
			$data['image_list']=$this->Motivation_model->get_all_post_list($loginuser_id['id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('html/list',$data);
			//$this->load->view('html/footer');
	}
	public function status(){
		$pid=base64_decode($this->uri->segment(3));
		$status=base64_decode($this->uri->segment(4));
		if($status==1){
			$sat=0;
		}else{
			$sat=1;	
		}
		$details=array(
		'pstatus'=>$sat
		);
		$update=$this->Motivation_model->update_post_staus($pid,$details);
		if(count($update)>0){
			if($status==1){
				$this->session->set_flashdata('success',"Post successfully Deactivate");
			}else{
				$this->session->set_flashdata('success',"Post successfully activate");
			}
				redirect('motivation/lists'); 
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('motivation/lists'); 
		}
		
	}
	public function deletes(){
		$pid=base64_decode($this->uri->segment(3));
		$Delete=$this->Motivation_model->update_post_details($pid);
		foreach ($Delete as $lis){
			$this->Motivation_model->delete_post_images($lis['img_id']);
			unlink("assets/files/".$lis['name']);
		}
		$this->Motivation_model->delete_post($pid);
		if(count($Delete)>0){
			$this->session->set_flashdata('success',"Post successfully Deleted");
				redirect('motivation/lists'); 
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('motivation/lists'); 
		}
		
	}
	
	
	public function logout()
	{
		$userinfo = $this->session->userdata('userdetails');
        $this->session->unset_userdata($userinfo);
		$this->session->sess_destroy('userdetails');
		$this->session->unset_userdata('userdetails');
		$this->session->set_flashdata('loginerror','Please login to continue');
        redirect('');
		  
	}
	
	
	
	
}
