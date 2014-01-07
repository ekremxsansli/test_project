<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller{
	
	public function __Construct() {
		
		parent::__construct();
		$this->load->model('post_model');
		$this->active_post = $this->db->get('active_post')->row()->post_id;
	}
	public function create(){
		if($this->input->post()){
			if($this->post_model->insert($this->input->post()) == 1)
			{
				redirect('/admin/post/list');
			}
		}
		else{
			$this->load->view('/admin/header');
			$this->load->view('/admin/post/create');
			$this->load->view('/admin/footer');
		}
    }
	public function lists(){

		$data = $this->post_model->getAll();
		$this->load->view('/admin/header');
		$this->load->view('/admin/post/list', array('data' => $data,'active_post' => $this->active_post));
		$this->load->view('/admin/footer');
	}
	public function show($id){
		$data = $this->post_model->get($id);
		$data->active_post = $this->active_post;
		$this->load->view('/admin/header');
		$this->load->view('/admin/post/show', $data);
		$this->load->view('/admin/footer');
	}
	public function edit($id){
		if($this->input->post()){
			if($this->post_model->update($this->input->post(),$id) == 1)
			{
				redirect('/admin/post/show/'.$id);
			}
		}
		else{
			$data = $this->post_model->get($id);
			$data->active_post = $this->active_post;
			$this->load->view('/admin/header');
			$this->load->view('/admin/post/update', $data);
			$this->load->view('/admin/footer');			
		}
	}
	public function delete($id){
		if($this->post_model->delete($id) == 1){
			redirect('/admin/post/lists');
		}
	}
        
}
