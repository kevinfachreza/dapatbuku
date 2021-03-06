<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_user extends CI_Model
  {
    function __construct(){
		parent::__construct();
    }

    public function getRequestUser($limit, $offset){
      $query = $this->db->query("SELECT br.*, u.firstname_u, u.email_u, u.phone_number_u FROM book_request br, user u WHERE (br.active_br = 0 OR br.active_br = 1) AND
                                 br.user_br = u.id_u ORDER BY id_br asc LIMIT ".$limit." OFFSET ".$offset."");
      return $query->result_array();
    }
    public function countRequestUser(){
      $query = $this->db->query("SELECT id_br FROM book_request WHERE active_br = 0 OR active_br = 1");

      return count($query->result_array());
    }
    public function ConfirmRequest($id, $status){
      $query = $this->db->query("UPDATE book_request SET active_br = '".$status."' WHERE id_br = '".$id."'");

      if($this->db->affected_rows() == 1){
        return TRUE;
      }
      else{
        return FALSE;
      }
    }

  }

 ?>
