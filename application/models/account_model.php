<?php

class Account_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function login($username,$password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username); 
		$this->db->where('password', $password); 
		return $this->db->get()->num_rows;
	}
}
?>