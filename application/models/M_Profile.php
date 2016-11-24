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
			SELECT * from USER where id_u = ".$id_in."
		");
		$result = $change->result();
		return $result;
    }
	
	 public function get_data_username($username){
      $change = $this->db->query
		("
			SELECT * from USER where username_u = '".$username."'
		");
		$result = $change->result();
		return $result;
    }
	
	public function get_books_user($id,$limit,$offset)
	{
		$change = $this->db->query
		("
			SELECT * from user_book where id_u_owner = ".$id."
			LIMIT ".$limit."
			OFFSET ".$offset."
		");
		$result = $change->result();
		return $result;
	}
	
	 public function count_all_books_user($id){
		$query = $this->db->query("
			SELECT count(*) as count from user_book where id_u_owner = ".$id."
		"
		);
		$temp = $query->result();
        return $temp['0']->count;
      
    }

  }

 ?>
