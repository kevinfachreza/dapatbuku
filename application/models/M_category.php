<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_category extends CI_Model
  {
    function __construct(){
      parent::__construct();
    }

    public function get_book_list($category, $start, $per_page){
		$query = $this->db->query("
			SELECT * from book b, book_category bc, book_category_connector bcc
			WHERE bcc.book_id = b.id_b and
			bcc.cat_id = bc.id_b_category and
			bc.name_b_category = '".$category."'
			LIMIT ".$per_page."
			OFFSET ".$start.";
		"
		);
        return $query->result();
      
    }
	
    public function get_all_book_cat($category){
		$query = $this->db->query("
			SELECT count(*) as count from book b, book_category bc, book_category_connector bcc
			WHERE bcc.book_id = b.id_b and
			bcc.cat_id = bc.id_b_category and
			bc.name_b_category = '".$category."'
		"
		);
        return $query->result();
      
    }
	

  }

 ?>