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
			$data['title'] = 'Add Task';
			$data['priorities'] = $this->task_model->get_priorities();

			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('date', 'date', 'required');
			

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/add_header'); 
				$this->load->view('posts/create',$data);
				$this->load->view('templates/add_footer');
			} else{
				$this->task_model->create();
				redirect('posts');
			}
		}

		public function delete($id){
			$this->task_model->delete_post($id);
			redirect('posts');
		}
	}