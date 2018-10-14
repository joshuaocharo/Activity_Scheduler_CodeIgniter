<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdetails extends CI_Controller {

	public function index()
	{
		$this->load->model('usermodel');
		$data['userArray'] = $this->usermodel->return_users();
		$this->load->view('user_view',$data);
	}
	
}
?>