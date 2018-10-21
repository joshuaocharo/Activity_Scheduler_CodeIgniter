<?php
	class Goals extends CI_Controller{
		public function index(){
			$data['title'] = 'Goals';

			$data['goals'] = $this->goal_model->get_goals();

			$this->load->view('templates/add_header');
			$this->load->view('goals/index', $data);
			$this->load->view('templates/add_footer');
		}
		public function create(){
			$data['title'] = 'Set Goals';

			$this->form_validation->set_rules('name', 'name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/add_header');
				$this->load->view('goals/create', $data);
				$this->load->view('templates/add_footer');
			}else{
				$this->goal_model->create();
				redirect ('goals');
			}
		}
		public function posts($id){
			$data['title'] = $this->category_model->get_category($id)->name;

			$data['posts'] = $this->post_model->get_posts_by_category($id);
			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
	}