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
	public function get_alledit_post_images_list($user_id,$post_id){
		$this->db->select('*')->from('posts');		
		$this->db->where('user_id', $user_id);
		$this->db->where('post_id', $post_id);
		return $this->db->get()->result_array();
	}
	public function get_images_details_list($id){
		$this->db->select('*')->from('temp');		
		$this->db->where('id', $id);
		return $this->db->get()->row_array();
	}
	public function get_edit_images_details_list($id){
		$this->db->select('*')->from('posts');		
		$this->db->where('img_id', $id);
		return $this->db->get()->row_array();
	}
	public function delete_attachement($id){
		$sql1="DELETE FROM temp WHERE id = '".$id."'";
		return $this->db->query($sql1);
	}
	public function delete_editattachement($id){
		$sql1="DELETE FROM posts WHERE img_id = '".$id."'";
		return $this->db->query($sql1);
	}
	public function get_all_post_list($user_id){
		$this->db->select('COUNT(img_id) as count,post_count.p_id,post_count.pstatus,posts.create_at,posts.create_at,admin.name,status.status_text')->from('posts');		
		$this->db->join('post_count', 'post_count.p_id = posts.post_id', 'left');
		$this->db->join('admin', 'admin.id = posts.user_id', 'left');
		$this->db->join('status', 'status.id = post_count.pstatus', 'left');
		$this->db->where('post_count.user_id', $user_id);
		//$this->db->where('post_count.pstatus', 1);
		 $this->db->group_by('posts.post_id');
		$this->db->order_by("post_count.create_at", "DESC");
		$return=$this->db->get()->result_array();
		foreach($return as $list){
			$images=$this-> get_all_post_imgs($list['p_id']);
			$comment=$this-> get_all_comments_imgs($list['p_id']);
			$like=$this-> get_all_like_imgs($list['p_id']);
			$lis[$list['p_id']]=$list;
			$lis[$list['p_id']]['p_list']=$images;
		}
		if(!empty($lis))
		{
		return $lis;
		}
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
			//echo '<pre>';print_R($images);exit;
			$comment=$this-> get_all_comments_imgs($return['p_id']);
			$like=$this-> get_all_like_imgs($return['p_id']);
			//$share=$this-> get_sahrecount($images[0]['imgname']);
			$lis=$return;
			$lis['p_list']=$images;
			$lis['comment_list']=$comment;
			$lis['like_count']=$like['like'];
			//$lis['sharecount']=isset($share['share']['share_count'])?$share['share']['share_count']:'';
		
		if(!empty($lis))
		{
		return $lis;
		}
	}
	
	public function get_sahrecount($name){
			$name='http://test.shofus.com/uploads/products/0.83075400%201518082694wallet1.jpg';
			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => 'http://graph.facebook.com/?id='.$name,
			CURLOPT_USERAGENT => 'Codular Sample cURL Request'
			));
			$resp = curl_exec($curl);
			$data=json_decode($resp, TRUE);
			curl_close($curl);
			return $data;
			
	}
	
	public function get_all_post_lists(){
		$this->db->select('post_count.*,,admin.name')->from('post_count');
		$this->db->join('admin', 'admin.id = post_count.user_id', 'left');
		//$this->db->where('post_count.user_id', $user_id);
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
		$this->db->select('posts.name as imgname,posts.img_id,posts.org_name,posts.create_at,admin.name')->from('posts');		
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
	public function get_search_post($search){
		$this->db->select('FROM_BASE64(post_count.p_id) ,TO_BASE64(post_count.p_id) as url,post_count.p_id,post_count.title,LEFT(post_count.text, 40) as lit,post_count.create_at,post_count.image_count')->from('post_count');		
		$this->db->like('title',$search);
		$this->db->or_like('text', $search);
		return $this->db->get()->result_array();
	}
	public function update_like_count($pid,$data){
		$this->db->where('post_id', $pid);
		return $this->db->update('like_count', $data);
	}
	public function add_leavecomment($data){
		$this->db->insert('leave_a_replay', $data);
		return $insert_id = $this->db->insert_id();	
	}
	public function add_conatctus($data){
		$this->db->insert('contactus', $data);
		return $insert_id = $this->db->insert_id();	
	}
	public function add_newsletter($data){
		$this->db->insert('newsletter', $data);
		return $insert_id = $this->db->insert_id();	
	}
	public function add_feedback($data){
		$this->db->insert('feedback', $data);
		return $insert_id = $this->db->insert_id();	
	}
	public function get_newsletter($email){
		$this->db->select('*')->from('newsletter');		
		$this->db->where('email', $email);
		return $this->db->get()->row_array();
	}

	public function filesdata(){
		$this->db->select('*')->from('temp');
		$this->db->order_by("temp.create_at", "DESC");		
		return $this->db->get()->row_array();
	}
	public function editfilesdata($pid,$user_id){
		$this->db->select('*')->from('posts');
		 $this->db->where('posts.post_id',$pid);
		 $this->db->where('posts.user_id',$user_id);
		return $this->db->get()->row_array();
	}
	public function update_post_count_details($pid,$user_id,$data){
		 $this->db->where('post_count.p_id',$pid);
		 $this->db->where('post_count.user_id',$user_id);
		return $this->db->update('post_count', $data);
	}
	
	
	
}