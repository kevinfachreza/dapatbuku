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
			bc.slug_category = '".$category."'
			LIMIT ".$per_page."
			OFFSET ".$start.";
		"
		);
        return $query->result();

    }

    public function count_all_book_cat($category){
		$query = $this->db->query("
			SELECT count(*) as count from book b, book_category bc, book_category_connector bcc
			WHERE bcc.book_id = b.id_b and
			bcc.cat_id = bc.id_b_category and
			bc.slug_category = '".$category."'
		"
		);
		$temp = $query->result();
        return $temp['0']->count;

    }

	public function get_category($category){
		$query = $this->db->query("
			SELECT * from book_category WHERE
			slug_category = '".$category."'
		"
		);
		$temp = $query->result();
        return $temp;

    }


  }

 ?>
