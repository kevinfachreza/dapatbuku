<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_UserBook extends CI_Model
  {
    function __construct(){
		parent::__construct();
    }
	
	public function getRequestUserBook($limit, $offset)
	{
		$change = $this->db->query
		("
			SELECT * FROM user_book, user
			WHERE  user_book.active = 2 AND user_book.id_u_owner  = user.id_u
			ORDER BY id_u_b desc
			LIMIT ".$limit."
			OFFSET ".$offset."
		");
		$result = $change->result();
		return $result;
	}
	public function countAllRequestBook()
	{
		$change = $this->db->query
		("
			SELECT count(1) as count from user_book, user
			WHERE  user_book.active = 2 AND user_book.id_u_owner  = user.id_u
		");
		$result = $change->result();
		return $result[0]->count;
	}

    public function get_product_book($slug)
    {
      $query = $this->db->query("SELECT * FROM user_book ub where slug_title_u_b = '".$slug."'; ");

      return $query->result_array();
    }

    public function get_product_img($id_in)
    {
      $query = $this->db->query("SELECT * FROM user_book_image WHERE id_b_source = '".$id_in."'; ");

      return $query->result_array();
    }

    public function get_all_book()
    {
    	$query = $this->db->query("SELECT * FROM book");

      return $query->result_array();
    }

    public function addBookSource($data)
    {
    	$query = "UPDATE user_book
    	set
    	active = 1,
    	activated_at = CURRENT_TIMESTAMP,
    	id_b_source = ".$data['id_book']."
    	where id_u_b = ".$data['id_userbook']."
    	";
    	$update = $this->db->query($query);
    	if ($this->db->affected_rows() >= 0) {
    		return true; // your code
		} else {
		    return false; // your code
		}
    }


    public function rejectUserBook($data)
    {
    	$query = "UPDATE user_book
    	set
    	active = 0,
    	activated_at = CURRENT_TIMESTAMP,
    	rejected_reason = ".$data['reject_code']."
    	where id_u_b = ".$data['id_userbook']."
    	";
    	$update = $this->db->query($query);
    	if ($this->db->affected_rows() >= 0) {
    		return true; // your code
		} else {
		    return false; // your code
		}
    }

    public function get_reject_code()
    {
    	$query = "select * from user_book_rejectcode";
    	$update = $this->db->query($query);
      	return $update->result_array();

    }

  }

 ?>
