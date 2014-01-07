<?php

class Like_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function insert($data){
		$query = $this->db->insert('like', $data); 
		return $query;
	}
	public function getAll(){
		$this->db->select('*');
		$this->db->from('like');
		return $this->db->get()->result_array();
	}
	public function get($userId){
		$this->db->select('*');
		$this->db->from('like');
		$this->db->where('userId', $userId);
		return $this->db->get()->num_rows;
	}
	public function delete($userId){
		$this->db->where('userId', $userId);
		$query = $this->db->delete('like'); 
		return $query;
	}
}
?>