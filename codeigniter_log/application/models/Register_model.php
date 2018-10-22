<?php
class Register_model extends CI_Model{
		public function __construct(){
			$activity= $this->load->database('default', TRUE);
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
		$arg= array($email,self::protect($pass),self::protect($user));
		/*if($this->db->query($query, $arg) == true){
			return TRUE;// Added to db successfully
		}else{
			return FALSE;
		}*/
	}

	public function protect( $str){
		return mysql_real_escape_string($str);
	}
}