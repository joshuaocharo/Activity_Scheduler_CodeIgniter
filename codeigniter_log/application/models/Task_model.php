<?php
	class Task_model extends CI_Model{
		public function __construct(){
			$activity= $this->load->database('dbactivity', TRUE);
		}
		public function get_tasks($slug = FALSE){
			$activity= $this->load->database('dbactivity', TRUE);
			if($slug === FALSE){
				$query= $activity->get('tasks');
				return $query->result_array();
			}
			$query = $activity->get_where('tasks', array('slug'=> $slug));
			return $query->row_array();
		}
		public function create(){
			$activity= $this->load->database('dbactivity', TRUE);
			$data = array(
				'title'=> $this->input->post('title'),
				'date'=> $this->input->post('date'),
				'priority_id' => $this->input->post('priority_id'),
				
			);
			$query= $activity->insert('tasks', $data);
			return $query;
		}
		public function delete_post($id){
			$activity= $this->load->database('dbactivity', TRUE);
			$activity->where('id', $id);
			$activity->delete('tasks');
			return true;
		}
		public function get_priorities(){
			$activity= $this->load->database('dbactivity', TRUE);
			$activity->order_by('level');
			$query = $activity->get('priorities');
			return $query->result_array();
		}
	}