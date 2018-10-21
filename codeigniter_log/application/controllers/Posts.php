<?php
	class Posts extends CI_Controller{
		public function index(){
			$data['title'] = 'List';
			$data['tasks'] = $this->task_model->get_tasks();
			$this->load->view('templates/add_header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/add_footer');
		}

		public function view($slug = NULL){
			$data['task'] = $this->task_model->get_tasks($slug);
			if(empty($data['task'])){
				show_404();
			}
			$data['title'] = $data['task']['title'];
			$this->load->view('templates/add_header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/add_footer');
		}

		public function create(){
			$data['title'] = 'Set Goal';

			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('date', 'date', 'required');
			$this->form_validation->set_rules('description', 'description', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/add_header'); 
				$this->load->view('posts/create',$data);
				$this->load->view('templates/add_footer');
			} else{
				$this->task_model->create();
				redirect('posts');
			}
		}

		public function edit($slug){
			$data['tasks'] = $this-> Task_model -> get_tasks($slug);
		if(empty($data['tasks'])){
				show_404();
		}

		$data['title'] = $data['tasks']['title'];
			$this -> load ->view('templates/add_header'); 
			$this -> load ->view('posts/edit', $data);
			$this -> load ->view('templates/add_footer');
		}

		public function update(){
			$this->Task_model->update_post();
			redirect('posts');
		}
	}