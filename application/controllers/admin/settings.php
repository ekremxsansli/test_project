<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller{
	
	public function __Construct() {
		
		parent::__construct();
		$this->load->model('settings_model');
	}
	public function create(){
		if($this->input->post()){
			if($this->settings_model->insert($this->input->post()) == 1)
			{
				redirect('/admin/settings/lists');
			}
		}
		else{
			$this->load->view('/admin/header');
			$this->load->view('/admin/settings/create');
			$this->load->view('/admin/footer');
		}
	}
	public function lists(){
		$data = $this->settings_model->getAll();
		$this->load->view('/admin/header');
		$this->load->view('/admin/settings/list', array('data' => $data));
		$this->load->view('/admin/footer');
	}
	public function edit($id){
		if($this->input->post()){
			if($this->settings_model->update($this->input->post(),$id) == 1)
			{
				redirect('/admin/settings/lists');
			}
		}
		else{
			$data = $this->settings_model->get($id);
			$this->load->view('/admin/header');
			$this->load->view('/admin/settings/update', $data);
			$this->load->view('/admin/footer');			
		}		
	}
        
}
