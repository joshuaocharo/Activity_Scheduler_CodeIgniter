<?php
	class Pages extends CI_Controller{
		public function view($page='home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();//in case an error occurs
			}

			$data['title'] = ucfirst($page); 
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}

		public function login(){
			$data['title'] = 'Log In';
			$this->form_validation->set_rules('uname', 'Name', 'required');
			$this->form_validation->set_rules('passw', 'Password', 'required');
			$this->form_validation->set_rules('phone', 'Phone Number', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/login', $data);
				$this->load->view('templates/footer');
			}else{
				$this->post_model->create_user();
				redirect('pages/home');
		}
	}
}