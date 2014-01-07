<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facebook	 extends CI_Controller{
	
	public function __Construct() {
		
		parent::__construct();
		$this->load->model('facebook_model');
		$this->active_post = $this->db->get('active_post')->row()->facebook_id;
		
	}
	public function create(){
		if($this->input->post()){
			if($this->facebook_model->insert($this->input->post()) == 1)
			{
				redirect('/admin/facebook/lists');
			}
		}
		else{
			$this->load->view('/admin/header');
			$this->load->view('/admin/facebook/create');
			$this->load->view('/admin/footer');
		}
    }
	public function lists(){
		$data = $this->facebook_model->getAll();
		$this->load->view('/admin/header');
		$this->load->view('/admin/facebook/list', array('data' => $data,'active_post' => $this->active_post));
		$this->load->view('/admin/footer');
	}
	public function show($id){
		$data = $this->facebook_model->get($id);
		$data->active_post = $this->active_post;
		$this->load->view('/admin/header');
		$this->load->view('/admin/facebook/show', $data);
		$this->load->view('/admin/footer');
	}
	public function edit($id){
		if($this->input->post()){
			if($this->facebook_model->update($this->input->post(),$id) == 1)
			{
				redirect('/admin/facebook/show/'.$id);
			}
		}
		else{
			$data = $this->facebook_model->get($id);
			$data->active_post = $this->active_post;
			$this->load->view('/admin/header');
			$this->load->view('/admin/facebook/update', $data);
			$this->load->view('/admin/footer');			
		}
	}
	public function delete($id){
		if($this->facebook_model->delete($id) == 1){
			redirect('/admin/facebook/lists');
		}
	}
        
}
