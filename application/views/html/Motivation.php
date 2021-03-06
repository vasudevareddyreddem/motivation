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
		$this->load->library('facebook');
		
	}
	public function index()
	{
	
			$header['currentURL'] = current_url();
			$data['currentURL'] = current_url();
			$this->load->view('html/header',$header);
			$loginuser_id=$this->session->userdata('userdetails');
			$data['user_details']=$this->Motivation_model->get_customer_details($loginuser_id['id']);
			$data['image_list']=$this->Motivation_model->get_all_images_list($loginuser_id['id']);
			$data['post_images']=$this->Motivation_model->get_all_post_lists();
			//echo $this->db->last_query();exit;
			//\\echo '<pre>';print_r($data);exit;
			$this->load->view('html/index',$data);
			$this->load->view('html/footer',$data);
	}
	public function test()
	{
			$header['currentURL'] = current_url();
			$this->load->view('share');
	}
	public function web_login()
	{
		$data['user'] = array();

		// Check if user is logged in
		if ($this->facebook->is_authenticated())
		{
			// User logged in, get user details
			$user = $this->facebook->request('get', '/me?fields=id,name,email');
			//echo '<pre>';print_r($user);
			if (!isset($user['error']))
			{
				$data['user'] = $user;
			}

		}

		$this->load->view('examples/web', $data);
	

		// display view
	}
	
	public function aboutus()
	{
			$header['currentURL'] = current_url();
			$this->load->view('html/header',$header);
			$loginuser_id=$this->session->userdata('userdetails');
			$this->load->view('html/aboutus');
			$this->load->view('html/footer');
	}
	public function contactus()
	{
			$header['currentURL'] = current_url();
			$this->load->view('html/header',$header);
			$loginuser_id=$this->session->userdata('userdetails');
			$this->load->view('html/contactus');
			$this->load->view('html/footer');
	}
	public function singlepost()
	{
			$data['currentURL'] = current_url();
			$header['currentURL'] = current_url();
			$this->load->view('html/header',$header);
			$loginuser_id=$this->session->userdata('userdetails');
			$post_id=base64_decode($this->uri->segment(3));
			$data['post_images']=$this->Motivation_model->get_all_post_detail_list($post_id);
			$footerdata['post_images']=$this->Motivation_model->get_all_post_lists($loginuser_id['id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('html/single',$data);
			$this->load->view('html/footer',$footerdata);
	}
	public function shareimage()
	{
			$post_id=base64_decode($this->uri->segment(3));
			if($post_id !=''){
				$data['rurl']=base_url('motivation/singlepost/'.base64_encode($post_id));
			}else{
				$data['rurl']=base_url('');
			}
			$loginuser_id=$this->session->userdata('userdetails');
			$post_id=base64_decode($this->uri->segment(3));
			$data['post_images']=$this->Motivation_model->get_all_post_detail_list($post_id);
			$footerdata['post_images']=$this->Motivation_model->get_all_post_lists($loginuser_id['id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('html/sharing',$data);
	}
	public function sharetext()
	{
			$post_id=base64_decode($this->uri->segment(3));
			if($post_id !=''){
				$data['rurl']=base_url('motivation/singlepost/'.base64_encode($post_id));
			}else{
				$data['rurl']=base_url('');
			}
			$loginuser_id=$this->session->userdata('userdetails');
			$post_id=base64_decode($this->uri->segment(3));
			$data['post_images']=$this->Motivation_model->get_all_post_detail_list($post_id);
			$footerdata['post_images']=$this->Motivation_model->get_all_post_lists($loginuser_id['id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('html/sharetext',$data);
	}
	public function admin()
	{
		if($this->session->userdata('userdetails'))
		 {
			$header['currentURL'] = current_url();
			$this->load->view('html/header',$header);
			$loginuser_id=$this->session->userdata('userdetails');
			$data['image_list']=$this->Motivation_model->get_all_images_list($loginuser_id['id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('html/admin',$data);
			$this->load->view('html/footer');
		 }else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		} 
	}
	public function changepassword()
	{
		if($this->session->userdata('userdetails'))
		 {
			$header['currentURL'] = current_url();
			$this->load->view('html/header',$header);
			$loginuser_id=$this->session->userdata('userdetails');
			$this->load->view('html/changespassword');
			$this->load->view('html/footer');
		 }else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		} 
	}
	
	public function changepwdpost()
	{
		if($this->session->userdata('userdetails'))
		 {
			$post=$this->input->post();
				if(md5($post['password'])==md5($post['confirmpassword'])){
					$loginuser_id=$this->session->userdata('userdetails');
					$details=$this->Motivation_model->get_user_details($loginuser_id['id']);
					if($details['password']== md5($post['oldpassword'])){
						$udate_details=array(
						'password'=>md5($post['confirmpassword']),
						'orgpassword'=>$post['confirmpassword']
						);
						$update=$this->Motivation_model->update_user_details($loginuser_id['id'],$udate_details);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Password Successfully Updated.");
							redirect('motivation/changepassword');
						}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('motivation/changepassword');
						}
					}else{
						$this->session->set_flashdata('error',"Old Password are not matched.");
						redirect('motivation/changepassword');
					}
					
				}else{
					$this->session->set_flashdata('error',"Password  and  Confirm password are not matched.");
					redirect('motivation/changepassword');
				}
			//echo '<pre>';print_r($post);exit;
		 }else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		} 
	}
	
	public function details()
	{
		if($this->session->userdata('userdetails'))
		 {
			$header['currentURL'] = current_url();
			$this->load->view('html/header',$header);
			$post_id=base64_decode($this->uri->segment(3));
			$loginuser_id=$this->session->userdata('userdetails');
			$data['temp_image_list']=$this->Motivation_model->get_all_images_list($loginuser_id['id']);
			$data['image_list']=$this->Motivation_model->get_all_post_detail_list($post_id);
			$data['post_id']=base64_decode($this->uri->segment(3));
			//echo $this->db->last_query();exit;
			//echo '<pre>';print_r($data);exit;
			$this->load->view('html/edit',$data);
			$this->load->view('html/footer');
		 }else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		} 
	}
	public function addimage()
	{
		if($this->session->userdata('userdetails'))
		 {
				$post=$this->input->post();
				//echo '<pre>';print_r($post);exit;
				$loginuser_id=$this->session->userdata('userdetails');
				if(isset($_FILES['images1']['name']) && $_FILES['images1']['name']!=''){
					
					//echo 'dfds';exit;
							$pic=$_FILES['images1']['name'];
							$picname = str_replace(" ", "", $pic);
							$imagename=microtime().basename($picname);
							$imgname = str_replace(" ", "", $imagename);
							if(move_uploaded_file($_FILES['images1']['tmp_name'], "assets/temp/" . $imgname)){
							$filedata=array(
								'user_id'=>$loginuser_id['id'],
								'name'=>$imgname,
								'org_name'=>$_FILES['images1']['name'],
								'create_at'=>date('Y-m-d H:i:s'),				
								'text'=>$post['formsavetext'],				
								'title'=>$post['formsavetitle']			
								);
								//echo '<pre>';print_r($filedata);exit;
								$addfile = $this->Motivation_model->save_userfile($filedata);
							if(count($addfile)>0){
								$this->session->set_flashdata('success',"File successfully Select");
								redirect(''); 
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect(''); 	
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
								'create_at'=>date('Y-m-d H:i:s'),
								'title'=>$post['formsavetext'],				
								'text'=>$post['formsavetitle']									
								);
								//echo '<pre>';print_r($filedata);exit;
								$addfile = $this->Motivation_model->save_userfile($filedata);
							if(count($addfile)>0){
								$this->session->set_flashdata('success',"File successfully Select");
								redirect(''); 
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect(''); 	
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
								'create_at'=>date('Y-m-d H:i:s'),
								'title'=>$post['formsavetext1'],				
								'text'=>$post['formsavetitle1']								
								);
								$addfile = $this->Motivation_model->save_userfile($filedata);
							if(count($addfile)>0){
								$this->session->set_flashdata('success',"File successfully Select");
								redirect(''); 
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect(''); 	
								}
							}
				}
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect(''); 	
		
		 }else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		} 
	}
	public function editimage()
	{
		if($this->session->userdata('userdetails'))
		 {
				$post=$this->input->post();
				//echo '<pre>';print_r($post);exit;
				$loginuser_id=$this->session->userdata('userdetails');
				if(isset($_FILES['images2']['name']) && $_FILES['images2']['name']!=''){
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
								redirect('motivation/details/'.base64_encode($post['post_id'])); 	
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('motivation/details/'.base64_encode($post['post_id'])); 	
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
								redirect('motivation/details/'.base64_encode($post['post_id'])); 	
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('motivation/details/'.base64_encode($post['post_id'])); 		
								}
							}
				}
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('motivation/details/'.base64_encode($post['post_id'])); 		
		
		 }else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		} 
	}
	
	public function editimagepost()
	{
		if($this->session->userdata('userdetails'))
		 {
				$post=$this->input->post();
				
				//echo '<pre>';print_r($post);
				$loginuser_id=$this->session->userdata('userdetails');
				//echo '<pre>';print_r($loginuser_id);exit;
				$image_list=$this->Motivation_model->get_all_images_list($loginuser_id['id']);
				$editimage_list=$this->Motivation_model->get_alledit_post_images_list($loginuser_id['id'],$post['post_id']);
				//echo '<pre>';print_r($editimage_list);
				$data=array(
				'user_id'=>$loginuser_id['id'],
				'title'=>$post['title'],
				'text'=>$post['content'],
				'image_count'=>count($image_list) + count($editimage_list),
				'create_at'=>date('Y-m-d H:i:s')
				);
				$post_count=$this->Motivation_model->update_post_count_details($post['post_id'],$loginuser_id['id'],$data);
				
				foreach($image_list as $list){
					rename("assets/temp/".$list['name'], "assets/files/".$list['name']);
					$filedata=array(
								'user_id'=>$loginuser_id['id'],
								'post_id'=>$post['post_id'],
								'name'=>$list['name'],
								'org_name'=>$list['org_name'],
								'create_at'=>date('Y-m-d H:i:s'),				
								'status'=>1				
								 );
				$addfile = $this->Motivation_model->save_filepost($filedata);
				}
				if(count($addfile)>0 || count($post_count)>0){
					foreach($image_list as $list){
						$this->Motivation_model->delete_attachement($list['id']);
					}
					$this->session->set_flashdata('success',"File successfully Updated");
					redirect(''); 
				}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('motivation/details/'.base64_encode($post['post_id'])); 	
				}		
		
		 }else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		} 
	}
	
	
	public function attchements(){
		if($this->session->userdata('userdetails'))
		 {
			
			$images=$this->input->post();
			$details=$this->Motivation_model->get_images_details_list($images['attachmentid']);
			$removedattch = $this->Motivation_model->delete_attachement($images['attachmentid']);
			unlink("assets/temp/".$details['name']);
			if(count($removedattch) > 0)
					{
					$data['msg']=1;
					echo json_encode($data);	
					}
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		} 
	}	
	public function editattchements(){
		if($this->session->userdata('userdetails'))
		 {
			
			$images=$this->input->post();
			$details=$this->Motivation_model->get_edit_images_details_list($images['attachmentid']);
			$removedattch = $this->Motivation_model->delete_editattachement($images['attachmentid']);
			unlink("assets/files/".$details['name']);
			if(count($removedattch) > 0)
					{
					$data['msg']=1;
					echo json_encode($data);	
					}
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		} 
	}
	public function imagepost(){
		if($this->session->userdata('userdetails'))
		 {
				$post=$this->input->post();
				$loginuser_id=$this->session->userdata('userdetails');
				$image_list=$this->Motivation_model->get_all_images_list($loginuser_id['id']);
				$data=array(
				'user_id'=>$loginuser_id['id'],
				'title'=>$post['title'],
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
				if(count($addfile)>0 || count($post_count)>0){
					foreach($image_list as $list){
						$this->Motivation_model->delete_attachement($list['id']);
					}
					$this->session->set_flashdata('success',"File successfully Upload");
					redirect(''); 
				}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect(''); 	
				}
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		} 
		
	}
	public function lists()
	{
			if($this->session->userdata('userdetails'))
			{
				$header['currentURL'] = current_url();
				$this->load->view('html/header',$header);
				$loginuser_id=$this->session->userdata('userdetails');
				$data['user_details']=$this->Motivation_model->get_customer_details($loginuser_id['id']);
				$data['post_images']=$this->Motivation_model->get_all_post_list($loginuser_id['id']);
				//echo $this->db->last_query();
				//echo '<pre>';print_r($data);exit;
					$this->load->view('html/footer',$data);
				$this->load->view('html/list',$data);
			}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		} 
	}
	public function status(){
		if($this->session->userdata('userdetails'))
			{
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
				//echo $this->db->last_query();exit;
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
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		} 
		
	}
	public function deletes(){
		if($this->session->userdata('userdetails'))
			{
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
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		}
	}
	public function addcomment(){
		if($this->session->userdata('userdetails'))
			{
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$logindetails=$this->session->userdata('userdetails');
		$commentdata=array(
						'user_id'=>$logindetails['id'],
						'post_id'=>$post['post_id'],
						'comment'=>$post['comment'],
						'create_at'=>date('Y-m-d H:i:s')				
						 );
		$comment = $this->Motivation_model->add_comment($commentdata);
		if(count($comment)>0){
			$this->session->set_flashdata('success',"Comment successfully Added");
				redirect($this->agent->referrer()); 
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect($this->agent->referrer()); 
		}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect($this->agent->referrer());
		}
	}
	public function postrquestcommit(){
		if($this->session->userdata('userdetails'))
			{
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$commentdata=array(
						'post_id'=>$post['post_id'],
						'name'=>$post['name'],
						'email'=>$post['email'],
						'message'=>$post['message'],
						'create_at'=>date('Y-m-d H:i:s')				
						 );
		$comment = $this->Motivation_model->add_leavecomment($commentdata);
		if(count($comment)>0){
			$this->load->library('email');
						$this->email->set_newline("\r\n");
						$this->email->set_mailtype("html");
						$this->email->from($post['email']);
						$this->email->to('whatslyfhelp@gmail.com');
						$this->email->subject('whatslyf - Leave a Reply');
						$html='Hi  My Name '.$post['name'].' Here is the info my (post Id '.$post['post_id'].' ) requested is .'.$post['message'];
						//echo $html;exit;
						$this->email->message($html);
						$this->email->send();
			$this->session->set_flashdata('success',"Comment successfully Added");
				redirect($this->agent->referrer()); 
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect($this->agent->referrer()); 
		}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			$this->agent->referrer();
		}
	}
	public function contactpost(){
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$commentdata=array(
						'name'=>$post['name'],
						'subject'=>$post['subjects'],
						'email'=>$post['email'],
						'message'=>$post['message'],
						'create_at'=>date('Y-m-d H:i:s')				
						 );
		$comment = $this->Motivation_model->add_conatctus($commentdata);
		if(count($comment)>0){
			$this->load->library('email');
						$this->email->set_newline("\r\n");
						$this->email->set_mailtype("html");
						$this->email->from($post['email']);
						$this->email->to('whatslyfhelp@gmail.com');
						$this->email->subject($post['subjects']);
						$html=$post['message'];
						//echo $html;exit;
						$this->email->message($html);
						$this->email->send();
			$this->session->set_flashdata('success',"Query successfully Submit");
				redirect($this->agent->referrer()); 
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect($this->agent->referrer()); 
		}
	}
	public function feedback(){
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$commentdata=array(
						'option'=>$post['optradio'],
						'message'=>$post['message'],
						'create_at'=>date('Y-m-d H:i:s')				
						 );
		$feedback = $this->Motivation_model->add_feedback($commentdata);
		if(count($feedback)>0){
				$this->session->set_flashdata('success',"Query successfully send");
				redirect($this->agent->referrer()); 
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect($this->agent->referrer()); 
		}
	}	
	public function newsletter(){
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$email=$this->Motivation_model->get_newsletter($post['email']);
		if(count($email)==0){
			$newsletter=array(
							'email'=>$post['email'],
							'create_at'=>date('Y-m-d H:i:s')				
							 );
			$comment = $this->Motivation_model->add_newsletter($newsletter);
			if(count($comment)>0){
					$this->session->set_flashdata('success',"You are successfully subscribed");
					redirect($this->agent->referrer()); 
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect($this->agent->referrer()); 
			}
		}else{
			$this->session->set_flashdata('error'," You are already subscribed");
			redirect($this->agent->referrer()); 
		}
	}
	
	public function likecount(){
			if($this->session->userdata('userdetails'))
			{
				$loginuser_id=$this->session->userdata('userdetails');
				$post=$this->input->post();
				$likedetails=$this->Motivation_model->get_like_details($loginuser_id['id'],$post['postid']);
				if(count($likedetails)>0){
					$like=$this->Motivation_model->delete_like($likedetails['l_id']);
					if(count($like)>0){
						$countdetails=$this->Motivation_model->get_like_count($post['postid']);

						$data['msg']=count($countdetails);
						$data['msgs']=3;
							echo json_encode($data);	
					}else{
							$data['msgs']=4;
							echo json_encode($data);	
					}

				}else{

					$data=array(
					'post_id'=>$post['postid'],
					'user_id'=>$loginuser_id['id'],
					'create_at'=>date('Y-m-d H:i:s')
					);
					$details=$this->Motivation_model->update_like_count($data);
					$countdetails=$this->Motivation_model->get_like_count($post['postid']);
					if(count($details) > 0)
							{
							$data['msg']=count($countdetails);
							$data['msgs']=2;
							echo json_encode($data);	
							}
						
				}
				
			}else{
				$data['msgs']=1;
				echo json_encode($data);
			}
		
	}
	public function save_link(){
			if($this->session->userdata('userdetails'))
			{
				$loginuser_id=$this->session->userdata('userdetails');
				$post=$this->input->post();
				$data=array(
					'user_id'=>$loginuser_id['id'],
					'title'=>'',
					'text'=>$post['linkid'],
					'create_at'=>date('Y-m-d H:i:s')
					);
				$details=$this->Motivation_model->save_image_count($data);
				if(count($details)>0){
						$data['msg']=2;
						echo json_encode($data);

					}else{
							$data['msg']=3;
							echo json_encode($data);	
					}

			
			}else{
				$data['msgs']=1;
				echo json_encode($data);
			}
		
	}
	public function getfiledata(){
		$loginuser_id=$this->session->userdata('userdetails');
		$details=$this->Motivation_model->filesdata($loginuser_id['id']);
		if(count($details) > 0)
				{
				$path = $details['name'];
				$ext = pathinfo($path, PATHINFO_EXTENSION);
				$data['msg']=$ext;
				echo json_encode($data);	
				}else{
				$data['msg']='';
				echo json_encode($data);
				}
		
	}
	public function editgetfiledata(){
		$post=$this->input->post();
		$loginuser_id=$this->session->userdata('userdetails');
		$details=$this->Motivation_model->filesdata($post['attachmentid'],$loginuser_id['id']);
		if(count($details) > 0)
				{
				$path = $details['name'];
				$ext = pathinfo($path, PATHINFO_EXTENSION);
				$data['msg']=$ext;
				echo json_encode($data);	
				}else{
				$data['msg']='';
				echo json_encode($data);
				}
		
	}	
	public function search(){
		$post=$this->input->post();
		$details=$this->Motivation_model->get_search_post($post['searchdata']);
		if(count($details) > 0)
				{
				$data['msg']=1;
				$data['text']=$details;
				echo json_encode($data);	
				}else{
					$data['msg']=2;
					echo json_encode($data);
				}
		
	}
	public function uploadvideos(){
			$loginuser_id=$this->session->userdata('userdetails');
			$post=$this->input->post();
			$pic=$_FILES['attachment']['name'];
			$picname = str_replace(" ", "", $pic);
			$imagename=microtime().basename($picname);
			$imgname = str_replace(" ", "", $imagename);
			if(move_uploaded_file($_FILES['attachment']['tmp_name'], "assets/temp/" . $imgname)){
			$filedata=array(
			'user_id'=>$loginuser_id['id'],
			'name'=>$imgname,
			'org_name'=>$_FILES['attachment']['name'],
			'create_at'=>date('Y-m-d H:i:s'),
			'title'=>$post['text1'],				
			'text'=>$post['title1']									
			);
			//echo '<pre>';print_r($filedata);exit;
			$addfile = $this->Motivation_model->save_userfile($filedata);
				if(count($addfile)>0){
					$data['msg']=1;
					echo json_encode($data);	
				}else{
					$data['msg']=2;
					echo json_encode($data);
				}
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
