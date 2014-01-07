<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	
	public function __Construct() {
		
		parent::__construct();
		$this->load->model('account_model');
		$this->load->library('session');
	}
	//$this->security->xss_clean
	public function index(){
		$this->load->view('/admin/login');
	}   
}
