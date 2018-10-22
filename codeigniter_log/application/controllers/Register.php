<?php

/**
 * 
 */
class Register extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		
	}
	public function index(argument)
	{
		//Validation
		$rules= array(
			"email" =>array(
		
		"field"=>"email",
	    "label"=>"Email",
        "rules" =>"required|valid_email|callback_email_is_taken"
	),
			"password" =>array(
		
		"field"=>"password",
	    "label"=>"Password",
        "rules" =>"required|max_length[20]|min_length[2]"
	),
			"username" =>array(
		
		"field"=>"username",
	    "label"=>"Username",
        "rules" =>"required|max_length[20]|min_length[2]|callback_username_is_taken"
	),
	);
		//set the rules
		$this->form_validation->set_rules($rules);

		//checks to see if form was submitted
		if ($this-> form_validation->run() !=true) {
			$this->load->view("vregister");// display register page
		}else{
			$form = array();
			$form['email']= $this->input->post("email");
			$form['password']= md5($this->input->post("password"));
			$form['username']= $this->input->post("username");
			#Create User here.
			if (self::createUser($form['email'],$form['password'],$form['username'])== true) {
			// created user succesfully
				$data['username']= $form['username'];
				$this->load->view("homel",$data);
			}else{
             echo "Not successful";        
			}
		}
	}
	public function username_is_taken($input){
		$query ="SELECT * FROM 'users' WHERE 'fname'=?";
		$arg= array($input);
		$exec = $this->db->query($query,$arg) or die(mysql_error());

		if ($exec->num_rows()>0) {
			$this-> set_message('username_is_taken',"Username is <b> $input </b> taken");
			return FALSE;
		}else{
			return TRUE;
		}
	}

	public function email_is_taken($input){
		$query ="SELECT * FROM 'users' WHERE 'email'=?";
		$arg= array($input);
		$exec = $this->db->query($query,$arg) or die(mysql_error());

		if ($exec->num_rows()>0) {
			$this-> set_message('email_is_taken',"Email is <b> $input </b> taken");
			return FALSE;
		}else{
			return TRUE;
		}
	}
	public function createUser($email,$pass,$user)
	{
		$query ="
             INSERT INTO 'users'
             ('email','password','fname')
             VALUES(?,?,?)
		";
		$arg= array($email,self::protect($pass),self::protect($user);
		if($this->db->query($query, $arg)== true){
			return TRUE;// Added to db successfully
		}else{
			return FALSE;
		}
	}

	public function protect( $str){
		return mysql_real_escape_string($str);
	}
}

?>