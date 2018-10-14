<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Act extends CI_Controller {

	public function index()
	{
		$this->load->model('mymodel');
		$firstname = $this->mymodel->index();
		echo "firstname =>", $firstname;
	}
	
}
?>