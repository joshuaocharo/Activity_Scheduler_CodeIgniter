<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {

	public function return_users()
	{
		$this->load->database();
		$query = $this-> db-> query("SELECT * FROM user");
		$query -> result_array();
		/*echo "<pre>";
		print_r($query -> result_array());
		echo "</pre>";*/
		return $query -> result_array(); 
	}
	
}
?>