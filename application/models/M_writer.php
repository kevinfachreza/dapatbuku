<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	Class M_writer extends CI_Model
	{
    function __construct(){
		parent::__construct();
    }

    public function get_writer_data($slug){
      $query = $this->db->query("SELECT * FROM writer WHERE slug_writer = '".$slug."' ");

      return $query->result();
    }

    public function get_writer_books($id){
      $query = $this->db->query("SELECT slug_title_b, title_b, photo_cover_b FROM book WHERE writer_b = ".$id." ");

      return $query->result_array();
    }

	}
?>
