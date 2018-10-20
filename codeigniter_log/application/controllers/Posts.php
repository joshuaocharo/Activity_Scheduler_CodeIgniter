<?php
	class Posts extends CI_Controller{
		public function index(){
			$data['title'] = 'List';
			$data['tasks'] = $this->task_model->get_tasks();
			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug = NULL){
			$data['task'] = $this->task_model->get_tasks($slug);
			if(empty($data['task'])){
				show_404();
			}
			$data['title'] = $data['task']['title'];
			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			$data['title'] = "Add";
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('priority','priority','required');

			if($this->form_validation->run === FALSE){
				$this ->load->view('posts/add', $data);
				$this ->load->view('templates/footer');

			}else{
				$this->Task_model->add_task();
				redirect('posts');
			}
		}

		public function delete($id){
			$this->Task_model->delete_task($id);
			redirect('posts');
		}

		public function edit($slug){
			$data['tasks'] = $this-> Task_model -> get_tasks($slug);
		if(empty($data['tasks'])){
				show_404();
		}

		$data['title'] = $data['tasks']['title'];
			$this -> load ->views('templates/header'); 
			$this -> load ->views('posts/edit', $data);
			$this -> load ->views('templates/footer');
		}

		public function update(){
			$this->Task_model->update_post();
			redirect('posts');
		}
	}