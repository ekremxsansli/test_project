<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __Construct()
	{
	   	parent::__construct();
	   	$this->check_isvalidated();
 		$this->load->model('like_model');
	}	
	public function dashboard()
	{
		$data = $this->like_model->getAll();
		$this->load->view('/admin/header');
		$this->load->view('/admin/dashboard', array('data' => $data));
		$this->load->view('/admin/footer');		
	}
	
	private function check_isvalidated(){
        if(!$this->session->userdata('is_admin_login')){
            redirect('/admin/login');
        }
    }	
	
}

?>
