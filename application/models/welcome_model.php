<?php

class Welcome_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getSettings(){
		$this->db->select('*');
		$this->db->from('settings');
		$settings = array();
		foreach($this->db->get()->result_array() as $data){
			$settings[$data['name']] = $data['value'];
		}
		return $settings;
	}
	public function getFacebook(){
		$id = $this->db->get('active_post')->row()->facebook_id;
		$this->db->select('*');
		$this->db->from('facebook');
		$this->db->where('id',$id); 
		return $this->db->get()->row();
	}
	public function getPost(){
		$id = $this->db->get('active_post')->row()->post_id;
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where('id',$id); 
		return $this->db->get()->row();
	}
}
?>