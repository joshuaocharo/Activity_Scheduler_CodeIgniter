<?php
	class Goals extends CI_Controller{
		public function index(){
			$data['title'] = 'Important Events';

			$data['idates'] = $this->idate_model->get_idates();

			$this->load->view('templates/add_header');
			$this->load->view('idates/index', $data);
			$this->load->view('templates/add_footer');
		}
		public function create(){
			$data['title'] = 'Schedule Event';

			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('date', 'date', 'required');
			$this->form_validation->set_rules('description', 'description', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/add_header');
				$this->load->view('idates/create', $data);
				$this->load->view('templates/add_footer');
			}else{
				$this->idate_model->create();
				redirect ('idates');
			}
		}
		public function delete($id){
			$this->idate_model->delete_post($id);
			redirect('idates');
		}
	}