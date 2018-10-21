<?php
	class Goal_model extends CI_Model{
		public function __construct(){
			$activity= $this->load->database('dbactivity', TRUE);
		}
		public function get_goals($slug = FALSE){
			$activity= $this->load->database('dbactivity', TRUE);
			if($slug === FALSE){
				$query= $activity->get('goals');
				return $query->result_array();
			}
			$query = $activity->get_where('goals', array('slug'=> $slug));
			return $query->row_array();
		}
		public function create(){
			$activity= $this->load->database('dbactivity', TRUE);
			$data = array(
				'title'=> $this->input->post('title'),
				'complete_by'=> $this->input->post('date'),
				'description'=> $this->input->post('description')
			);
			$query= $activity->insert('goals', $data);
			return $query;
		}
	}