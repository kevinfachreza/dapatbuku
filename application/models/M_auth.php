<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_auth extends CI_Model
  {
    function __construct(){
      parent::__construct();
    }

    public function register($datain){
      $query = $this->db->insert('user', $datain);
      if($query){
        return true;
      }
      else {
        return false;
      }
    }

    public function login($user_check, $pass_check){
      $this -> db -> select('id_u');
      $this -> db -> from('user');
      $this -> db -> where('email_u', $user_check);
      $this -> db -> or_where('username_u', $user_check);
      $this -> db -> limit(1);

      $query = $this -> db -> get();

      if($query -> num_rows() == 1){
        foreach($query->result() as $row)
        {
          $result = $this->pass_check($row->id_u, $pass_check);

          if($result)
            return $row->id_u;
          else
            return false;
        }
      }
      else {
        return false;
      }

    }

    public function pass_check($id_in, $pass_in){
      $this -> db -> from('user');
      $this -> db -> where('id_u', $id_in);
      $this -> db -> where('password_u', $pass_in);

      $query = $this -> db -> get();

      if($query -> num_rows() == 1){
        return true;
      }
      else {
        return false;
      }
    }


  }

 ?>
