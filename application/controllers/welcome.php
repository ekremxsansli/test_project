<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __Construct() {
		
		parent::__construct();
		$this->load->model('welcome_model');
		$this->load->model('like_model');
		$this->load->library('pusher');
	}
	public function index()
	{
		$settings = $this->welcome_model->getSettings();
		$facebook = $this->welcome_model->getFacebook();
		$this->load->view('header',array('settings' => $settings,'facebook' => $facebook));
		$this->load->view('welcome');
		$this->load->view('footer');
	}
	public function getPost(){
		echo json_encode($this->welcome_model->getPost());
	}
	public function sendLikeInfo(){
		$data = $this->input->post();
		if($this->like_model->insert($this->input->post()) != 0){
			$data['id'] = $this->db->insert_id();
			$this->pusher->trigger('test_channel', 'my_event', array('message' => $data));
		}
	}
	public function likeControl(){
		echo $this->like_model->get($this->input->get()['userId']);
	}
}
