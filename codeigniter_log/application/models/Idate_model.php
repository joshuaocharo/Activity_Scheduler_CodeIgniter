<?php
	class Idate_model extends CI_Model{
		public function __construct(){
			$activity= $this->load->database('dbactivity', TRUE);
		}
		public function get_idates($slug = FALSE){
			$activity= $this->load->database('dbactivity', TRUE);
			if($slug === FALSE){
				$activity->order_by('id', 'DESC');
				$query= $activity->get('idates');
				return $query->result_array();
			}
			$query = $activity->get_where('idates', array('slug'=> $slug));
			return $query->row_array();
		} 
		public function create(){
			$activity= $this->load->database('dbactivity', TRUE);
			$data = array(
				'title'=> $this->input->post('title'),
				'date'=> $this->input->post('date'),
				'description'=> $this->input->post('description')
			);
			$query= $activity->insert('idates', $data);
			return $query;
		}
		public function delete_post($id){
			$activity= $this->load->database('dbactivity', TRUE);
			$activity->where('id', $id);
			$activity->delete('idates');
			return true;
		}
	}