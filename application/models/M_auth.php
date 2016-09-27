<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_auth extends CI_Model
  {
    function __construct(){
      parent::__construct();
    }

    public function register($datain){
      $this->db->insert('user', $datain);
    }

    public function login($em_check, $pass_check){
      $this -> db -> select('id_u');
      $this -> db -> from('user');
      $this -> db -> where('email_u', $em_check);
      $this -> db -> where('password_u', $pass_check);
      $this -> db -> limit(1);

      $query = $this -> db -> get();

      if($query -> num_rows() == 1){
        foreach($query->result() as $row)
        {
          return $row->id_u;
        }
      }
      else
      {
        return false;
      }
    }
  }
 ?>
