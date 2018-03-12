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
	public function save_like_count($data){
		$this->db->insert('like_count', $data);
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
		$this->db->select('COUNT(img_id) as count,post_count.p_id,post_count.pstatus,posts.create_at,posts.create_at,admin.name')->from('posts');		
		$this->db->join('post_count', 'post_count.p_id = posts.post_id', 'left');
		$this->db->join('admin', 'admin.id = posts.user_id', 'left');
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
	public function get_all_post_detail_list($postid){
		$this->db->select('post_count.*,,admin.name')->from('post_count');
		$this->db->join('admin', 'admin.id = post_count.user_id', 'left');
		$this->db->where('post_count.p_id', $postid);
		$this->db->group_by('post_count.p_id');
		$this->db->order_by("post_count.create_at", "DESC");
		$this->db->where('post_count.pstatus', 1);
		$return= $this->db->get()->row_array();
			$images=$this-> get_all_post_imgs($return['p_id']);
			$comment=$this-> get_all_comments_imgs($return['p_id']);
			$like=$this-> get_all_like_imgs($return['p_id']);
			$lis=$return;
			$lis['p_list']=$images;
			$lis['comment_list']=$comment;
			$lis['like_count']=$like['like'];
		
		if(!empty($lis))
		{
		return $lis;
		}
	}
	public function get_all_post_lists($user_id){
		$this->db->select('post_count.*,,admin.name')->from('post_count');
		$this->db->join('admin', 'admin.id = post_count.user_id', 'left');
		$this->db->where('post_count.user_id', $user_id);
		$this->db->group_by('post_count.p_id');
		$this->db->order_by("post_count.create_at", "DESC");
		$this->db->where('post_count.pstatus', 1);
		$return= $this->db->get()->result_array();
		foreach($return as $list){
			$images=$this-> get_all_post_imgs($list['p_id']);
			$comment=$this-> get_all_comments_imgs($list['p_id']);
			$like=$this-> get_all_like_imgs($list['p_id']);
			$lis[$list['p_id']]=$list;
			$lis[$list['p_id']]['p_list']=$images;
			$lis[$list['p_id']]['comment_list']=$comment;
			$lis[$list['p_id']]['like_count']=$like['like'];
		}
		if(!empty($lis))
		{
		return $lis;
		}
		//echo '<pre>';print_r($lis);
	}
	public function get_all_post_imgs($p_id){
		$this->db->select('posts.name as imgname,posts.org_name,posts.create_at,admin.name')->from('posts');		
		$this->db->join('admin', 'admin.id = posts.user_id', 'left');
		$this->db->where('posts.post_id', $p_id);
		$this->db->order_by("posts.create_at", "DESC");
		return $this->db->get()->result_array();
	}
	public function get_all_comments_imgs($p_id){
		$this->db->select('*')->from('comments');		
		$this->db->where('comments.post_id', $p_id);
		$this->db->order_by("comments.create_at", "DESC");
		return $this->db->get()->result_array();
	}
	public function get_all_like_imgs($p_id){
		$this->db->select('*')->from('like_count');		
		$this->db->where('like_count.post_id', $p_id);
		return $this->db->get()->row_array();
	}
	public function add_comment($data){
		$this->db->insert('comments', $data);
		return $insert_id = $this->db->insert_id();	
	}
	public function get_like_count($post_id){
		$this->db->select('*')->from('like_count');		
		$this->db->where('post_id', $post_id);
		return $this->db->get()->row_array();
	}
	public function update_like_count($pid,$data){
		$this->db->where('post_id', $pid);
		return $this->db->update('like_count', $data);
	}
	
	
}