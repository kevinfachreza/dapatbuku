<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_book extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }

    public function getdata($id_in)
    {
      //$this -> db -> select('')
      $this->db->from('book');
      $this->db->where('id_b', $id_in);
      $this->db->limit(1);

      $query = $this -> db -> get();
      if($query -> num_rows > 0)
      {
        foreach($query -> result() as $row)
        {
          return $row;
        }
      }
      else
      {
        return false;
      }

    }

    public function get_b_seller()
    {
      $query = $this->db->query("select w.name_writer, w.id_writer, b.id_b, b.photo_cover_b, b.title_b from writer w, book b
                        where w.id_writer = b.writer and b.best_seller_b = 1;");
      return  $query ->result_array();
    }



  }






 ?>
