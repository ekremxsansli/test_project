<?php

class Facebook_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function insert($data){
		$query = $this->db->insert('facebook', $data); 
		return $query;
	}
	public function getAll(){
		$this->db->select('*');
		$this->db->from('facebook');
		return $this->db->get()->result_array();
	}
	public function get($id){
		$this->db->select('*');
		$this->db->from('facebook');
		$this->db->where('id', $id); 
		return $this->db->get()->row();		
	}
	public function update($data,$id){
		if($data['active'] == 1)
			$this->db->update('active_post', array('facebook_id' => $id));
		else
			$this->db->update('active_post', array('facebook_id' => 0));
		unset($data['active']);
		
		$this->db->where('id', $id);
		$query = $this->db->update('facebook', $data);
		return $query;
	}
	public function delete($id){
		$this->db->where('id', $id);
		$query = $this->db->delete('facebook'); 
		if($id == $this->db->get('active_post')->row()->facebook_id)
			$this->db->update('active_post', array('facebook_id' => 0));
		return $query;
	}
}
?>