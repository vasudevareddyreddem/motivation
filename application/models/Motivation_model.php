<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Motivation_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function check_login_details($email,$pass){
		$this->db->select('*')->from('admin');		
		$this->db->where('email', $email);
		$this->db->where('password', $pass);
		return $this->db->get()->row_array();
	}
	public function save_image_count($data){
		$this->db->insert('post_count', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function save_filepost($data){
		$this->db->insert('posts', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function save_userfile($data){
		$this->db->insert('temp', $data);
		return $insert_id = $this->db->insert_id();
	}
	
	public function get_all_images_list($user_id){
		$this->db->select('*')->from('temp');		
		$this->db->where('user_id', $user_id);
		return $this->db->get()->result_array();
	}
	public function get_images_details_list($id){
		$this->db->select('*')->from('temp');		
		$this->db->where('id', $id);
		return $this->db->get()->row_array();
	}
	public function delete_attachement($id){
		$sql1="DELETE FROM temp WHERE id = '".$id."'";
		return $this->db->query($sql1);
	}
	public function get_all_post_list($user_id){
		$this->db->select('COUNT(img_id) as count,post_count.p_id,post_count.pstatus,posts.create_at,posts.create_at')->from('posts');		
		$this->db->join('post_count', 'post_count.p_id = posts.post_id', 'left');
		$this->db->where('post_count.user_id', $user_id);
		//$this->db->where('post_count.pstatus', 1);
		 $this->db->group_by('posts.post_id');
		$this->db->order_by("posts.create_at", "DESC");
		return $this->db->get()->result_array();
	}
	public function update_post_details($pid){
		$this->db->select('*')->from('posts');		
		 $this->db->where('posts.post_id',$pid);
		return $this->db->get()->result_array();
	}
	
	public function update_post_staus($pid,$data){
		$this->db->where('p_id', $pid);
		return $this->db->update('post_count', $data);
	}
	public function delete_post_images($id){
		$sql1="DELETE FROM posts WHERE img_id = '".$id."'";
		return $this->db->query($sql1);
	}
	public function delete_post($id){
		$sql1="DELETE FROM post_count WHERE p_id = '".$id."'";
		return $this->db->query($sql1);
	}
	public function get_all_post_lists($user_id){
		$this->db->select('*')->from('posts');		
		$this->db->where('posts.user_id', $user_id);
		$this->db->where('posts.status', 1);
		$this->db->order_by("posts.create_at", "DESC");
		return $this->db->get()->result_array();
	}
	
}