<?php

class Post_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function insert($data){
		$query = $this->db->insert('post', $data); 
		return $query;
	}
	public function getAll(){
		$this->db->select('*');
		$this->db->from('post');
		return $this->db->get()->result_array();
	}
	public function get($id){
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where('id', $id); 
		return $this->db->get()->row();		
	}
	public function update($data,$id){
		if($data['active'] == 1)
			$this->db->update('active_post', array('post_id' => $id));
		else{
			$this->db->update('active_post', array('post_id' => 0));
			
		}
		unset($data['active']);
		$this->db->where('id', $id);
		$query = $this->db->update('post', $data);
		return $query;
	}
	public function delete($id){
		$this->db->where('id', $id);
		$query = $this->db->delete('post'); 
		if($id == $this->db->get('active_post')->row()->post_id)
			$this->db->update('active_post', array('post_id' => 0));
		return $query;
	}
}
?>