<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_Profile extends CI_Model
  {
    function __construct(){
      parent::__construct();
    }

    public function get_data($id_in){
      $change = $this->db->query
		("
			SELECT * from user where id_u = ".$id_in."
		");
		$result = $change->result();
		return $result;
    }
	
	public function get_data_username($username){
      $change = $this->db->query
		("
			SELECT * from user where username_u = '".$username."'
		");
		$result = $change->result();
		return $result;
    }
	
	public function get_user_book($id, $start, $per_page)
	{
		$query = 
		"
			SELECT * from user_book where id_u_owner = ".$id."
			LIMIT ".$per_page."
			OFFSET ".$start."
		";
		$do = $this->db->query($query);
		$result = $do->result();
		return $result;
	}

	public function get_all_book_user($id)
	{
		
		$query = 
		"
			SELECT COUNT(1) as count from user_book where id_u_owner = ".$id."
		";
		$do = $this->db->query($query);
		$result = $do->result();
		return $result;
	}
	
  }

 ?>
