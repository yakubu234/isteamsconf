<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	public function insert_user($data){
		$query = $this->db->insert('conference_attendee', $data);
		if ($query) {
			return true; 
		}else{
			return false;
		}

	}

	public function insert_admin($data){
		$query = $this->db->insert('admin', $data);
		if ($query) {
			return true; 
		}else{
			return false;
		}

	}

	public function insert_todos($data){
		$query = $this->db->insert('todolist', $data);
		if ($query) {
			return true; 
		}else{
			return false;
		}

	}

	public function get_search($role){
		$query = "SELECT * FROM todolist WHERE 
		id = (SELECT MAX(id) FROM todolist WHERE role = '".$role."')";
		$query = $this->db->query($query);
		return $query->result();
	}

	public function get_search_todo($search){
		$query = "SELECT * FROM todolist WHERE  subject = '$search'";
		$query = $this->db->query($query);
		return $query->result();
	}

	public function checkLogin($email, $password) {
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function selcet_from_edit($email) {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$email);
		$query=$this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function reactivation($email,$code){
		$value = array('hash' =>$code);
		$this->db->where('email', $email);
		if ($this->db->update('user',$value)) {
			return true;
		}else{
			return false;
		}
	}

	public function fetch ()
	{

		$query = $this->db->get('todolist');
		return $query->result();

	}

	public function verify($email,$code){
		$data = array('activate' => 1);
		$this->db->where('hash', $code);
		$this->db->update('user', $data);
		if ($this->db->affected_rows() > 0 ) {
			return true;
		}else{
			return false;
		}
	}

	public function getuserbyid($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id',$id);
		$query=$this->db->get();
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return false;
		}
	}

	public function updated($id ,$data)
	{
		$this->db->where('user.id', $id);
		$this->db->update('user', $data);
		if ($this->db->affected_rows() > 0 ) {
			return true;
		}else{
			return false;
		}
	}
}