<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Like extends CI_Controller {
	
	public function __Construct() {
		
		parent::__construct();
		$this->load->model('like_model');
		$this->load->library('session');
	}
	
	public function add()
	{
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */