<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller{
	
	public function __Construct() {
		
		parent::__construct();
		$this->load->model('account_model');
		$this->load->library('session');
	}
	//$this->security->xss_clean
	public function login(){
		
		$postData = $this->input->post()['data'];
		if($this->account_model->login($this->security->xss_clean($postData['username']),md5($this->security->xss_clean($postData['password']))) != 0){
			$this->session->set_userdata(array('is_admin_login' => true));
			redirect('/admin/home/dashboard');
		}
		else
		{
			$this->session->set_flashdata('message', 'Kullanıcı adı veya şifre hatalı');
			 redirect("/admin/login");
		}

    }
	public function logout(){
		$this->session->unset_userdata('is_admin_login');
		redirect('/admin/login');
	}
        
}
