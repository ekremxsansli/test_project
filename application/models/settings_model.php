<?php

class Settings_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function insert($data){
		$query = $this->db->insert('settings', $data); 
		return $query;
	}
	public function getAll(){
		$this->db->select('*');
		$this->db->from('settings');
		return $this->db->get()->result_array();
	}
	public function get($id){
		$this->db->select('*');
		$this->db->from('settings');
		$this->db->where('id', $id); 
		return $this->db->get()->row();		
	}
	public function update($data,$id){
		$this->db->where('id', $id);
		$query = $this->db->update('settings', $data);
		return $query;
	}
}
?>